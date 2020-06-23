<template>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Category  </h5>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" novalidate="">
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Category Name</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputEmail2" type="email" required="" data-parsley-type="email" placeholder="Email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Category Lavel</label>
                                            <div class="col-9 col-lg-10">
                                                <select id="inputPassword2" type="password" required=""  class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Description</label>
                                            <div class="col-9 col-lg-10">
<textarea required="" class="form-control"></textarea>                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Web Site</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputWebSite" type="url" required="" data-parsley-type="url" placeholder="URL" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row pt-2 pt-sm-5 mt-1">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <label class="be-checkbox custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Enable</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Update</button>
                                                    <button class="btn btn-space btn-secondary" @click="canceled()">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
</template>

<script>
export default {

data() {
    return {

    }
},
methods:{
    canceled(){
        EventBus.$emit('finishEditing');
    }
}

}
</script>

<style>

</style>
