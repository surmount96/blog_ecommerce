import axios from "axios";
const url = "/api/";

export default {

    allProduct(){
        return axios.get(`${url}products`)
    },
    singleProduct(slug){
        
        return axios.get(`${url}product`,{
            params:{
                slug
            }
        });
    },
    payment(user){
        return axios.post(`${url}checkout`,user);
    },
    callback(data){
        return axios.post(`${url}checkout/callback`,data);
    },
}