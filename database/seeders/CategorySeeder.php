<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $category= new Category();
        $category->name="Series populares";
        $category->save();

        $category2= new Category();
        $category2->name="Series aclamadas por la crítica";
        $category2->save();

        $category3= new Category();
        $category3->name="Clasicas";
        $category3->save();

        $category4= new Category();
        $category4->name="Para maratonear";
        $category4->save();


    }
}
