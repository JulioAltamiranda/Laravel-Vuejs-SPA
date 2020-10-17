<template>
    <layout>
        <template slot="main-container">
            <main class="main" style="grid-template-columns:minmax(100%,100%);margin-bottom:9em;">
                <transition name="fade">
                    <div class="loader" v-show="show">
                        <div class="loading"></div>
                    </div>
                </transition>
                <div class="posts">
                    <div class="post" v-if="!show">
                        <div class="post-img" v-if="post.images && post.images.length">
                            <carousel :per-page="1" >
                                <slide
                                    v-for="image in post.images"
                                    :key="image.id"
                                >
                                    <img class="full" :src="image.name" alt="" />
                                </slide>
                            </carousel>
                        </div>
                        <div class="iframe full" v-else-if="post.iframe!=''" v-html="post.iframe"></div>
                        <p class="category">{{ post.category.name }}</p>
                        <h2 class="post-title">{{ post.title }}.</h2>
                        <div class="post-meta">
                            <p class="owner">{{ post.user.name }}</p>
                            <span></span>
                            <p class="post-date">{{ post.created_at }}</p>
                        </div>
                        <hr />
                        <p class="post-text" v-html="post.description">
                            {{ post.description }}
                        </p>
                        <div class="content-tags">
                           <a href="" v-for="tag in post.tags" :key="tag.id">{{tag.name}}</a>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <div id="disqus_thread"></div>
                </div>
            </main>    
        </template>
    </layout>
</template>
<script>
import layout from "../components/layouts/defaultLayout";
import mainContainer from "../components/layouts/main";
import { Carousel, Slide } from "vue-carousel";
export default {
    components: {
        layout,
        mainContainer,
        Carousel,
        Slide
    },
    data() {
        return {
            post: "",
            show:true,
        };
    },
    created() {
        var ide = this.$route.params.id;
        axios.get("/api/posts/" + ide).then(response => {
            this.post = response.data;
            this.show=false;
        });
        
    },
    mounted(){
        this.disqus()
    },
    methods:{
        disqus(){
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://web-blog-1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        }
    }
};
</script>

<style>
.post-title{
    display: block!important;
   
}
.full, .full iframe{
    min-width: 100%!important;
    min-height: 100%!important;
    max-height: 100%!important;
    max-height: 100%!important;
}

</style>
