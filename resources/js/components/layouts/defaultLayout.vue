<template>
    <div>
        <headerCmt></headerCmt>
        <slot name="main"></slot>
        <footerCmt></footerCmt>
    </div>
</template>

<script>
import headerCmt from './header'
import footerCmt from './footer'
export default {
    components:{
        headerCmt,
        footerCmt
    }
}
</script>

<style>

</style>