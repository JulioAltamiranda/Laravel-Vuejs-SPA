<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        factory(Post::class)->create(['iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/z-xkbNLIB5w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', 'category_id' => 1, 'user_id' => 2]);
        factory(Post::class)->create(['iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/T6Jcl-GqeBA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', 'category_id' => 1, 'user_id' => 2]);
        factory(Post::class)->create(['iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/7eX1hl8AWXA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', 'category_id' => 2, 'user_id' => 3]);
        factory(Post::class)->create(['iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/3SdlcNvV33A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', 'category_id' => 3, 'user_id' => 3]);
        
        $posts=Post::all();

        foreach($posts as $post){
            $post->tags()->sync([1,2,3,4,5,6]);
            $post->save();
        }

    }
}
