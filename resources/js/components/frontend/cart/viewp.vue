<template>

<div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                           <!-- Product Details Left -->
                            <div >
                                <div class="col-lg-12" >
                                    <!-- single-product-wrap start -->
   <carousel autoplay="true" :nav="false" >
        <div  v-for="im in images" :key="im.id" >
        <img v-bind:src="'products/small/'+im.image" alt="" class="img-fluid">
        </div>
    </carousel>
                                    <!-- single-product-wrap end -->
                                </div>


                            </div>
                            <!--// Product Details Left -->
                            <div class="product-details-view-content sp-carousel-content pt-45">
                                <div class="product-info">
                                    <h2>{{data.product.p_name}}</h2>
                                    <span class="product-details-ref">Reference: demo_15</span>
                                    <div class="rating-box pt-20">
                                        <ul class="rating rating-with-review-item">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="review-item"><a href="#">Read Review</a></li>
                                            <li class="review-item"><a href="#">Write Review</a></li>
                                        </ul>
                                    </div>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2">{{data.product.price}} TND </span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span>{{data.product.description}}</span>
                                        </p>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="#" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart mt-xs-30" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info">
                                        <div class="product-social-sharing">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <section class="product-area li-laptop-product pt-30 pb-50">
            <div class="container">
                <div class="row">
                    <!-- Begin Li's Section Area -->
                    <div class="col-lg-12">
                        <div class="li-section-title">
                            <h2>
                                <span> other products in the same category:</span>
                            </h2>
                        </div>
                        <div class="row">
                            <div>
                                <div class="col-lg-12" >
                                    <!-- single-product-wrap start -->
                                    <carousel autoplay="true" :nav="false" >


                                    <div class="single-product-wrap"  v-for="like in cat" :key="like.id" >
                                        <div class="product-image">
                                            <a href="single-product.html">
   <img v-bind:src="'products/small/'+like.image"  class="img-fluid" width="10" height="10">                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="product-details.html">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="single-product.html">{{like.image}}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$46.80</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                        </carousel>
                                    <!-- single-product-wrap end -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Li's Section Area End Here -->
                </div>
            </div>
        </section>

</div>
</template>

<script>
import review from '../comment/review'
import carousel from 'vue-owl-carousel'
export default {
    props:['data'],
    components:{review,carousel },
    data() {
        return {
            images : this.data.image ,
            cat : this.data.relateProducts,
        }
    },


}
</script>

<style>

</style>
