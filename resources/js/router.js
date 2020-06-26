import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import index from './components/Content/Product/index'
import dashbord from './components/Content/Dashbord/dashbord'
import coupon from './components/Content/Coupon/coupon'
import category from './components/Content/Category/category'
import profile from './components/Content/account/profile'
import contact from "./components/frontend/Content/contact"
import AboutUs from "./components/frontend/Content/AboutUs"
import FAQ from "./components/frontend/Content/FAQ"
import contents from "./components/frontend/Content/content"
import viewCart from './components/frontend/cart/viewCart'

const router = new VueRouter({

    hash: false,
    routes: [

        { path: '/product/index', component: index },
        { path: '/Home', component: dashbord },
        { path: '/category/index', component: category },
        { path: '/coupon/index', component: coupon },
        { path: '/profile', component: profile },


        { path: '/Contact', component: contact },
        { path: '/AboutUs', component: AboutUs },
        { path: '/FAQ', component: FAQ },
        { path: '/homes', component: contents },



        { path: '/shopping-cart', component: viewCart }



    ],

    hashbang: false,

})

export default router