<template>
    <!-- Header -->
    <header :class="sticky ? 'sticky' : ''">
        <div class="topBar">
            <nav class="navbar">
                <!-- Desktop menu -->
                <ul class="navbar-menu">
                    <li><router-link to="/">Inicio</router-link></li>
                    <li><router-link to="/archivo">Archivo</router-link></li>
                    <li><router-link to="/galeria">Galería</router-link></li>
                    <li><router-link to="/contacto">Contacto</router-link></li>
                    <li class="login">
                        <a href="/dashboard">Ingresar</a>
                    </li>
                </ul>
                <!-- Mobile menu -->
                <div class="mobile-menu">
                    <i class="pe-7s-menu" @click="active()"></i>
                    <ul :class="['menu', menuActive ? 'active' : '']">
                        <li><router-link to="/">Inicio</router-link></li>
                        <li>
                            <router-link to="/archivo">Archivo</router-link>
                        </li>
                        <li>
                            <router-link to="/galeria">Galería</router-link>
                        </li>
                        <li>
                            <router-link to="/contacto">Contacto</router-link>
                        </li>
                        <li class="login">
                            <a href="/dashboard"
                                >Ingresar</a
                            >
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header -->
</template>
<script>
export default {
    data() {
        return {
            menuActive: false,
            sticky: false
        };
    },
    mounted() {
        this.removeActive();
        this.addSticky();
    },
    methods: {
        active() {
            this.menuActive = !this.menuActive;
        },
        removeActive() {
            window.addEventListener("resize", () => {
                if (window.innerWidth >= 998) {
                    this.menuActive = false;
                }
            });
        },
        addSticky() {
            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 3) {
                    this.sticky = true;
                } else {
                    this.sticky = false;
                }
            });
        }
    }
};
</script>

<style></style>
