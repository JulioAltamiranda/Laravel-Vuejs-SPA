<template>
    <layout>
      <template slot="main-container">
        <main class="main main-archive">
          <div class="archive">
            <div class="latest-posts">
              <h2>Últimas publicaciones</h2>
              <ul>
                <li v-for="post in posts" :key="post.id">
                  <span class="pe-7s-angle-right"></span>
                  <router-link :to="'/posts/'+post.id">{{post.title}}</router-link>
                </li>
              </ul>
            </div>
            <div class="archive-authors">
              <h2>Autores</h2>
              <ul>
                <li v-for="author in authors" :key="author.id">
                  <span class="pe-7s-angle-right"></span>
                  <a href="">{{author.name}}<span class="posts-number">({{author.posts.length}})</span></a>
                </li>
              </ul>
            </div>
            <div class="archive-tags">
              <h2>Etiquetas</h2>
              <ul>
                <li v-for="tag in tags" :key="tag.id">
                  <span class="pe-7s-angle-right"></span>
                  <router-link :to="'/tags/posts/'+tag.id">{{tag.name}}<span class="posts-number">({{tag.posts.length}})</span></router-link>
                </li>
              </ul>
            </div>
          </div>
        </main>
      </template>
    </layout>
</template>

<script>
import layout from '../components/layouts/defaultLayout'
import mainContainer from '../components/layouts/main'
export default {
    components:{
      layout,
      mainContainer
    },
    data(){
      return{
        posts:'',
        authors:'',
        tags:'',
      }
    },
    created(){
      axios.get('http://127.0.0.1:8000/api/posts/latest').then(response=>{
        this.posts=response.data;
      })
      axios.get('http://127.0.0.1:8000/api/posts/authors').then(response=>{
        this.authors=response.data;
        
      })
      axios.get('http://127.0.0.1:8000/api/tags').then(response=>{
        this.tags=response.data;
      })
    }
    
}
</script>

<style>
.main-archive{
  grid-template-columns: 100%;
  margin-bottom: 8em;
}
</style>