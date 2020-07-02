<template>

                <div class="row">

<all  :data="show"></all>

                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="product-sidebar">
                                <div class="product-sidebar-widget">
                                    <h4 class="mb-0">Add new Product</h4>
                                </div>
                              <div class="card-body">
                                    <form  @submit.prevent="submit()">
                                        <div class="form-group">
                                            <label for="inputUserName">Product Name</label>
                                            <input type="text" name="name" v-model="form.p_name" data-parsley-trigger="change"   autocomplete="off" class="form-control">
        <ul id="parsley-id-5" v-if="errors.p_name" class="parsley-errors-list filled"><li   class="parsley-required">{{errors.p_name[0]}}</li></ul>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Product Category</label>
                                            <select   class="form-control" v-model="form.categories_id">
                                                <option v-for="cat in category" :key="cat.id" :value="0">{{cat}} </option>
                                            </select>
         <ul id="parsley-id-5" v-if="errors.coupon_code" class="parsley-errors-list filled"><li class="parsley-required">{{errors.coupon_code[0]}}</li></ul>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Product Code</label>
                                            <input  type="text" v-model="form.p_code"   class="form-control">
     <ul id="parsley-id-5" v-if="errors.p_code" class="parsley-errors-list filled"><li  class="parsley-required">{{errors.p_code[0]}}</li></ul>

                                        </div>
                                          <div class="form-group">
                                            <label for="inputPassword">Product Color</label>
                                            <input  type="text" v-model="form.p_color"   class="form-control">
    <ul id="parsley-id-5" v-if="errors.p_color" class="parsley-errors-list filled"><li class="parsley-required">{{errors.p_color[0]}}</li></ul>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Description</label>
                                            <textarea  v-model="form.description" class="form-control">
                                            </textarea>
     <ul id="parsley-id-5" v-if="errors.description" class="parsley-errors-list filled"><li  class="parsley-required">{{errors.description[0]}}</li></ul>

                                        </div>
                                                    <div class="form-group">
                                            <label for="inputRepeatPassword">Price</label>
                                            <input  type="number"  v-model="form.price" class="form-control">
    <ul id="parsley-id-5" v-if="errors.price" class="parsley-errors-list filled"><li class="parsley-required">{{errors.price[0]}}</li></ul>

                                        </div>
                                                 <div class="form-group">
                                            <label for="inputRepeatPassword">Photo</label>
                                            <input type="file" v-on:change="onImageChange"  class="form-control" ref="file" name="file" @change="addFile()">
                                            <div class="col-md-3" v-if="form.image">
                              <img :src="form.image" class="img-responsive" height="70" width="90">
                           </div>
    <ul id="parsley-id-5" v-if="errors.image" class="parsley-errors-list filled"><li class="parsley-required">{{errors.image[0]}}</li></ul>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary" type="reset" @click="reset()">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>



</template>

<script>
import all from './allP'
import edit from './edit'
export default {
    components:{all,edit},
    data() {
        return {

             show:true,

             form:{
                categories_id:null,
                 p_name:null,
                p_code: null,
                p_color: null,
                description: null ,
                price: null,
                image:'',


             },
              category:{},
             errors:'',
        }
    },
    created(){this.listen();
    this.getcategory(); },
    methods:{
         addFile() {
            this.attachment = this.$refs.file.files[0];
        },
 getcategory(){
        axios.get('api/parentcategory').then(res => { this.category = res.data} ).catch( error => { console.log(error)})
    },
         onImageChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
             createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.form.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
        reset(){
            this.errors='';
        },
        submit(){


            axios.post('/api/product',this.form)
            .then(res => {console.log(res.data)})
            .catch(error =>{
               if(error.response.status== 422) {
                    this.errors =error.response.data.errors ;
                }
            })
        },
          listen(){
              EventBus.$on('startdetail', ()=> {

              this.show= false;
              });

              EventBus.$on('cancel',()=> {

                  this.show= true;
              })
                }
    }

}
</script>

<style>

</style>
