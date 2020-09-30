<template>
    <layout>
      <template slot="main-container">
        <main-container></main-container>
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
}
</script>

<style>

</style>