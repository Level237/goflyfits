<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClothingRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Clothing;
use App\Models\Measure;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Laravel\Facades\Image;

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
        if(Session::has('gender')){
            $categories=Category::all();
            $brands=Brand::all();
            $gender=Session::get('gender');
            $towns=Town::all();
            return view('admin.clothes.create',compact('categories','towns','brands','gender'));
        }else{

            return to_route('admin.selectGender');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClothingRequest $request)
    {

        if(Session::has('gender')){
            $clothing=new Clothing;
            $gender=Session::get('gender');
        $clothing->title=$request->title;
        $clothing->gender=$gender;
        $measure=$this->saveMeasure($request);
        $clothing->description=$request->description;
        $resizeImageAndGetImageName=$this->resizeImage($request->file("image"));
        $clothing->price=$request->price;
        $clothing->measure_id=$measure->id;
        $clothing->brand_id=$request->brand_id;
        $clothing->size=$request->size;
        $clothing->town_id=$request->town_id;
        $clothing->slug=$this->slugify($request->title);
        //$image_path = $request->file('image')->store('clothings', 'public');
        $clothing->clothing_profile="clothings/".$resizeImageAndGetImageName;
        if($clothing->save()){
                Session::forget('gender');
                foreach($request->categories as $categorie){

                    $clothing->categories()->attach($categorie);
                }
                return to_route('admin.clothings.index');
        }
        }else{

            return to_route('admin.selectGenderView');
        }

    }

    public function resizeImage($image){
        $image_name = uniqid() .'.'. $image->getClientOriginalExtension();
        $path = public_path('storage/clothings/');
        $imgx = Image::read($image);
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
        $clothing->gender=$request->gender;
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

        return to_route('admin.clothings.index')->with('success','vetement ajouter avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clothing=Clothing::find($id);

        $clothing->measure()->delete();
        foreach($clothing->categories as $category){
            $clothing->categories->detach($category->id);
        }

        //if($clothing->payment()){
            //return back()->with('danger',"ce vetement ne peut pas etre suprimer car il y'a un payment en cours pour ce vetement");
        //}
        $clothing->delete();
        return back()->with('danger','vetement suprimer avec success');
    }

    public function selectGenderView(){

        return view('admin.clothes.select-gender');
    }

    public function selectGender(Request $request){

        Session::put("gender",$request->gender);
        Session::save();

        return to_route('admin.clothings.create');
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

    public function saveMeasure($request){

        $gender_user=Session::get('gender_user');

        if($gender_user==1){

            $measure=new Measure;
            $measure->full_shoulder_width=$request->full_shoulder_width;
            $measure->sleeves=$request->sleeves;
            $measure->full_chest=$request->full_chest;
            $measure->waist=$request->waist;
            $measure->hips=$request->hips;
            $measure->front_shoulder_width=$request->front_shoulder_width;
            $measure->back_shoulder_width=$request->back_shoulder_width;
            $measure->front_jacket_length=$request->front_jacket_length;
            $measure->neck=$request->neck;
            $measure->trouser_waist=$request->trouser_waist;
            $measure->crotch=$request->crotch;
            $measure->thigh=$request->thigh;
            $measure->throuser_length=$request->throuser_length;
            $measure->cuff=$request->cuff;
            $measure->save();
            return $measure;
        }
        if($gender_user==0){

            $measure=new Measure;
            $measure->hips=$request->hips;
            $measure->front_shoulder_width=$request->front_shoulder_width;
            $measure->back_shoulder_width=$request->back_shoulder_width;
            $measure->front_jacket_length=$request->front_jacket_length;
            $measure->neck=$request->neck;
            $measure->throuser_length=$request->throuser_length;
            $measure->cuff=$request->cuff;
            $measure->back_length=$request->back_length;
            $measure->bust=$request->bust;
            $measure->point_bust=$request->point_bust;
            $measure->sleeve_length=$request->sleeve_length;
            $measure->arm=$request->arm;
            $measure->armHole=$request->armHole;
            $measure->coat_length=$request->coat_length;
            $measure->skirt_length=$request->skirt_length;
            $measure->hight_hip=$request->hight_hip;
            $measure->inseam=$request->inseam;
            $measure->seat=$request->seat;
            $measure->trouser_thigh=$request->trouser_thigh;
            $measure->save();

            return $measure;
        }

    }
}
