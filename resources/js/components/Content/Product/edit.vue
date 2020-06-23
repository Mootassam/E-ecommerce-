 <template>

                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="product-sidebar">
                                <div class="product-sidebar-widget">
                                    <h4 class="mb-0">Edit Product</h4>
                                </div>
                 <div class="card-body">
                                    <form  novalidate="">
                                        <div class="form-group">
                                            <label for="inputUserName">Product Name</label>
                                            <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Product Category</label>
                                            <select  class="form-control">
                                                <option value="clother">Clothes </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Product Code</label>
                                            <input  type="text" placeholder="Password" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Description</label>
                                            <textarea  class="form-control">
                                            </textarea>
                                        </div>
                                                    <div class="form-group">
                                            <label for="inputRepeatPassword">Price</label>
                                            <input  type="number" required=""  class="form-control">
                                        </div>
                                                 <div class="form-group">
                                            <label for="inputRepeatPassword">Photo</label>
                                            <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Password" class="form-control">
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
            EventBus.$emit('cancel');
        }
    }

}
</script>

<style>

</style>
