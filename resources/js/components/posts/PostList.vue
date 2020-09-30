<template>
    <div class="posts">
        <paginate name="posts" :list="posts" :per="3">
        <post v-for="post in paginated('posts')" :key="post.id" :post="post"></post>
        </paginate>
        <paginate-links v-if="this.$route.name!='post.show'" :limit="3" for="posts"></paginate-links>
    </div>
</template>

<script>
import post from './PostItem.vue'
export default {
    props:['posts'],
    components:{
       post
    },
    data(){
        return{
            paginate:['posts']
        }
    }
    
}
</script>

<style>
.paginate-links{
    width:100%;
    list-style: none;
    text-align: center;
    display: flex;
    justify-content: center;
    min-height:90px;
    margin-bottom: 1em;
}
.paginate-links li a{
    margin-right: 4px;
    min-width: 35px;
    border-radius:4px;
    font-size: 13px;
    padding: 0.4em 1em;
    background: #1c262bd2;
    
}
.paginate-links li.active a{
    margin-right: 4px;

    background: #1c262b!important;
}
.paginate-links li a{
    color: #fff;
    cursor: pointer;
}

</style>