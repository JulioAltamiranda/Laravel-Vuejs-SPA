<template>
    <layout>
      <template slot="main-container">
        <div class="error-page">
            <div class="error-content">
                <h1>Error 404</h1>
                <p>Lo sentimos, pero la página que buscas no existe</p>
            </div>
        </div>
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
    }
}
</script>
