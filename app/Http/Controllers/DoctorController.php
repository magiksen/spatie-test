<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Institution;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institution = Institution::all()->pluck('name', 'id')->toArray();

        return view('doctors.create', compact('institution'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'institution_id' => 'nullable',
        ]);

        $doctors = new Doctor;

        $doctors->name = $request->name;

        $doctors->institution_id = $request->institution_id;

        $doctors->save();

        return redirect()->route('doctors.index', $doctors)->with('info', 'El doctor se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $institution = Institution::all()->pluck('name', 'id')->toArray();
        $doctor = Doctor::find($doctor->id);

        return view('doctors.edit', compact('institution', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $doctor = Doctor::find($doctor->id);

        $doctor->name = $request->name;

        $doctor->institution_id = $request->institution_id;

        $doctor->save();

        return redirect()->route('doctors.edit', $doctor)->with('info', 'La información se actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor = Doctor::find($doctor->id);

        $doctor->delete();

        return redirect()->route('doctors.index')->with('info', 'La información se elimino con exito');
    }
}
