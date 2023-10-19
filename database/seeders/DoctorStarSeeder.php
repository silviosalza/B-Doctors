<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Star;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorStarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = Doctor::all();
        $stars = Star::all();

        foreach ($doctors as $doctor) {
            $selectedStar = $stars->random();
            $doctor->stars()->attach($selectedStar);
        }
    }
}
