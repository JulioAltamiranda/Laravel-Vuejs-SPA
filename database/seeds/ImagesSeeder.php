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
        Storage::disk('public')->deleteDirectory('posts');
        $filepath = public_path('storage/posts');

        if(!File::exists($filepath)){
            File::makeDirectory($filepath);
        }
        for ($i=0; $i <5 ; $i++) { 
            factory(Image::class,2)->create([
                'post_id'=> $i
            ]);
        }
        
      
    }
}
