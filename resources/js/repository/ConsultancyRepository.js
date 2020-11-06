import axios from "axios";
const admin = "/api/admin";

const url = "/api/";
export default {
    createNewProduct(data){
        return axios.post(`${admin}/product`,data);
    },
    getAllProduct(){
        return axios.get(`${admin}/products`);
    },
    createPost(data){
        return axios.post(`${admin}/post`,data);
    },
    getAllPost(){
        return axios.get(`${admin}/posts`);
    },
    createPost(data){
        return axios.post(`${admin}/post`,data);
    },
    allUsers(){
        return axios.get(`${admin}/all-users`);
    },
    test(){
        return axios.get(`${admin}/saved-users`);
    },
    authUser(){
        return axios.get(`${url}auth-user`);
    }
}