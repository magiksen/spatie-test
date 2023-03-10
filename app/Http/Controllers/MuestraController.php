<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\Institution;
use App\Models\Muestra;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class MuestraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muestras = Muestra::all();

        return view('muestras.index', compact('muestras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id')->toArray();
        $doctors = Doctor::all()->pluck('name', 'id')->toArray();
        $institution = Institution::all()->pluck('name', 'id')->toArray();
        $subcategories = SubCategory::all()->pluck('name', 'id')->toArray();

        return view('muestras.create', compact('categories', 'doctors', 'institution', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function show(Muestra $muestra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function edit(Muestra $muestra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muestra $muestra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muestra $muestra)
    {
        //
    }
}
