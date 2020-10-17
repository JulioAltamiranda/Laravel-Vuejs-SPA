<template>
    <div class="post">
        <div class="post-image" v-if="post.images && post.images.length">
            <carousel :per-page="1" :navigationEnabled="false">
                <slide v-for="image in post.images" :key="image.id" >
                    <div class="img-content">
                        <img :src="image.name" alt="">
                    </div>
                </slide>
            </carousel>
        </div>
        <div class="img-content" v-else-if="post.iframe!=''" v-html="post.iframe">
            {{post.iframe}}
        </div>
        <p class="category">{{post.category.name}}</p>
        <h2>{{post.title}}</h2>
        
        <div class="post-meta">
          <p class="owner">{{post.user.name}}</p>
          <span></span>
          <p class="post-date">{{post.created_at}}</p>
        </div>
        <hr>
        <p class="post-text" v-if="post.description.length>130" v-html="post.description.substring(0,130)+'..'"></p>
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
.VueCarousel-pagination{
    position: absolute;
    bottom: 10px;
    max-height: 0;
    overflow: hidden;
    transition: all 0.7s ease-in-out;
    z-index: -1;
}
.VueCarousel:hover .VueCarousel-pagination{
    max-height: 1000px!important;
    overflow: visible!important;
    z-index: 1;
}
</style>