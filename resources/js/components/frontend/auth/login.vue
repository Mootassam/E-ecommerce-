<template>
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="#"  @submit.prevent="Login()">
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" type="email" v-model="form.email" placeholder="Email Address">
                                           <span class="alert-danger" v-if="errrors.email">{{errrors.email[0]}}</span>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" v-model="form.password" placeholder="Password">
                                          <span class="alert-danger" v-if="errrors.password">{{errrors.password[0]}}</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="register-button mt-0" type="submit">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="#" @submit.prevent="Register">
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name</label>
                                            <input class="mb-0" type="text"  v-model="register.name" placeholder="First Name">
                                            <span class="alert-danger" v-if="errors.name">{{errors.name[0]}}</span>
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name</label>
                                            <input class="mb-0" type="text" placeholder="Last Name">
                                          <span class="alert-danger" v-if="errors.last_name">{{errors.last_name[0]}}</span>
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" type="email"   v-model="register.email"  placeholder="Email Address">
                      <span class="alert-danger" v-if="errors.email">{{errors.email[0]}}</span>

                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password"  v-model="register.password" placeholder="Password">
                     <span class="alert-danger" v-if="errors.password">{{errors.password[0]}}</span>

                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Confirm Password</label>
                                            <input class="mb-0" type="password" name="password_confirmation" v-model="register.password_confirmation" placeholder="Confirm Password">

                                        </div>
                                        <div class="col-12">
                                            <button class="register-button mt-0" type="submit">Register</button>
                                        </div>
                                        <div class="alert-success">{{should}}</div>
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
            errors:'',
                errrors:'',
                errlogin:'',
                should:'',
            form:{
                email:'',
                password:'',
              },
            register:{
                name:'',
                email:'',
                password:'',
                password_confirmation:''
              }
        }
    },

    methods:{
        Login(){
     User.login(this.form) ;
         },
        Register(){

        axios.post('/api/auth/register', this.register).then(res => {
            User.responseAfterLogin(res);
            this.should= "Thanks for register now you can loggedIn";
            return false ;

        }).catch(error => {
            if (error.response.status == 422) {
                this.errors = error.response.data.errors
            }
        })


         },
    }

}
</script>

<style>

</style>
