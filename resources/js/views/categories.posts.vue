<template>
    <layout>
        <template slot="main">
            <main class="main" style="grid-template-columns:100%;">
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
            paginate:['postsPaginate'],
            show:true
        }
    },
    created(){
        var ide = this.$route.params.id;
        axios.get('/api/categories/posts/' + ide).then(response=>{
            this.posts=response.data;
            this.show=false
        });
    }

}
</script>

<style>

</style>