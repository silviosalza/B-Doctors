<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $doctorsCount = 20;
        for ($i = 1; $i <= $doctorsCount; $i++) {
            $newDoctor = new Doctor();
            $newDoctor->user_id = $i;
            $newDoctor->address = $faker->address;
            $newDoctor->description = $faker->text;
            $newDoctor->services = $faker->words(3, true);
            $newDoctor->photo = $faker->imageUrl();
            $newDoctor->visible = $faker->boolean;
            $newDoctor->slug = Doctor::generateSlug($faker->name); // Assicurati che il modello Doctor abbia un metodo generateSlug

            $newDoctor->save();
        }
    }
}
