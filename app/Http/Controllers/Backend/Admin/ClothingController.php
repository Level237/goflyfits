<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Clothing;
use Illuminate\Http\Request;

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
        return view('admin.clothes.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clothing=new Clothing;
        $clothing->title=$request->title;
        $clothing->description=$request->description;
        $clothing->price=$request->price;
        $clothing->size=$request->size;
        $clothing->source=$request->source;
        $clothing->slug=$this->slugify($request->title);
        $image_path = $request->file('image')->store('clothings', 'public');
        $clothing->clothing_profile=$image_path;
        if($clothing->save()){

                foreach($request->categories as $categorie){

                    $clothing->categories()->attach($categorie);
                }
                return to_route('admin.clothings.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
