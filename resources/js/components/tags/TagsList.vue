<template>
    <div class="tags">
        <div class="header-title">
          <h4>Etiquetas</h4>
        </div>
        <div class="content-tags">
            <router-link :to="'/tags/posts/'+tag.id" v-for="tag in tags" :key="tag.id">{{tag.name}}</router-link>
        </div>
    </div>
</template>

<script>
export default {
    props:['tags'],    
}
</script>

<style>

</style>