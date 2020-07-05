<template>
         <div class="wishlist-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                         <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-stock-status">Stock Status</th>
                                                <th class="li-product-add-cart">add to cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(wish,index) in wishes" :key="index">
                                                <td class="li-product-remove"><a href="#" @click="deleteWish(index)"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#">        <img v-bind:src="'products/small/'+wish.image" width="100" ></a></td>
                                                <td class="li-product-name"><a href="#">{{wish.product_name}}</a></td>
                                                <td class="li-product-price"><span class="amount">{{wish.price}} TND </span></td>
                                                <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="li-product-add-cart"><a href="#" @click="addto(wish)">add to cart</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</template>

<script>
export default {
    data() {
        return {
            wishes:{},

        }
    },
    created(){
this.show();
    },
    methods:{
        show(){
            if(localStorage.getItem('wishes')){
                    this.wishes = JSON.parse(localStorage.getItem('wishes'));

            }
        },

        storeWish(){

            let parsed = JSON.stringify(this.wishes);
            localStorage.setItem('wishes',parsed);
            this.show();
        },

        addto(wish){
            EventBus.$emit('start',wish);
        },
               deleteWish(index){
                this.wishes.splice(index,1);
                this.storeWish();
                EventBus.$emit('delteWish',index)

        },

    }

}
</script>
