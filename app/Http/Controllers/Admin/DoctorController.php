<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Typology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();
        $doctor = Doctor::with('typologies')->find(Auth::user()->id);
        if ($doctor) {
            return view('admin.doctors.index', compact('doctor', 'user'));
        } else {
        }
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
        // $data = $request->all();
        // $doctor = new Doctor();
        // $doctor = Doctor::create($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     *
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     *
     */
    public function edit(Doctor $doctor)
    {
        //
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
        //
    }
}
