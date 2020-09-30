<template>
    <div class="flex-item">
        <span class="pe-7s-ticket"></span>
        <router-link :to="'/categories/posts/' + category.id" class="category-name">{{category.name}}</router-link>
        <p class="post-count">{{category.posts.length}}</p>
    </div>
</template>

<script>
export default {
    props:['category']
}
</script>

<style>

</style>