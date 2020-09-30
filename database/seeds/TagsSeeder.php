<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tag::create(['name'=>'Laravel']);
        Tag::create(['name'=>'Vuejs']);
        Tag::create(['name'=>'Html5']);
        Tag::create(['name'=>'Css']);
        Tag::create(['name'=>'Javascript']);
        Tag::create(['name'=>'Php']);
        
    }
}
