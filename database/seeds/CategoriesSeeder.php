<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create(['name'=>'Web design']);
        Category::create(['name'=>'Web development']);
        Category::create(['name'=>'App development']);


    }
}
