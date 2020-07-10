<template>
            <header class="li-header-4">
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Fakhri:</span><a href="#">(+126) 92 915 250 </a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>

                                            <div class="" v-if="!logged"><router-link to="/logIn" ><span>Sign In</span></router-link></div>
                                            <div class="" v-if="logged"><a href="" @click="loggedOut()"><span>Logout </span></a></div>


                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class="currency-selector-wrapper">Currency :</span>
                                            <div class="ht-currency-trigger"><span>USD $</span></div>
                                            <div class="currency ht-currency">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">EUR €</a></li>
                                                    <li class="active"><a href="#">USD $</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class="language-selector-wrapper">Language :</span>
                                            <div class="ht-language-trigger"><span>English</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img src="css/fronts/images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                    <li><a href="#"><img src="css/fronts/images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.html">
                                        <img src="css/fronts/images/menu/logo/2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox" @submit.prevent="Look()">
                                    <select class="nice-select select-search-category">
                                          <option value="0">All</option>

                                        <option v-for="select in category" :key="select.ids" value="0">{{select.name}}</option>

                                    </select>
                                    <input type="text"  v-model="quicksearch"  placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"  ><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                          <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <router-link to="/wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">{{heart}}</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            </router-link>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">{{totale}} TND
                                                    <span class="cart-item-count">{{basket}}</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li v-for="(cart,index) in carts" :key="cart.id">
                                                        <a href="single-product.html" class="minicart-product-image">
                                                 <img v-bind:src="'products/small/'+cart.image" alt="" class="img-fluid">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a >{{cart.product_name}}</a></h6>
                                                            <span>{{cart.price }} x {{cart.amount}}</span>
                                                        </div>
                                                        <button class="close" title="Remove" @click="removeCart(index)">
                                                            <i class="fa fa-close" ></i>
                                                        </button>
                                                    </li>

                                                </ul>
                                                <p class="minicart-total">SUBTOTAL: <span>{{totale}} TND </span></p>
                                                <div class="minicart-button">
                                                   <router-link to="/shopping-cart"> <a href="shopping-cart.html" class="li-button li-button-fullwidth li-button-dark">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    </router-link>

                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class="hb-menu">
                                   <nav>
                                       <ul>
                                           <li> <router-link to="/"><a >Accueil </a> </router-link></li>
                                           <li> <router-link to="/AboutUs"><a>À propos de nous</a></router-link></li>
                                           <li><router-link to="/contact"><a >CONTACT</a></router-link></li>
                                           <li> <router-link to="/FAQ"><a>FAQ</a></router-link></li>
                                       </ul>
                                   </nav>
                               </div>
                               <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
</template>

<script>
export default {

    data() {
        return {
            open:false,
            itemCount:0,
            opencart:false,

            basket:0,
            totale:0,
            shows:{},
            carts:[],
            badge:0,
            quantity:1,
            totaleprice:0,
            cartadd:{
                products_id:'',
                product_name:'',
                product_code:'',
                price:'',
                image:'',
                amount:'',
                stock:'',
            },
            wishesadd:{
                products_id:'',
                product_name:'',
                product_code:'',
                price:'',
                image:'',
            },
            wishes:[],
            heart:0,
            quicksearch:'',
            logged : User.loggedIn(),
            category:{}


        }
    },
    mounted() {
        this.viewcart();
        this.viewWish();

      },
      created(){
        this.addwish();
        this.listen();
        this.DeleteWish();
        this.removescart();
        this.UpdateCart();
        this.getAlL();
      },
    methods:{
searchs(){

},
        loggedOut(){
            User.loggedOut();
        },
        Look(){
            fetch('/api/product/Search?q='+this.quicksearch)
            .then(res => res.json())
            .then(res => {

            })
            .catch(err => {

            })



         },
    viewcart(){
      if(localStorage.getItem('carts')){
        this.carts = JSON.parse(localStorage.getItem('carts'));
        this.basket= this.carts.length ;
        this.totale =this.carts.reduce((totale,item) => {
        return totale+ item.amount * item.price
        },0)
      }
        },
        removeCart(index){
        this.carts.splice(index,1);
        this.storeCart();
        },
        storeCart(){

            let parsed = JSON.stringify(this.carts);
            localStorage.setItem('carts',parsed);
            this.viewcart() ;
        },

        listen(pro){
EventBus.$on('start',(pro) => {
    this.cartadd.products_id = pro.id ;
    this.cartadd.product_name = pro.p_name;
    this.cartadd.product_code=pro.p_code;
    this.cartadd.price=pro.price;
    this.cartadd.amount=this.quantity;
    this.cartadd.image=pro.image;
    this.cartadd.stock = pro.stock ;
    this.carts.push(this.cartadd);
    this.cartadd = {};
    this.storeCart();
})
        },

        viewWish(){
            if(localStorage.getItem('wishes')){
                this.wishes= JSON.parse(localStorage.getItem('wishes')) ;
                this.heart = this.wishes.length ;
            }

        },
        addwish(wish){
            EventBus.$on('wishes',(wish)=>{

                this.wishesadd.products_id = wish.id ;
                this.wishesadd.product_name = wish.p_name;
                this.wishesadd.product_code=wish.p_code;
                this.wishesadd.price=wish.price;
                this.wishesadd.image=wish.image;
                this.wishes.push(this.wishesadd);
                this.wishesadd = {};
                this.storeWish();
            });

        },
        storeWish(){
            let parsed = JSON.stringify(this.wishes);
            localStorage.setItem('wishes',parsed);
            this.viewWish();
        },


        DeleteWish(){
            EventBus.$on('delteWish',()=>{

                this.viewWish();
            })
        },
        removescart(index){
            EventBus.$on('deletecart',(index)=> {
            this.removeCart(index);
            this.viewcart();
            });

        },
        UpdateCart(){
                EventBus.$on('storeCart',()=> {
                 this.viewcart();
            })
        },
        getAlL(){
            axios.get('api/listerCategry').then(res=>{
                this.category = res.data;
            })
        }


    }

}
</script>

<style>

</style>
