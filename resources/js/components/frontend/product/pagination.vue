<template>
<div class="li-paginatoin-area text-center pt-25">
      <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p>Showing {{meta.from}}-{{meta.to}} of {{meta.total}} item(s)</p>
                                            </div>

                                             <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box">
                                                    <li ><a href="#" class="Previous" :class="{'disabled' :meta.current_page ===0  }"  @click.prevent="changepage(meta.current_page-1)"><i class="fa fa-chevron-left"></i> Previous</a>
                                                    </li>

                                                    <li :class="{'active' :meta.current_page === p}" v-for="p in meta.last_page" :key="p" @click.prevent="changepage(p)"><a href="#">{{p }}</a></li>

                                                    <li  :class="{'disabled' :meta.current_page === meta.last_page }" >
                                                      <a href="#" class="Next"  @click.prevent="changepage(meta.current_page+1)"> Next <i class="fa fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
</div>

</template>

<script>
export default {
    props:['meta'],
    data() {
        return {

        }
    },
    methods:{
        changepage(page){
            this.$emit('pagination', page);
         }
    }

}
</script>

<style>

</style>
