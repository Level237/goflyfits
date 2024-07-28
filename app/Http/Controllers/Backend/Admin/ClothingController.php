<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClothingRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Clothing;
use App\Models\Town;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clothes=Clothing::all();
        return view('admin.clothes.index',compact('clothes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        $brands=Brand::all();
        $towns=Town::all();
        return view('admin.clothes.create',compact('categories','towns','brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClothingRequest $request)
    {
        $clothing=new Clothing;
        $clothing->title=$request->title;
        $clothing->description=$request->description;
        $resizeImageAndGetImageName=$this->resizeImage($request->file("image"));
        $clothing->price=$request->price;
        $clothing->brand_id=$request->brand_id;
        $clothing->size=$request->size;
        $clothing->town_id=$request->town_id;
        $clothing->slug=$this->slugify($request->title);
        //$image_path = $request->file('image')->store('clothings', 'public');
        $clothing->clothing_profile="clothings/".$resizeImageAndGetImageName;
        if($clothing->save()){

                foreach($request->categories as $categorie){

                    $clothing->categories()->attach($categorie);
                }
                return to_route('admin.clothings.index');
        }
    }

    public function resizeImage($image){
        $image_name = uniqid() .'.'. $image->getClientOriginalExtension();
        $path = public_path('storage/clothings/');
        $imgx = Image::make($image);
        $imgx->resize(600, 500, function ($constraint) {

        })->save($path.'/'.$image_name);
        return $image_name;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $clothing=Clothing::where('slug',$slug)->first();
        return view('clothings.detail',compact('clothing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories=Category::all();
        $clothing=Clothing::find($id);
        $brands=Brand::all();
        $towns=Town::all();
        return view('admin.clothes.edit',compact('clothing','categories','brands','towns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clothing=Clothing::find($id);
        $clothing->title=$request->title;
        $clothing->description=$request->description;
        $clothing->price=$request->price;
        $clothing->brand_id=$request->brand_id;
        $clothing->size=$request->size;
        $clothing->source=$request->source;
        $clothing->slug=$this->slugify($request->title);
        if($request->hasFile('image')){
            $imagePath=public_path()."/storage/".$request->path;
            unlink($imagePath);
            $image_path = $request->file('image')->store('clothings', 'public');
            $clothing->clothing_profile=$image_path;
        }
        $clothing->categories()->sync($request->categories);
        $clothing->save();

        return to_route('admin.clothings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clothing=Clothing::find($id);
        $clothing->delete();
        foreach($clothing->categories as $category){
            $clothing->categories->detach($category->id);
        }

        return back();
    }

    function slugify($string, $delimiter = '-') {
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        $clean = trim($clean, $delimiter);
        setlocale(LC_ALL, $oldLocale);
        return $clean;
    }
}
