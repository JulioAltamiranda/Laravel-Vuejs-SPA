<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        //
        'name'=>'/storage/posts/'.$faker->image('storage/app/public/posts',640,400,null,false)
    ];
});