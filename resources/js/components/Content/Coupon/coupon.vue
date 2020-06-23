<template>
<div class="row">
       <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">List of Coupon</h5>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Code Coupon</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Amount Type </th>
                                                    <th scope="col">Expiry Date </th>
                                                     <th scope="col">Status</th>
                                                    <th scope="col">Actions </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(coup,index) in coupons" :key="coup.id">
                                                     <td>{{index}}</td>
                                                    <td>{{coup.coupon_code}}</td>


                                                    <td>{{coup.amount}}</td>
                                                    <td>{{coup.amount_type}}</td>
                                                    <td>{{coup.expiry_date}}</td>
                                                    <td>{{coup.status}}</td>
                                                     <td>     <div class="btn-group ml-auto">
                                            <button class="btn btn-sm btn-outline-light" @click="edited(index)">Edit</button>
                                            <button class="btn btn-sm btn-outline-light" @click="deletd(coup.id)">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" v-if="add == true">
                            <div class="card">
                                <h5  v-if="submits == true "  class="card-header">Add new Coupon </h5>
                <h5 v-else class="card-header">Edit Coupon  </h5>

                                <div class="card-body">

                                    <form>

                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Code Coupon</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputEmail2" type="text"   v-model="form.coupon_code" class="form-control">
                                                <ul  v-if="errors.coupon_code" class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{errors.coupon_code[0]}}</li></ul>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Amount</label>
                                            <div class="col-9 col-lg-10">
                                                <input type="number"    v-model="form.amount"  class="form-control">
                                                <ul  v-if="errors.amount" class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{errors.amount[0]}}</li></ul>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Amount Type</label>
                                            <div class="col-9 col-lg-10">
<select  v-model="form.amount_type" class="form-control"><option value="percent">Percent</option></select>
                                       </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Expiry Date</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputWebSite"  type="date"  data-parsley-type="url" placeholder="URL" v-model="form.expiry_date" class="form-control">
      <ul  v-if="errors.expiry_date" class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{errors.expiry_date[0]}}</li></ul>

                                            </div>
                                        </div>
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" v-model="form.status"><span class="custom-control-label">Enable</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary" v-if="submits == true "  @click="submit" >Submit</button>
                            <button type="submit" class="btn btn-space btn-primary"  v-else @click="updates">Update</button>

                                                    <button type="reset" class="btn btn-space btn-secondary" @click="reseted()">Cancel</button>
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
            coupons:{},
            form:{
                coupon_code:null,
                amount:null,
                amount_type:null,
                expiry_date:null,
                status:null,
            },
            edits:false,
            add:true,
            errors:'',

            submits: true ,
            id :'',
        }
    },
    mounted(){
         this.allC();
    },
    methods:{
              allC(){
            axios.get('http://localhost:8000/api/coupon')
            .then(res => this.coupons = res.data)
            .catch(error => console.log(error))
        },
        deletd(id,index){
        axios.delete(`http://localhost:8000/api/coupon/${id}`)

            .then(res=> {
                 this.coupons.splice(index,1);
              Vue.$toast.open({
            message: 'Delete Success!',
            type: 'success',
            // all other options may go here
            });
            })
             .catch(error => {
             Vue.$toast.open({
            message: 'error in deleted  ! ',
            type: 'error',
            // all other options may go here
            });
             });


        },
        submit(){
axios.post('http://localhost:8000/api/coupon',this.form).then(res =>{
             this.coupons.unshift(res.data);
           Vue.$toast.open({
            message: 'Data add with success !',
            type: 'success',
            // all other options may go here
            });
 })
.catch(error => {
    if(error.response.status == 422){
        this.errors = error.response.data.errors
    }
    else{
  Vue.$toast.open({
            message: ' Failed add a new Coupon !!',
            type: 'error',
            // all other options may go here
            });
    }
})
        },
     reseted(){
            this.errors='';
                 this.submits = true  ;


        },
     edited(index){
            this.submits = false  ;
            this.form.coupon_code = this.coupons[index].coupon_code ;
            this.form.amount = this.coupons[index].amount ;
            this.form.amount_type = this.coupons[index].amount_type ;
            this.form.expiry_date = this.coupons[index].expiry_date ;
            this.form.status = this.coupons[index].status ;
            this.id = this.coupons[index].id ;
             this.coupons.splice(index,1);

        },
        updates(){
            axios.put(`api/coupon/${this.id}`,this.form)
            .then(res => {
             this.coupons.unshift(res.data);

    Vue.$toast.open({
            message: ' Update success a Coupon !',
            type: 'success',
            // all other options may go here
            });
                  this.submits = true  ;
                  this.form= '';
                }).catch( error =>{
                    Vue.$toast.open({
            message: ' Error with update !',
            type: 'error',
            // all other options may go here
            });})
        },


    }

}
</script>

<style>

</style>
