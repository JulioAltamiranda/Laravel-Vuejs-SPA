<?php

namespace App;

use App\Tag;
use App\User;
use App\Image;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'description','iframe', 'category_id', 'user_id', 'url'];
    protected $with=['user','category'];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function setCategoryIdAttribute($name)
    {
        $this->attributes['category_id'] = Category::find($name) ? $name : Category::create(['name' => $name])->id;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function getCreatedAtAttribute($name){
        return Carbon::parse($name)->diffForHumans();
    }
}
