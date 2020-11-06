import axios from "axios";
const url = "/api";

export default {

    allProduct(){
        return axios.get(`${url}/products`)
    },
    singleProduct(slug){
        
        return axios.get(`${url}/product`,{
            params:{
                slug
            }
        });
    },
    
}