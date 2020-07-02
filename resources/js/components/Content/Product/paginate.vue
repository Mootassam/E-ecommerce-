<template>
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item" v-for="p in meta.last_page" :key="p">
        <a class="page-link" href="#" @click.prevent="changePage(p)">{{p }}
            </a>
       </li>
                                             <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
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
changePage(page){
    this.$emit('pagination', page) ;

}

    }

}
</script>

<style>

</style>
