<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $towns=Town::all();
        return view('admin.towns.index',compact('towns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.towns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $town=new Town;
        $town->town_name=$request->town_name;
        $town->save();

        return to_route('admin.towns.index');
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
        $town=Town::find($id);
        $town->delete();

        return back();
    }
}
