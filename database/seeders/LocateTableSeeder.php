<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $locate = new \App\Models\Locate();
        $locate->name = "Paris";
        $locate->save();

        $locate = new \App\Models\Locate();
        $locate->name = "Lyon";
        $locate->save();

        $locate = new \App\Models\Locate();
        $locate->name = "Marseille";
        $locate->save();

        $locate = new \App\Models\Locate();
        $locate->name = "Toulouse";
        $locate->save();

        $locate = new \App\Models\Locate();
        $locate->name = "Bordeaux";
        $locate->save();

        $locate = new \App\Models\Locate();
        $locate->name = "Lille";
        $locate->save();


    }
}
