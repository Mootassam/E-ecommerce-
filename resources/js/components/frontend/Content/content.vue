<template>
<div>
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home

</a></li>
                            <li class="active">Shop List Left Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->

            <div class="content-wraper pt-60 pb-60" v-if="show">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Banner Area -->
                            <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="css/fronts/images/bg-banner/2.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span>Showing 1 to 9 of 15</span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sort By:</p>
                                        <select class="nice-select">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">


                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40"  v-for="(prd,index) in all" :key="index" >
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                     <img v-bind:src="'products/small/'+prd.image" alt="" class="img-fluid">

                                                            </a>
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
                                                                <h4><a class="product_name" href="single-product.html">{{prd.p_name}}</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">{{prd_price}} TND </span>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><a href="#" @click="addtocart(prd)"  > <p id="fold_p"> Add to cart </p> </a></li>
                                                                    <li><a href="#" title="quick view" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="list-view" class="tab-pane fade product-list-view active show" role="tabpanel">
                                        <div class="row">
                                            <div class="col">

                                                <div class="row product-layout-list" v-for="(prd,index) in all" :key="index">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="single-product.html">
                                                                  <img v-bind:src="'products/small/'+prd.image" alt="" class="img-fluid">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
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
                                                                <h4><a class="product_name" href="single-product.html">{{prd.p_name}}</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price"> {{prd.price}} TND </span>
                                                                </div>
                                                                <p>{{prd.description}}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"> <a  href="#" @click="addtocart(prd)">Ajouter</a></li>
                                                                <li class="wishlist"><a href="#" @click="wishlist(prd)"><i class="fa fa-heart-o"></i> Ajouter à la liste de souhaits </a></li>
                                                                <li class="wishlist"><a href="#" @click="Addtocompare(prd.id)"><i class="fa fa-exchange"></i>Ajouter pour Comparer </a></li>
                                                                <li><a class="quick-view"  @click="quickComment(prd.id) ; detailProduct(prd.id)"  href="#"><i class="fa fa-eye"></i>Aperçu rapide</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                    <pagination :meta="meta" v-on:pagination="get" ></pagination>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>

                    </div>
                </div>
            </div>

<comment v-if="comment" :data=details></comment>
 </div>
</template>

<script>
import comment from '../product/comment'
import detail from '../cart/viewp'
import pagination from "../product/pagination";
export default {
    components:{detail,pagination,comment},
    data() {
        return {
            all:{},
             details:{},
            pagination:{},
            comment: false,
            replyes:'',
            meta:{},
            detail:false,
            show:true ,
            addCart:true,
            cancelCart:false,
            compareList:{},
            AllComp:[],

            }
    },
created(){
this.get();
},
    methods:{
        Addtocompare(id){
                axios.get(`/api/product-detail/${id}`).then(res => {
                        this.compareList= res.data.data.details_product
                        this.AllComp.push(res.data.data.details_product);
                            this.storeComapre();
            }).catch(error=>{
            })
        },
        storeComapre(){
             let parsed = JSON.stringify(this.compareList);
            localStorage.setItem('compare',parsed);
        },
        wishlist(prd){
            EventBus.$emit('wishes',prd);
        },
        addtocart(prd){
      EventBus.$emit('start',prd) ;
      },
        quickComment(id){
            axios.get(`/api/reply/${id}`).then(
                res => {
                    this.replyes = res.data;
                }
            )
            this.comment = true ;
            this.show = false ;
        },
          detailProduct(id){
                axios.get(`/api/product-detail/${id}`).then(res => {
                this.details= res.data;
            }).catch(error => {
            })
             },
        added(id){
            EventBus.$emit('addtocart');
                },
        get(page){

      axios.get('/api/homes',{params:{ page } })
            .then(res => {
                        this.all =  res.data.product.data ;
                        this.meta = res.data.product  ;
           });
        },
            }
        }
</script>

<style>

</style>
