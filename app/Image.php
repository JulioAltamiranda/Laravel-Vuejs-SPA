<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable=['name'];
    public function post(){
        return $this->belongTo(Post::class);
    }
}
