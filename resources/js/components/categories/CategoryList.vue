<template>
    <div class="categories">
        <div class="header-title">
          <h4>Categorias</h4>
        </div>
        <div class="category-content">
            <category  v-for="category in categories" :key="category.id" :category="category">
            </category>
        </div>
    </div>
</template>

<script>
import category from './categoryItem'
export default {
    components:{category},
    props:['categories'],
}
</script>

<style>

</style>