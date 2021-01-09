<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new \App\Models\Category();
        $category->name = "Vente";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->name = "Location";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->name = "Achat";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->name = "Service";
        $category->is_online = 1;
        $category->save();

    }
}
