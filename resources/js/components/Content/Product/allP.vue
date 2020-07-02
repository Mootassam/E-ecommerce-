<template>


            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="row"  v-if="show==true" >

                                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" v-for="(product,index) in allP" :key="index" >
                                    <div class="product-thumbnail">
                                        <div class="product-img-head">
                                            <div class="product-img">

                                                <img v-bind:src="'products/small/'+product.image" alt="" class="img-fluid">
                                             </div>
                                            <div class="ribbons"></div>
                                            <div class="ribbons-text">New</div>
                                            <div class=""><a href="#" class="product-wishlist-btn" @click="deleteP(product.id)"><i class="fas fa-trash"></i></a></div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-head">
                                                <h3 class="product-title">{{product.p_name}}</h3>
                                                <div class="product-rating d-inline-block">
                                                    <i class="fa fa-fw fa-star"></i>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    <i class="fa fa-fw fa-star"></i>
                                                </div>
                                                <div class="product-price">${{product.price}}</div>
                                            </div>
                                            <div class="product-btn">
                                                <a href="#" class="btn btn-primary"  >Add to Cart</a>
                                                <a href="#" class="btn btn-outline-light" @click="detail(product.id)" >Details</a>
                                                <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


<paginate :meta="meta" v-on:pagination="getAll" ></paginate>

                            </div>
                            <detail v-if="details == true" :data=id></detail>
                        </div>


</template>

<script>
import detail from './detail'
import paginate from './paginate'
export default {
components:{detail,paginate },
data() {

    return {
        show:true,
        details:false,
        meta:{},
        allP:{},
        id:'',
    }
},
created(){
    this.getAll();

},
methods:{

    getAll(page){
        axios.get('api/product',{
            params:{
                page
            }
        })
        .then(res => {
            this.allP =res.data.product.data
            this.meta = res.data.product
            })
        .catch(error => console.log(error))
    },
    detail(id){
        axios.get(`http://localhost:8000/api/product/${id}`) .then( res => {
            this.id = res.data ;
      this.show =false ;
       this.details=true;
        }).catch(error => { console.log('error') ; })

    },
    deleteP(id,index){
        axios.delete(`http://localhost:8000/api/product/${id}`)
        .then(res => {
             this.allP.splice(index,1);
   Vue.$toast.open({
            message: 'Delete Success!',
            type: 'success',
            // all other options may go here
            });
        })
        .catch( error => {   Vue.$toast.open({
            message: 'error in deleted  !',
            type: 'error',
            // all other options may go here
            });})
    }
}

}
</script>

<style>

</style>
