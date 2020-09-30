<template>
    <layout>
      <template slot="main-container">
        <main class="main tags-posts">
            <transition name="fade">
                <div class="loader" v-show="show">
                    <div class="loading"></div>
                </div>
            </transition>
            <posts :posts="posts" v-if="!show"></posts>
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
        axios.get('http://127.0.0.1:8000/api/tags/posts/' + ide).then(response=>{
            this.posts=response.data;
            this.show=false
        });
    }

}
</script>

<style>
.tags-posts{
    grid-template-columns:100%;
}

</style>