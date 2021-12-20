<template>
    <div class="lg:mx-24">
        <c-box v-show="alert">
            <c-alert status="success" justifyContent="space-between" px="10" fontSize="sm">
                <c-box>
                    <c-alert-icon />
                    Your item has been added to cart
                </c-box>

                <a href="/checkout">
                    <c-button bg="orange.300" color="white" size="sm" fontSize="xs">
                       proceed to checkout
                    </c-button>        
                </a>  
                <c-close-button position="absolute" @click="alert = false" right="8px" top="8px" />
            </c-alert>
        </c-box>
        <div class="flex flex-wrap lg:w-9/12 w-full mx-auto">
            <div class="lg:w-2/3 md:w-2/3 w-full">
                <c-box pt="10">
                    <c-text fontSize="lg" mb="2">{{ product.product_name }}</c-text>
                    <c-flex mb="8">
                        <c-icon name="star" color="orange.300" mx="1" size="13px"/>
                        <c-icon name="star" color="orange.300" mx="1" size="13px"/>
                        <c-icon name="star" color="orange.300" mx="1" size="13px"/>
                        <c-icon name="star" color="orange.300" mx="1" size="13px"/>
                    </c-flex>
                    <c-image src="/images/shirt.png" size="50%" objectFit="cover" />
                </c-box>
            </div>
            <div class="lg:w-1/3 md:w-1/3 w-full ">
                <c-box mt="24">
                    <!-- <c-text fontSize="xs">The converse Chuck Taylor All Star Washed Chambrayis the most iconic sneakers in the world</c-text> -->
                    <c-text fontSize="lg" my="4">
                        NGN {{ product.price }}
                    </c-text>
                    <c-text fontSize="xs" my="4">
                        Colors: {{ product.color }}
                    </c-text>
                    <c-radio-group v-model="color" display="flex" >
                        <c-radio variant-color="red" value="red" mx="1" size="sm">Red</c-radio>
                        <c-radio variant-color="green" value="green" mx="1" size="sm">Green</c-radio>
                    </c-radio-group>
                    <c-flex>
                        <c-box>
                            <c-text fontSize="xs" mb="3">Size: </c-text>
                            <c-select v-model="type" placeholder="Select size" size="sm" borderColor="gray.300" fontSize="10px" width="100%" rounded="100px">
                                <option :value="size" v-for="size in splitA" :key="size.id">{{ size }}</option>
                            </c-select>
                        </c-box>
                    </c-flex>
                    
                    <c-flex my="6">
                        <a href="/checkout" @click.prevent="addCart(product)">
                            <c-button bg="orange.300" color="white" size="sm" fontSize="xs">
                                Add to cart
                            </c-button>
                            
                        </a>                    
                    </c-flex>
                </c-box>

            </div>
        </div>

        <div class="flex flex-wrap py-8 mb-4" v-show="loading">
            <div class="flex items-center w-12 mx-auto h-64">
                <c-spinner color="blue.500" />
            </div>
        </div>
    </div>
</template>

<script>
import { CBox, CButton, CFlex, CText, CImage, CIcon, CRadioGroup, CRadio, CSelect,CSpinner , CAlert,
  CAlertIcon,
  CAlertTitle,
  CAlertDescription, CCloseButton} from '@chakra-ui/vue'
import { RepositoryFactory as Repo } from '../../repository/RepositoryFactory';
const PD = Repo.get('public');


export default {
    components:{
        CBox,
        CButton,
        CFlex,
        CText,
        CImage,
        CIcon,
        CRadioGroup,
        CRadio,
        CSelect,
        CSpinner, CAlert,
        CAlertIcon,
        CAlertTitle,
        CAlertDescription,CCloseButton,
    },
    data(){
        return {
            color:'',
            type:'',
            loading:false,
            product:'',
            alert:false
        };
    },
    mounted(){
        this.getProduct();
    },
    computed:{
        splitA(){
            return this.product.size.split(',');
        }
    },
    methods:{
        async getProduct(){
            let res = await PD.singleProduct(this.$route.params.id);
           
            this.product = res.product;
        },
        
        addCart(data){
            let cart = {
                product: data,
                quantity:1,
                id:data.id,
                price:data.price,
                size:this.type,
                color:this.color,
            };
            var a = [];
            // Parse the serialized data back into an aray of objects
            a = JSON.parse(localStorage.getItem('FUM_carts')) || [];
            // Push the new data (whether it be an object or anything else) onto the array
            let index = a.map((e) => { return e.product.id }).indexOf(data.id);
            this.alert = true;
            if(index == -1){
                a.push(cart);
                // Re-serialize the array back into a string and store it in localStorage
                localStorage.setItem('FUM_carts', JSON.stringify(a));
                // window.location = '/checkout';
            }

        },
    },
}
</script>