<template>
    <CThemeProvider>
        <div class="bg-gray">
            <div class="flex flex-wrap lg:mx-20 py-24">
                <div class="lg:w-2/3 lg:mx-0 md:mx-0 mx-5 w-full mb-4">
                    <div class="mr-">
                        <h6 class="text-body-2 mb-2">Order</h6>
                        <div class="bg-white  rounded p-6"> 
                            
                            <c-flex flexWrap="wrap" align-items="center" mb="6" v-for="item in cartItems" :key="item.id" v-show="cartItems.length > 0">
                                <c-flex align-items="center" :width="['100%','29%']" mr="5px">
                                    <c-box my="auto" bg="white.50" width="52%">
                                        <c-image src="images/shirt.png" size="70px" objectFit="cover" />
                                    </c-box>

                                    <c-flex fontSize="11px" my="auto" flexDirection="column">
                                        <c-text>{{ item.product.product_name }}</c-text>
                                        <c-text color="gray.500">Color:{{ item.color }}</c-text>
                                        <c-text color="gray.500">Size: {{ item.size }}</c-text>
                                    </c-flex>
                                    
                                </c-flex>
                                <c-box  display="flex"  align-items="center">
                                    <c-flex align-items="center" width="30%" mr="20">
                                        <!-- <c-box > -->
                                            <c-popover placement="right" :usePortal="false" >
                                                <c-popover-trigger>
                                                    <c-text cursor="pointer" text-align="center" fontWeight="500" fontSize="13px" color="red.200" mx="6">remove</c-text>
                                                </c-popover-trigger>
                                                <c-popover-content text-align="center"  z-index="4">
                                                    <c-popover-arrow />
                                                    <c-popover-close-button />
                                                    <c-popover-header>Confirmation!</c-popover-header>
                                                    <c-popover-body>
                                                        <c-text>Are you sure you want to remove the item?</c-text>
                                                        <p class="text-medium text-red cursor-pointer mt-4" @click="remove(item.id)">confirm</p>
                                                    </c-popover-body>
                                                </c-popover-content>
                                            </c-popover>
                                        <!-- </c-box> -->
                                        <c-text text-align="center" fontSize="13px" mx="6">
                                            ${{ item.price }}
                                        </c-text>
                                    </c-flex>
                                    <c-flex width="50%" align-items="center" >
                                        <c-text fontSize="13px" mx="6"  width="50%">
                                            Quantity: {{ item.quantity }}
                                        </c-text>
                                        <c-flex  width="50%">
                                            <button class="bg-blue px-3 py-1 rounded" :class="{'opacity-70':item.quantity == 1 }" :disabled="item.quantity == 1" @click="reduceQuantity(item.id)">
                                                <span class="text-white text-h4">&#45;</span>
                                            </button>
                                            <button class="bg-blue px-2 rounded ml-3" :class="{'opacity-70':item.quantity == item.product.inStock }" :disabled="item.quantity == item.product.inStock " @click="addQuantity(item.id)">
                                                <i class="ri-add-line text-h4 text-white"></i>
                                            </button>
                                        </c-flex>
                                     
                                    </c-flex>
                                </c-box>
                                
                            </c-flex>

                            <c-flex flexWrap="wrap" justify-content="center" align-items="center" mb="6" height="40vh" v-show="cartItems.length <= 0">
                                <c-box textAlign="center">
                                    <c-text mb="4">You have no item presently in your cart</c-text>
                                    <a href="/shop" class="bg-blue  text-white py-2 px-4 rounded">Go to shop</a>
                                </c-box>
                            </c-flex>

                           
                            
                        </div>
                    </div> 
                </div>
                <div class="lg:w-1/3  lg:mx-0 md:mx-0 mx-6 w-full mb-4">
                    <div class="lg:ml-5 md:ml-5 ">
                        <h6 class="text-body-2 mb-2">Payment Summary</h6>
                        <div class="bg-white rounded p-6">
                            <c-text align="center" textTransform="uppercase" bg="gray.50" py="3" fontSize="sm">
                                unregistered account
                            </c-text>
                            <c-box my="6">
                                <c-flex align-items="center" justify-content="space-between" mb="3">
                                    <c-stack spacing="3">
                                        <c-input placeholder="coupon" size="md" />
                                    </c-stack>
                                    <c-button ml="3" w="40%" fontSize="10px" variant-color="blue" >Apply</c-button>
                                </c-flex>
                                
                                <c-flex justify-content="space-between" mb="3">
                                    <c-text fontSize="xs" color="gray.400">
                                        Order Summary
                                    </c-text>
                                    <c-text fontSize="xs" color="gray.400" mb="3">
                                        ${{ total }}
                                    </c-text>
                                </c-flex>
                                <c-flex justify-content="space-between" mb="3">
                                    <c-text fontSize="xs" color="gray.400">
                                        Addtional Service
                                    </c-text>
                                    <c-text fontSize="xs" fontWeight="600" color="blue.200" mb="3">
                                        $0
                                    </c-text>
                                </c-flex>
                                <c-flex justify-content="space-between" mb="3">
                                    <c-text fontSize="xs" color="gray.400">
                                        Total Amount
                                    </c-text>
                                    <c-text fontSize="xs" color="gray.400" mb="3">
                                        ${{ total }}
                                    </c-text>
                                </c-flex>
                                
                            </c-box>
                            <!-- {{ money | formatNumber}} -->
                            <c-button mb="3" w="100%" fontSize="13px" @click="checkout" :opacity="{'0.6': total == 0}" :disabled="total == 0" variant-color="blue" variant="outline">Checkout</c-button>
                        </div>
                    </div> 
                </div>
            </div>
    
            <c-modal
            :is-open="isOpen"
            :on-close="close"
            boxShadow="sm"
            >
                <c-modal-content  ref="content" minHeight="350px" minW="500px" boxShadow="sm">
                    <c-modal-header>Payment</c-modal-header>
                    <c-modal-close-button />
                    <c-modal-body pos="relative" zIndex="999999">
                   
                    </c-modal-body>
                    <c-modal-footer>
                    <c-button variant-color="blue" size="sm">
                        Save
                    </c-button>
                    <!-- <c-button @click="close">Cancel</c-button> -->
                    </c-modal-footer>
                </c-modal-content>
                <c-modal-overlay bg="" />
            </c-modal>

            
        </div>
    </CThemeProvider>
</template>

<script>
import { CThemeProvider, CBox, CButton, CFlex, CText,CImage, } from '@chakra-ui/vue'
import {
  CModal,
  CModalOverlay,
  CModalContent,
  CModalHeader,
  CModalFooter,
  CModalBody,
  CModalCloseButton,
  CNumberInput,
  CNumberInputField,
  CNumberInputStepper,
  CNumberIncrementStepper,
  CNumberDecrementStepper,
  CInput,
  CStack,
  CPopover,
  CPopoverTrigger,
  CPopoverContent,
  CPopoverHeader,
  CPopoverBody,

  CPopoverArrow,
  CPopoverCloseButton,
} from "@chakra-ui/vue";
import { RepositoryFactory as Repo } from "./../../repository/RepositoryFactory";
const CY = Repo.get('consultant');
const PD = Repo.get('public'); 

export default {
    components: {
        CThemeProvider,
        CBox,
        CButton,
        CFlex,
        CText,
        CInput,
        CImage,
        CStack,
        CModal,
        CModalOverlay,
        CModalContent,
        CModalHeader,
        CModalFooter,
        CModalBody,
        CModalCloseButton,
        CNumberInput,
        CNumberInputField,
        CNumberInputStepper,
        CNumberIncrementStepper,
        CNumberDecrementStepper,
        CPopover,
        CPopoverTrigger,
        CPopoverContent,
        CPopoverHeader,
        CPopoverBody,
        CPopoverArrow,
        CPopoverCloseButton,
    },
    data () {
        return {
            isOpen: false,
            money:'1000000',
            cartItems:{},
            total:0,
            error:'',
            authUser:{}
        }
    },
    filters:{
        formatNumber(value){
            return new Intl.NumberFormat('en-IN',{ maximumSignificantDigits:3 }).format(value);
        }
    },
    mounted(){
        this.getCartItem();
        this.sum();
        CY.authUser().then(res => {
            this.authUser = res;
            // console.log(res);
        }).catch(err => {
            this.error = err.response.status
            // console.log(err.response);
        })
        this.updateCheckoutPayment();
    },
    methods: {
        test(){
            alert('i am nice');
        },
        open() {
            this.isOpen = true
        },
        close() {
            this.isOpen = false
        },
        sum(){
            let total = this.cartItems.reduce((item,arr) => {
                return item+parseInt(arr.price)
            },0);
            this.total = total
            // console.log(total);
        },
        remove(id){
            let index = this.cartItems.map((e) => { return e.id}).indexOf(id);
            this.cartItems.splice(index,1);
            this.sum();
            localStorage.setItem('FUM_carts', JSON.stringify(this.cartItems));
            // console.log(this.cartItems)

        },
        addQuantity(id){
            let index = this.cartItems.map((e) => { return e.id}).indexOf(id);

            if(index !== -1){
                let co = this.cartItems.forEach((i)=>{
                    if(i.id == id){
                      
                        i.quantity += 1;
                        i.price = i.product.price*i.quantity;
                        
                    }
                })
                this.sum();
                localStorage.setItem('FUM_carts', JSON.stringify(this.cartItems));
            }
        },
        reduceQuantity(id){
            let index = this.cartItems.map((e) => { return e.id}).indexOf(id);

            if(index !== -1){
                let co = this.cartItems.forEach((i)=>{
                    if(i.id == id){
                        // if(i.quantity === 0) return
                        
                        i.quantity -= 1;
                        i.price -= i.product.price;
                        
                        
                    }
                })
                this.sum();
                localStorage.setItem('FUM_carts', JSON.stringify(this.cartItems));
            }
        },
        getCartItem(){
            this.cartItems = JSON.parse(localStorage.getItem('FUM_carts'));
        },
        checkout(){
            if(this.authUser && !this.error){
                //redirect to payment
                PD.payment(this.authUser)
                    .then(res => {
                        // console.log(res)
                        window.location = res.data.link;
                        // console.log(res)
                    })
                console.log('payment successful')
            }else {
                console.log('payment not successful')
                this.$toast({
                    position: 'top-right',
                    title: 'Not authenticated',
                    description: "You need to sign in or register before you can make any purchase",
                    status: 'error',
                    duration: 10000
                })
            }
        },
        updateCheckoutPayment(){
            // console.log(this.$route.query)
            if(Object.entries(this.$route.query).length !== 0){
                const data = {
                    query :this.$route.query,
                    items: this.cartItems
                }
                PD.callback(data)
                    .then(res => {
                        this.$toast({
                            position:'top-right',
                            title: 'Payment successful',
                            description: "Please check your mail for next step",
                            status: 'success',
                            duration: 10000
                        })
                        this.cartItems = [];
                        localStorage.setItem('FUM_carts', JSON.stringify(this.cartItems));
                        this.sum();

                    })
            }
        },

    }
}
</script>