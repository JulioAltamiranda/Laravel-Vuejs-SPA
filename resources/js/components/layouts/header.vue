<template>
    <!-- Header -->
    <header :class="sticky?'sticky':''">
        <div class="topBar">
            <nav class="navbar">
                <!-- Desktop menu -->
                <ul class="navbar-menu">
                    <li><router-link to="/">Inicio</router-link></li>
                    <li><router-link to="/archivo">Archivo</router-link></li>
                    <li><router-link to="/galeria">Galería</router-link></li>
                    <li><router-link to="/contacto">Contacto</router-link></li>
                </ul>
                <!-- Mobile menu -->
                <div class="mobile-menu">
                    <i class="pe-7s-menu" @click="active()"></i>
                    <ul :class="['menu',menuActive?'active':'']">
                        <li><router-link to="/">Inicio</router-link></li>
                        <li><router-link to="/archivo">Archivo</router-link></li>
                        <li><router-link to="/galeria">Galería</router-link></li>
                        <li><router-link to="/contacto">Contacto</router-link></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header -->
</template>
<script>
export default {
    data(){
        return{
            menuActive:false,
            sticky:false
        }
    },
    mounted(){
        var headerTop=document.getElementsByClassName('header-topbar')[0];
        var header=document.querySelector("header");
        this.removeActive();
        this.addSticky(headerTop,header);
    },
    methods:{
        active(){
            this.menuActive=!this.menuActive;
        },
        removeActive(){
            window.addEventListener('resize',()=>{
                if(window.innerWidth>=998){
                    this.menuActive=false;
                }
            })
        },
        addSticky(headerTop,header){
            window.addEventListener('scroll',()=>{
                if(window.pageYOffset>=3){
                    this.sticky=true;
                }else{
                    this.sticky=false;
                }
            })
        }
    }
}
</script>

<style>

</style>