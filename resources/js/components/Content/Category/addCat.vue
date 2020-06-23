
<template>




</template>

<script>

import addCat from './addCat'
import editCat from './Edit'
export default {
    components:{addCat,editCat},
    props:['data'],
data() {

    return {



    }

},
created(){
this.get();
this.listen();

},
methods: {
    get(){
    axios.get('http://localhost:8000/api/category')
    .then( res=> {

        this.categorys=res.data })
    .catch(error=> console.log(error))
    },
    edited(){

        this.add= false;
        this.edit=true;
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
     listen(){
EventBus.$on('added',()=>{

 this.categorys.unshift(this.data) ;
})




     }

}
}
</script>

<style>

</style>
