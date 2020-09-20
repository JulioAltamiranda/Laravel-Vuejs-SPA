<?php

namespace App;

use App\Tag;
use App\User;
use App\Image;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'description', 'category_id', 'user_id', 'url'];

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
    public function contain(Tag $paramTag)
    {
        foreach ($this->tags as $tag) {
            if ($tag->id == $paramTag->id) {
                return true;
                break;
            }
        }
        return false;
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
