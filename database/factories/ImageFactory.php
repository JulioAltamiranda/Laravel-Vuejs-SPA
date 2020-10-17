<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        //
        'name'=>'/storage/posts/'.$faker->image(storage_path().'/app/public/posts/',470,320,false)
    ];
});
