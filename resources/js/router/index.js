import Vue from 'vue';
import VueRouter from 'vue-router';
import home from '../views/home';
import archive from '../views/archive';
import contact from '../views/contact';
import post from '../views/PostShow';
import error from '../views/error';
import CategoriesPosts from '../views/categories.posts'
import TagsPosts from '../views/tags.posts'
Vue.use(VueRouter)

const routes = [
    { path: '/', component: home, name: 'home' },
    { path: '/archivo', component: archive, },
    { path: '/contacto', component: contact, },
    { path: '/posts/:id', component: post,name:'post.show' },
    { path: '/categories/posts/:id', component: CategoriesPosts, name:'categories.posts' },
    { path: '/tags/posts/:id', component: TagsPosts, name:'tags.posts' },
    { path: '/*', component: error, }
]
const router = new VueRouter({
    routes,
    mode: 'history'
    
})
export default router