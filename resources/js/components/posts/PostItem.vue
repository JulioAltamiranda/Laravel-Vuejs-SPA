<template>
    <div class="post">
        <div class="post-image" v-if="post.images && post.images.length">
            <carousel :per-page="1">
                <slide v-for="image in post.images" :key="image.id" >
                    <img :src="image.name" alt="">
                </slide>
            </carousel>
        </div>
        <div class="iframe" v-else-if="post.iframe!=''" v-html="post.iframe">
            {{post.iframe}}
        </div>
        <p class="category">{{post.category.name}}</p>
        <h2>{{post.title}}.</h2>
        <div class="post-meta">
          <p class="owner">{{post.user.name}}</p>
          <span></span>
          <p class="post-date">{{post.created_at}}</p>
        </div>
        <hr>
        <p class="post-text" v-if="post.description.length>100" v-html="post.description.substring(0,100)+'..'"></p>
        <p class="post-text" v-else v-html="post.description"></p>
        <router-link :to="'/posts/' + post.id" class="readMore"> Leer más </router-link> 
    </div>
</template>
<script>
import { Carousel, Slide } from 'vue-carousel';
export default {
 props:['post'],
    components:{
        Carousel,
        Slide
    }
}
</script>

<style>


</style>