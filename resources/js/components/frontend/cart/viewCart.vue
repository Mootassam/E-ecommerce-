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
            <div class="Shopping-cart-area pt-60 pb-60">
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
                                            <tr v-for="cart in carts" :key="cart.id">
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#">
                                    <img v-bind:src="'products/small/'+cart.user_email" width="100" >


                                                    </a></td>
                                                <td class="li-product-name"><a href="#">{{cart.product_name}}</a></td>
                                                <td class="li-product-price"><span class="amount">{{cart.price}} TND </span></td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="" type="text">
                                                        {{cart.quantity}}
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">{{tprice}} TND </span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>$130.00</span></li>
                                                <li>Total <span>$130.00</span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

  </div>
</template>

<script>
export default {
data() {
    return {
        carts:{},
    tprice:''
    }
},
created(){

        axios.get('/api/viewcart').then(res => {
          this.carts = res.data.cart;
          this.tprice = res.data.tprice ;
        }).catch(error => { console.log(error); })


}
}
</script>

<style>

</style>
