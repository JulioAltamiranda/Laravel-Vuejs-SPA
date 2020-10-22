<template>
    <layout>
      <template slot="main">
        <main class="main">
            <transition name="fade">
                <div class="loader" v-show="show">
                    <div class="loading"></div>
                </div>
            </transition>
            <posts :posts="posts" class="postShow" v-if="!show"></posts>
        </main>
      </template>
    </layout>
</template>
<script>
import layout from '../components/layouts/defaultLayout'
import mainContainer from '../components/layouts/main'
import posts from '../components/posts/PostList'
export default {
    components:{
        layout,
        mainContainer,
        posts
    },
    data(){
        return{
            posts:'',
            show:true
        }

    },
    created(){
        var ide = this.$route.params.id;
        axios.get('/api/tags/posts/' + ide).then(response=>{
            this.posts=response.data;
            this.show=false
        });
    }
}
</script>
