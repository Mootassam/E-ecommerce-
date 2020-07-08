<template>

            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Main Blog Page Area -->
            <div class="li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Blog Sidebar Area -->

                        <!-- Li's Blog Sidebar Area End Here -->
                        <!-- Begin Li's Main Content Area -->
                        <div class="col-lg-12 order-lg-2 order-1">
                            <div class="row li-main-content">
                                <div class="col-lg-12">
                                    <div class="li-blog-single-item pb-30">
                                        <div class="li-blog-banner">
                                            <a href="blog-details.html"><img class="img-full" src="css/fronts/images/blog-banner/bg-banner.jpg" alt=""></a>
                                        </div>
                                        <div class="li-blog-content">
                                            <div class="li-blog-details">
                                                <h3 class="li-blog-heading pt-25"><a href="#">The Biggest Collection For Digital Product</a></h3>
                                                <div class="li-blog-meta">
                                                    <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                                    <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                                    <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                                </div>
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>

                                            <!-- Begin Blog Blockquote Area -->
                                               <!--     <div class="li-blog-blockquote">
                                                    <blockquote>
                                                        <p><table class="table table-striped ">

<tbody v-for="caract in this.data.data.details_product"  :key="caract.id">
                                                          <tr>
                                                             <td><i class="fa fa-windows" aria-hidden="true" style="font-size: 50px;" ></i>System Exploitation</td>
                                                             <td>{{caract.system}} </td>
                                                              <td> <i class="fa fa-wifi" aria-hidden="true"  style="font-size: 50px;" ></i>Reseaux</td>
                                                              <td>{{caract.reseaux}}</td>
                                                          </tr>
                                                          <tr>
                                                  <td><i class="fa fa-microchip" aria-hidden="true"  style="font-size: 50px;" ></i>Processeur</td>
                                                  <td>{{caract.Processeur}}</td>
                                                  <td><i class="fa fa-tablet" aria-hidden="true"  style="font-size: 50px;" ></i>Ecran</td>
                                                  <td>{{caract.ecran}}</td>
                                                          </tr>
                                                          <tr>
                                                <td><i class="fa fa-camera" aria-hidden="true"  style="font-size: 50px;" ></i>Appareil photo</td>
                                                {{caract.photo}}
                                                  <td><i class="fa fa-hdd-o" aria-hidden="true"   style="font-size: 50px;" ></i>Memoire</td>
                                                  {{caract.memoire}}
                                                          </tr>
                                                              <tr>
                                                <td><i class="fa fa-arrows-alt" aria-hidden="true" style="font-size: 50px;" ></i>Dimensions et poids</td>
                                                {{caract.poids}}
                                                  <td><i class="fa fa-battery-three-quarters" aria-hidden="true"   style="font-size: 50px;" ></i> Autonomie</td>
                                                  {{caract.battery}}
                                                          </tr>
</tbody>
                                                           </table></p>
                                                    </blockquote>
                                                </div>
                                                Blog Blockquote Area End Here -->
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum </p>
                                                <div class="li-tag-line">
                                                    <h4>tag:</h4>
                                                    <a href="#">Headphones</a>,
                                                    <a href="#">Video Games</a>,
                                                    <a href="#">Wireless Speakers</a>
                                                </div>
                                                <div class="li-blog-sharing text-center pt-30">
                                                    <h4>share this post:</h4>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Begin Li's Blog Comment Section -->
                                    <div class="li-comment-section">
                                        <h3> {{this.data.length}} comment</h3>
                                        <ul>
                                            <li  v-for="see in this.data" :key="see.id" >
                                                <div class="author-avatar pt-15">
                                                    <img src="css/fronts/images/product-details/user.png" alt="User">
                                                </div>
                                                <div class="comment-body pl-15">

                                                    <h5 class="comment-author pt-15">{{see.user}}</h5>
                                                    <div class="comment-post-date">
                                                        {{see.created_at}}
                                                    </div>
                                                    <p>{{see.body}}</p>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                    <!-- Li's Blog Comment Section End Here -->
                                    <!-- Begin Blog comment Box Area -->
                                    <div class="li-blog-comment-wrapper">
                                        <h3>leave a reply</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form @submit.prevent="comments()">
                                            <div class="comment-post-box" >
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label>comment</label>


                                                        <textarea  name="commnet"  v-model="body" placeholder="Write a comment"></textarea>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="coment-btn pt-30 pb-sm-30 pb-xs-30 f-left">
                                                            <input class="li-btn-2" type="submit" name="submit" value="post comment">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Blog comment Box Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Li's Main Content Area End Here -->
                    </div>
                </div>
            </div>


</template>

<script>
export default {
    props:['data','detaile' ,'id'],
    data() {
   const productid = this.id;
        return {

                replys :[],
                details:{},
                body:'',


        }
    },

created(){
this.comments();

},
    methods: {


        comments(){

        axios.post('api/reply', {'body':this.body , 'product_id':this.id} )
        .then(res => {
            this.data.push(res.data);

        }).catch(error => {

        })
        }
    }

}
</script>

<style>

</style>
