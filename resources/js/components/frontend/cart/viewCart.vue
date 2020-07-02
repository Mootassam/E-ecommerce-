<template>
  <div>
                  <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60" v-if="vcart">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">Delte</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Produit</th>
                                                <th class="li-product-price">Prix</th>
                                                <th class="li-product-quantity">Quantité</th>
                                                <th class="li-product-subtotal">Totale</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(cart,index) in carts" :key="index">
                                                <td class="li-product-remove"><a href="#" @click="deleteCart(index)"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#">
                                    <img v-bind:src="'products/small/'+cart.image" width="100" >


                                                    </a></td>
                                                <td class="li-product-name"><a href="#">{{cart.product_name}}</a></td>
                                                <td class="li-product-price"><span class="amount">{{cart.price}} TND </span></td>
                                                <td class="quantity">

                                                    <label>Quantity</label>

                                                        <input class="from-control" min="0"  v-model="cart.amount"  type="number"  >


                                                <div class="alert alert-danger" role="alert"  v-if="cart.quantity > cart.stock" >
                                                vous avez depasser ona dans le stock
                                                </div>

                                                </td>
                                                <td class="product-subtotal"><span class="amount">{{cart.price * cart.amount}} TND </span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                 <form  @click.prevent="Coupon()" >
                                <div class="row">
                                    <div class="col-12">

                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" v-model="forms.coupon_code" type="text">
                                                <input type="hidden" name="" v-model="tprice">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                                <br><br>
                                          <span class="alert-danger" v-if="errors.coupon_code">{{errors.coupon_code[0]}}</span>
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit" @click="storeCart">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>$130.00</span></li>
                                                <li>Total <span>{{totale}} TND </span></li>
                                            </ul>
                                            <a href="#" @click="checkout()">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<chekout :data=carts v-if="check"></chekout>
  </div>
</template>

<script>
    import chekout from './chekout'

export default {
    components:{chekout},
data() {
    return {
    carts:{},
    tprice:'',
    check:false,
    vcart:true,
    form :{
        quantity:'',
    },
    errors:'',
    forms:{
    coupon_code:'',
    Total_amountPrice:'',
    totale:0,

    }


    }
},
created(){
this.viewcart();
},
methods:{
        viewcart(){
            if(localStorage.getItem('carts')){
            this.carts = JSON.parse(localStorage.getItem('carts'))
            this.totale = this.carts.reduce((totale, item) =>  {
            return  totale + item.amount * item.price ;
            },0);
            }
        },
        deleteCart(index){
            if(localStorage.getItem('carts')){
                this.carts.splice(index,1);
                this.storeCart();
                EventBus.$emit('deletecart');
            }
        },
        storeCart(){
        let parsed = JSON.stringify(this.carts);
        localStorage.setItem('carts',parsed);
        this.viewcart();
        EventBus.$emit('storeCart');
        },


    checkout(){
this.check =true ;
this.vcart = false ;
    },
    Coupon(){

    }
}
}
</script>

<style>

</style>
