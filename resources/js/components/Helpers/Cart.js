import Axios from "axios";

class Cart {

    addeds(data) {
        Axios.post('api/addToCart', data).then(res => {
            console.log(res.data);


        }).catch(error => {
            console.log('error');
        })
    }




}
export default Cart = new Cart();