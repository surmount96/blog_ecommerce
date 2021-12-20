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
    getAllCategory(){
        return axios.get(`${admin}/category`);
    },
    createPost(data){
        return axios.post(`${admin}/post`,data);
    },
    createCategory(data){
        return axios.post(`${admin}/category`,data);
    },
    allUsers(){
        return axios.get(`${admin}/all-users`);
    },
    test(){
        return axios.get(`${admin}/saved-users`);
    },
    count(){
        return axios.get(`${admin}/count-order`);
    },
    orders(){
        return axios.get(`${admin}/orders`);
    },
    authUser(){
        return axios.get(`${url}auth-user`);
    },
    payment(user){
        return axios.post(`${url}pay`,user);
    },
    callback(data){
        return axios.post(`${url}payment/callback`,data);
    },
    session(id){
        return axios.get(`${url}valid-session`,{
            params:{
                id
            }
        });
    },
    updateProfile(data,id){
        return axios.patch(`${url}update-profile`,data,{
            params:{
                id
            }
        });
    },
}