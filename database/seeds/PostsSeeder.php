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
        
        factory(Post::class, 5)->create(['description'=>'<p>Lorem&nbsp;ipsum&nbsp;dolor,&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Dolor&nbsp;explicabo&nbsp;deleniti,&nbsp;vel&nbsp;recusandae&nbsp;odit,&nbsp;atque&nbsp;facere&nbsp;dicta&nbsp;dolorum&nbsp;repudiandae&nbsp;officia&nbsp;suscipit&nbsp;corporis&nbsp;non&nbsp;vero.&nbsp;Deserunt,&nbsp;reprehenderit&nbsp;maiores!&nbsp;Commodi,&nbsp;ipsa&nbsp;pariatur?&nbsp;Consequuntur&nbsp;repellendus&nbsp;mollitia&nbsp;beatae&nbsp;porro&nbsp;reiciendis&nbsp;esse&nbsp;nisi&nbsp;nemo&nbsp;rem&nbsp;explicabo&nbsp;iusto,&nbsp;molestias,&nbsp;maiores&nbsp;repellat&nbsp;inventore&nbsp;a&nbsp;veniam&nbsp;commodi&nbsp;quo&nbsp;animi,&nbsp;aspernatur&nbsp;sed&nbsp;voluptatum.&nbsp;Quaerat&nbsp;fugiat&nbsp;magnam&nbsp;fuga&nbsp;omnis&nbsp;dolorum&nbsp;facilis&nbsp;minus&nbsp;autem&nbsp;ea&nbsp;eos&nbsp;debitis&nbsp;neque&nbsp;rerum&nbsp;eum&nbsp;natus&nbsp;ipsa&nbsp;ex&nbsp;quam&nbsp;ipsum&nbsp;nihil&nbsp;rem&nbsp;temporibus&nbsp;tenetur,&nbsp;tempore&nbsp;beatae&nbsp;amet&nbsp;asperiores.&nbsp;Earum&nbsp;quibusdam&nbsp;dolorem&nbsp;commodi&nbsp;deserunt&nbsp;unde&nbsp;expedita&nbsp;autem&nbsp;delectus,&nbsp;quod&nbsp;at&nbsp;debitis,&nbsp;sequi&nbsp;nulla&nbsp;hic&nbsp;doloremque&nbsp;totam&nbsp;ipsam&nbsp;vel&nbsp;dignissimos!&nbsp;Soluta&nbsp;deserunt&nbsp;fuga&nbsp;ea&nbsp;eveniet&nbsp;officiis&nbsp;nostrum&nbsp;blanditiis&nbsp;adipisci&nbsp;doloribus&nbsp;id&nbsp;autem&nbsp;nobis&nbsp;atque&nbsp;qui&nbsp;nisi&nbsp;accusamus&nbsp;error&nbsp;itaque&nbsp;nihil&nbsp;placeat,&nbsp;perspiciatis&nbsp;quasi&nbsp;consequuntur&nbsp;earum&nbsp;ullam&nbsp;quisquam&nbsp;veritatis&nbsp;similique.&nbsp;Unde&nbsp;cum&nbsp;ad&nbsp;laborum&nbsp;blanditiis,&nbsp;ut&nbsp;placeat.&nbsp;Perspiciatis&nbsp;soluta&nbsp;sed&nbsp;praesentium&nbsp;nemo&nbsp;nam&nbsp;est&nbsp;suscipit&nbsp;alias.&nbsp;Necessitatibus&nbsp;officiis&nbsp;neque&nbsp;amet&nbsp;alias&nbsp;culpa&nbsp;explicabo,&nbsp;voluptas&nbsp;fugiat&nbsp;hic&nbsp;repellendus&nbsp;dolorum&nbsp;incidunt&nbsp;ab&nbsp;molestiae&nbsp;iure&nbsp;iusto&nbsp;recusandae&nbsp;magni&nbsp;labore&nbsp;ut&nbsp;in&nbsp;quidem&nbsp;dignissimos&nbsp;est!&nbsp;Possimus&nbsp;molestiae&nbsp;porro&nbsp;ullam&nbsp;iste&nbsp;aliquam&nbsp;repudiandae,&nbsp;tempora&nbsp;voluptatum&nbsp;eos&nbsp;iure,&nbsp;magnam&nbsp;nisi&nbsp;consequuntur&nbsp;unde,&nbsp;alias&nbsp;inventore&nbsp;optio.&nbsp;Tempora&nbsp;amet&nbsp;incidunt&nbsp;aliquid,&nbsp;nesciunt&nbsp;laborum&nbsp;dolore&nbsp;id&nbsp;quo&nbsp;similique?</p>','category_id'=>1,'user_id'=>2]);

        factory(Post::class)->create(['description'=>'<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur,&nbsp;adipisicing&nbsp;elit.&nbsp;Incidunt&nbsp;aliquam&nbsp;earum&nbsp;a&nbsp;excepturi&nbsp;voluptas,&nbsp;dolor&nbsp;delectus&nbsp;enim&nbsp;hic&nbsp;consequuntur&nbsp;placeat&nbsp;eligendi&nbsp;exercitationem&nbsp;adipisci&nbsp;odio&nbsp;quis,&nbsp;fugit&nbsp;explicabo.&nbsp;Fugiat&nbsp;dolorem&nbsp;quaerat,&nbsp;velit&nbsp;sapiente&nbsp;dolore&nbsp;suscipit&nbsp;cum&nbsp;praesentium&nbsp;repellat&nbsp;quis&nbsp;doloremque&nbsp;sint.</p>','iframe'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/WCKrji3SRW0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>','category_id'=>2,'user_id'=>2]);
        factory(Post::class)->create(['description'=>'<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur,&nbsp;adipisicing&nbsp;elit.&nbsp;Incidunt&nbsp;aliquam&nbsp;earum&nbsp;a&nbsp;excepturi&nbsp;voluptas,&nbsp;dolor&nbsp;delectus&nbsp;enim&nbsp;hic&nbsp;consequuntur&nbsp;placeat&nbsp;eligendi&nbsp;exercitationem&nbsp;adipisci&nbsp;odio&nbsp;quis,&nbsp;fugit&nbsp;explicabo.&nbsp;Fugiat&nbsp;dolorem&nbsp;quaerat,&nbsp;velit&nbsp;sapiente&nbsp;dolore&nbsp;suscipit&nbsp;cum&nbsp;praesentium&nbsp;repellat&nbsp;quis&nbsp;doloremque&nbsp;sint.</p>','iframe'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/AMaSnuUhyjI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>','category_id'=>2,'user_id'=>3]);
        factory(Post::class)->create(['description'=>'<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur,&nbsp;adipisicing&nbsp;elit.&nbsp;Incidunt&nbsp;aliquam&nbsp;earum&nbsp;a&nbsp;excepturi&nbsp;voluptas,&nbsp;dolor&nbsp;delectus&nbsp;enim&nbsp;hic&nbsp;consequuntur&nbsp;placeat&nbsp;eligendi&nbsp;exercitationem&nbsp;adipisci&nbsp;odio&nbsp;quis,&nbsp;fugit&nbsp;explicabo.&nbsp;Fugiat&nbsp;dolorem&nbsp;quaerat,&nbsp;velit&nbsp;sapiente&nbsp;dolore&nbsp;suscipit&nbsp;cum&nbsp;praesentium&nbsp;repellat&nbsp;quis&nbsp;doloremque&nbsp;sint.</p>','iframe'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/dPLHi7tsoFU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>','category_id'=>2,'user_id'=>3]);
        
        $posts=Post::all();

        foreach($posts as $post){
            $post->tags()->sync([1,2,3,4,5,6]);
            $post->save();
        }

    }
}
