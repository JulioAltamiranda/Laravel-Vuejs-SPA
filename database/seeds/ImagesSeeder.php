<?php

use App\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(Storage::has('posts')){
            Storage::disk('public')->deleteDirectory('posts');
        }
        Storage::disk('public')->makeDirectory('posts');
        
        factory(Image::class,2)->create([
            'post_id'=> 1
        ]);
        factory(Image::class)->create([
            'post_id'=> 2
        ]);
        
        
      
    }
}
