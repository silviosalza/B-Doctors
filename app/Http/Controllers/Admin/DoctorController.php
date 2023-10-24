<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Typology;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(Request $request)
    {
        // $user = Auth::user();

        // $doctor = Doctor::with('typologies')->find(Auth::user()->id);
        // return view('admin.doctors.index', compact('doctor', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $typologies = Typology::all();
        return view('admin.doctors.create', compact('typologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $user = Auth::user();

        $id = Auth::id();
        $doctor = new Doctor;
        $doctor->fill($data);
        $doctor->id = $id;
        $doctor->user_id = $id;
        $doctor->slug = Str::slug($user->name, '-');
        $doctor->save();

        if (Arr::exists($data, 'typologies')) $doctor->typologies()->attach($data['typologies']);

        return redirect()->route('admin.doctors.show', $doctor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     *
     */
    public function show(Doctor $doctor)
    {
        $user = Auth::user();

        return view('admin.doctors.show', compact('doctor', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     *
     */
    public function edit(Doctor $doctor)
    {
        $typologies = Typology::all();
        return view('admin.doctors.edit', compact('doctor', 'typologies'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return to_route('admin.dashboard');
    }
}