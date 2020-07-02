<template>
 <div class="row">
 <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">List of category</h5>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Category Name</th>
                                                    <th scope="col">Parent Category</th>
                                                    <th scope="col">Status </th>
                                                    <th scope="col">Actions </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(cat,index) in categorys" :key="cat.id" >
                                                    <th scope="row">{{index}}</th>
                                                    <td>{{cat.name}}</td>
                                                    <td>{{cat.parent_id}}</td>
                                                    <td><span class="badge badge-pill badge-primary" v-if="cat.status > 0">Enable</span>
                                                        <span class="badge badge-pill badge-secondary" v-else>Disable</span>
                                                   </td>
                                                    <td>
        <div class="btn-group ml-auto">
                                            <button class="btn btn-sm btn-outline-light" @click="edited(index)">Edit</button>
                                            <button class="btn btn-sm btn-outline-light" @click="deletd(cat.id)">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>

                                            </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5  v-if="add" class="card-header">Add new Category </h5>
    <h5   v-else class="card-header">Edit  Category </h5>

                                <div class="card-body">
                                    <form id="form" >
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Category Name</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputEmail2" type="text"   v-model="form.name" class="form-control">
                                                <ul  v-if="errors.name" class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{errors.name[0]}}</li></ul>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Category Lavel</label>
                                            <div class="col-9 col-lg-10">

                                                <select    v-model="form.parent_id"  class="form-control">
                         <option   v-for="val in parent.cat " :key="val.id" v-bind:value="val.id">{{val}}</option>
                        <option   v-for="val in parent.subcat " :key="val.id" v-bind:value="val.id">-- -- {{val.name}}</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Description</label>
                                            <div class="col-9 col-lg-10">
<textarea  v-model="form.description" class="form-control"></textarea>                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Web Site</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputWebSite"  type="url"  data-parsley-type="url" placeholder="URL" v-model="form.url" class="form-control">
      <ul  v-if="errors.url" class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{errors.url[0]}}</li></ul>

                                            </div>
                                        </div>
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" v-model="form.status" value="1"><span class="custom-control-label">Enable</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button v-if="add" type="submit" class="btn btn-space btn-primary"  @click="submit()">Submit</button>
                                   <button v-else type="submit" class="btn btn-space btn-primary" @click="updates" >Update</button>

                                                    <button type="reset" @click="reseted" class="btn btn-space btn-secondary">Cancel</button>
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

export default {


    data() {
        return {

            form:{
                name:null,
                parent_id:null,
                description:null,
                url:null,
                status:null,
            },
            edit:false,
            add:true,
            categorys:{},
            errors:[''],
            edit:false ,
            add:true,
            news:'',
            parent:'',
            subparent:'',
            id:'',
        }
    },
    mounted(){
        this.get();
        this.getparent();
    },
    methods:{
            get(){
    axios.get('api/category')
    .then( res=> {

        this.categorys=res.data })
    .catch(error=> console.log(error))
    },
    edited(index){
        this.add= false;
                this.form.name =this.categorys[index].name;
                this.form.parent_id =this.categorys[index].parent_id;
                this.form.description =this.categorys[index].description;
                this.form.url =this.categorys[index].url;
                this.form.status =this.categorys[index].status;
                  this.id = this.categorys[index].id ;
                this.categorys.splice(index,1);


    },
    updates(){
        axios.put(`api/category/${this.id}`,this.form).then(res => {
            this.categorys.unshift(res.data);
                Vue.$toast.open({
            message: ' Update success a Coupon !',
            type: 'success',
            // all other options may go here
            });
            this.add= true;
            this.form='';

        }).catch(error =>{
              Vue.$toast.open({
            message: ' Error with update !',
            type: 'error',
            // all other options may go here
            });
        })
    },
    reseted(){
        this.add =true ;
        this.errors='';

    },
    deletd(id,index){
        axios.delete(`category/${id}`)
        .then( res => {

            this.categorys.splice(index,1);
            Vue.$toast.open({
            message: 'Delete Success!',
            type: 'success',
            // all other options may go here
            });

            })
        .catch(error => {  Vue.$toast.open({
            message: 'error in deleted  ! ',
            type: 'error',
            // all other options may go here
            });
            });
    },
            submit(){
            axios.post('api/category',this.form)
            .then(res =>{
              this.categorys.unshift(res.data);
                Vue.$toast.open({
            message: 'Data add with success !',
            type: 'success',
            // all other options may go here
            });
            })
            .catch(error => {
                  if(error.response.status== 422) {
                    this.errors =error.response.data.errors ;
                }
                else{
             Vue.$toast.open({
            message: 'Failed add a new Category !',
            type: 'error',
            // all other options may go here
            });
                }
            })

            },
            getparent(){
                axios.get('api/parentcategory')
                .then(res => {this.parent = res.data
            })
                .catch(error =>{ console.log('error')})
             }
    }

}
</script>

<style>

</style>

