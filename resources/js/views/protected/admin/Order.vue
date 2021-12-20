<template>
    <c-box minHeight="100vh">
        <c-flex justify-content="space-between" align-items="center" my="5">
            <!-- <c-text fontSize="sm" mx="10" color="blue.200" pb="1" border-bottom="2px" border-color="blue.200">View blog post</c-text>
            <c-text fontSize="sm">Create blog post</c-text> -->
            <c-flex>
                <c-button  mx="2" bg="white" @click="open" fontSize="11px" px="6" boxShadow="sm" v-show="!order">
                    ADD PRODUCT
                </c-button>
                <c-button  mx="2" bg="white" @click="category = true" fontSize="11px" px="6" boxShadow="sm" v-show="!order">
                    ADD CATEGORY
                </c-button>
                <c-button  mx="2" bg="white" fontSize="11px" px="6" boxShadow="sm" @click="manageOrder">
                    <span v-show="order">PRODUCTS</span>
                    <span v-show="!order">ORDERS</span>
                </c-button>
            </c-flex>
            
            <c-flex boxShadow="sm">
                <c-input rounded="0" placeholder="search" width="74%" fontSize="sm" border-color="gray.50"/>
                <c-input-right-addon border-color="gray.50">
                    <c-icon name="user" size="15px"></c-icon>
                </c-input-right-addon>
            </c-flex>
        </c-flex>
        <c-box v-show="!order" mx="2">
            <c-flex align-items="center" my="5" justify-content="space-between">
                       
                <c-flex>
                    <c-select v-model="select" width="70%" boxShadow="sm" border-color="gray.50" fontSize="sm" placeholder="Select ">
                        <option value="grilled">Grilled Backyard Burger</option>
                        <option value="pub-style">The Pub-Style Burger</option>
                        <option value="jucy-lucy">The Jucy Lucy</option>
                    </c-select>

                    <c-button  mx="2" bg="white" fontSize="11px" px="6" boxShadow="sm">
                        Filter
                    </c-button>
                </c-flex>

                <c-text fontSize="sm">{{ products.length}} items</c-text>
            
            </c-flex>
            <c-box bg="gray.50"  boxShadow="sm">
                <c-flex justify-content="space-between" align-items="center" bg="white" mb="4" py="3" px="4">
                    <c-text width="200px" textAlign="center">
                        <c-icon name="image" ></c-icon>
                    </c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Name</c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Stock</c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Price</c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Category</c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Date</c-text>
                </c-flex>
                <c-flex justify-content="space-between" align-items="center" mb="4" py="3" px="4" v-for="product in products" :key="product.id">
                    <c-text width="200px">
                        <c-image :src="'/storage/product/'+product.cover_image_url" size="70px" objectFit="cover" />
                    </c-text>
                    <c-text color="gray.500" fontSize="sm" width="md">{{ product.product_name }}</c-text>
                    <c-text :color="product.inStock > 1 ? 'green.200' : 'red.200'" fontSize="sm" width="md">{{ product.inStock > 1 ? 'In stock' : 'Out of stock' }}</c-text>
                    <c-text color="gray.500" fontSize="sm" width="md">NGN{{ product.price }}</c-text>
                    <c-text color="gray.500" fontSize="sm" width="md">Uncategorized</c-text>
                    <c-text color="gray.500" fontSize="sm" width="md">{{ product.created_at }}</c-text>
                </c-flex>
                
            </c-box>
        </c-box>
        <c-box v-show="order" mx="2">
            <c-text fontSize="md" color="gray.500">
                All orders
            </c-text>
            <c-flex justify-content="space-between" mt="5" >
                <c-box bg="white" flex="1" mr="8" p="3" rounded="md">
                    <c-text color="gray.500" fontSize="lg">
                        Recent Orders
                    </c-text>
                    <c-box my="5" border="1px" border-color="#f1f1f1" rounded="lg" v-for="order in orders" :key="order.id">
                        <c-flex p="3">
                            <c-image src="/images/shirt.png" size="50px" rounded="50%" objectFit="cover" />
                            <c-box ml="3">
                                <c-flex justify-content="space-between" align-items="center">
                                    <c-text color="gray.500" fontSize="md">
                                        {{order.user.name}}
                                    </c-text>
                                    <c-text color="gray.300" ml="5" fontSize="xs">
                                        11:23pm
                                    </c-text>
                                </c-flex>
                                <c-text color="gray.300" fontSize="sm">
                                    {{order.name}}
                                </c-text>
                            </c-box>
                        </c-flex>
                        <c-flex justify-content="space-between" mr="4" my="4" p="3">
                            <c-text color="gray.500" fontSize="sm">
                                Total price 
                            </c-text>
                            <c-text color="gray.300" fontSize="sm">
                                NGN {{order.price}}
                            </c-text>
                        </c-flex>
                        <c-box textAlign="right" p="3">
                            <c-button fontSize="sm" bg="gray.400" size="sm" color="white">
                                Cancel
                            </c-button>
                            <c-button fontSize="sm" bg="orange.500" size="sm" color="white">
                                Accept
                            </c-button>
                        </c-box>
                    </c-box>
                </c-box>

                <c-box bg="white" flex="1" mr="8" p="3" rounded="md">
                    <c-text color="gray.500" fontSize="lg">
                        In Processing
                    </c-text>
                    <c-box my="5" border="1px" border-color="#f1f1f1" rounded="lg">
                        <c-flex p="3">
                            <c-image src="/images/shirt.png" size="50px" rounded="50%" objectFit="cover" />
                            <c-box ml="3">
                                <c-flex justify-content="space-between" align-items="center">
                                    <c-text color="gray.500" fontSize="md">
                                        Ahmad Nazeri
                                    </c-text>
                                    <c-text color="gray.300" ml="5" fontSize="xs">
                                        11:23pm
                                    </c-text>
                                </c-flex>
                                <c-text color="gray.300" fontSize="sm">
                                    Spanish gown
                                </c-text>
                            </c-box>
                        </c-flex>
                        <c-flex justify-content="space-between" mr="4" my="4" p="3">
                            <c-text color="gray.500" fontSize="sm">
                                Total price
                            </c-text>
                            <c-text color="gray.300" fontSize="sm">
                                NGN 10,000
                            </c-text>
                        </c-flex>
                        <c-box textAlign="right" p="3">
                            
                            <c-button fontSize="sm" bg="green.500" size="sm" color="white">
                                Mark as done
                            </c-button>
                        </c-box>
                    </c-box>
                </c-box>


                <c-box bg="white" flex="1" mr="8" p="3" rounded="md">
                    <c-text color="gray.500" fontSize="lg">
                        Completed
                    </c-text>
                    <c-box my="5" border="1px" border-color="#f1f1f1" rounded="lg">
                        <c-flex p="3">
                            <c-image src="/images/shirt.png" size="50px" rounded="50%" objectFit="cover" />
                            <c-box ml="3">
                                <c-flex justify-content="space-between" align-items="center">
                                    <c-text color="gray.500" fontSize="md">
                                        Ahmad Nazeri
                                    </c-text>
                                    <c-text color="gray.300" ml="5" fontSize="xs">
                                        11:23pm
                                    </c-text>
                                </c-flex>
                                <c-text color="gray.300" fontSize="sm">
                                    Spanish gown
                                </c-text>
                            </c-box>
                        </c-flex>
                        <c-flex justify-content="space-between" mr="4" my="4" p="3">
                            <c-text color="gray.500" fontSize="sm">
                                Total price
                            </c-text>
                            <c-text color="gray.300" fontSize="sm">
                                NGN 10,000
                            </c-text>
                        </c-flex>
                        
                    </c-box>
                </c-box>

            </c-flex>
        </c-box>

        <c-modal
        :is-open="isOpen"
        :on-close="close"
        :block-scroll-on-mount="blockScrollOnMount"
        is-centered
        >
            <c-modal-content ref="content" >
                <c-modal-header fontSize="15px">Add Product</c-modal-header>
                <c-modal-close-button size="sm"/>
                <c-modal-body>
                    <c-form-control>
                        <c-form-label fontSize="13px">Product name</c-form-label>
                        <c-input ref="initialRef" v-model="form.product_name" placeholder="Product name" fontSize="11px" border-color="#ccc"/>
                    </c-form-control>

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Price</c-form-label>
                        <c-input type="number" v-model="form.price" :default-value="0.00" :precision="2" :min="0" fontSize="11px" border-color="#ccc"/>
                        
                    </c-form-control>

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Number of stock</c-form-label>
                        
                        <c-number-input v-model="form.inStock" :default-value="0" :min="0" >
                            <c-number-input-field fontSize="11px" border-color="#ccc" />
                            <c-number-input-stepper border-color="#ccc">
                                <c-numberIncrement-stepper />
                                <c-number-decrement-stepper />
                            </c-number-input-stepper>
                        </c-number-input>
                        
                    </c-form-control>

                    <c-flex justify-content="space-between">
                        <c-form-control mt="4">
                            <c-form-label fontSize="13px">Size</c-form-label>
                            <c-input placeholder="XL,L,M,S,XS" size="md" v-model="form.size" fontSize="11px" border-color="#ccc"/>
                        </c-form-control>

                        <c-form-control mt="4">
                            <c-form-label fontSize="13px">Color</c-form-label>
                            <c-input placeholder="Red,Blue,Orange" size="md" v-model="form.color" fontSize="11px" border-color="#ccc"/>
                        </c-form-control>
                    </c-flex>

                    <div class="mt-4">
                        <input type="file" @change="uploadImage" class="w-full border border-gray text-medium">
                    </div>
                    

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Category</c-form-label>
                        <c-select v-model="form.category_id" placeholder="Select Category" fontSize="11px" border-color="#ccc">
                            <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                            
                        </c-select>
                    </c-form-control>
                    
                </c-modal-body>
                <c-modal-footer>
                    <c-button variant-color="blue" mr="3" fontWeight="light" fontSize="sm" size="sm">
                        Close
                    </c-button>
                    <c-button @click="submitLoad" fontSize="sm" fontWeight="light" size="sm">submit</c-button>
                </c-modal-footer>
            </c-modal-content>
            <c-modal-overlay />
        </c-modal>
        <c-modal
        :is-open="category"
        :on-close="close"
        :block-scroll-on-mount="blockScrollOnMount"
        is-centered
        >
            <c-modal-content ref="content" >
                <c-modal-header fontSize="15px">Add Category</c-modal-header>
                <c-modal-close-button size="sm"/>
                <c-modal-body>
                    <c-form-control>
                        <c-form-label fontSize="13px">Category</c-form-label>
                        <c-input ref="initialRef" v-model="form.name" placeholder="Category" fontSize="11px" border-color="#ccc"/>
                    </c-form-control> 
                </c-modal-body>
                <c-modal-footer>
                    <c-button variant-color="blue" mr="3" fontWeight="light" fontSize="sm" size="sm">
                        Close
                    </c-button>
                    <c-button @click="createCategory" fontSize="sm" fontWeight="light" size="sm">submit</c-button>
                </c-modal-footer>
            </c-modal-content>
            <c-modal-overlay />
        </c-modal>
    </c-box>
</template>

<script>
import { CBox, CText, CFlex, CButton, CInput, CInputRightAddon, CIcon, CSelect, CImage,CModal, CFormControl, CFormLabel, CNumberInput, CNumberInputField, CNumberDecrementStepper, CNumberIncrementStepper, CNumberInputStepper,
        CModalOverlay,
        CModalContent,
        CModalHeader,
        CModalFooter,
        CModalBody,
        CModalCloseButton, } from "@chakra-ui/vue";
import { RepositoryFactory as Repo } from "../../../repository/RepositoryFactory";

const CY = Repo.get('consultant');

export default {
    components:{
        CBox, CText, CFlex, CButton, CInput, CInputRightAddon, CIcon, CSelect, CImage,
        CFormControl, CFormLabel,
        CNumberInput, CNumberInputField, CNumberDecrementStepper, CNumberIncrementStepper, CNumberInputStepper,
        CModal,
        CModalOverlay,
        CModalContent,
        CModalHeader,
        CModalFooter,
        CModalBody,
        CModalCloseButton,
    },
    beforeRouteLeave (to, from , next) {
        const answer = window.confirm('Do you really want to leave? you have unsaved changes!')
        if (answer) {
            next()
        } else {
            next(false)
        }
    },
    data(){
        return {
            select:'',
            isOpen:false,
            category:false,
            categories:{},
            orders:{},
            order:false,
            blockScrollOnMount: false,
            products:{},
            form: {
                name:'',
                price:0,
                inStock:0,
                product_name:'',
                category_id:'',
                size:'',
                color:'',
                cover_image_url:''
            }
        };
    },
    mounted(){
        this.getProduct();
        this.getCategory();
        this.getOrder();
    },
    methods:{
        manageOrder(){
            this.order = !this.order;
        },
        open() {
            this.isOpen = true;
        },
        close() {
            this.isOpen = false;
            this.category = false;
        },
        uploadImage(e){
            this.form.cover_image_url = e.target.files[0];
        },
        async getProduct(){
            try{
                let response = await CY.getAllProduct();
                this.products = response.products;
                
            }catch(e){
                console.log(e);
            }
            
        },
        async getCategory(){
            try{
                let response = await CY.getAllCategory();
                this.categories = response.categories;
                
            }catch(e){
                console.log(e);
            }
            
        },
        async getOrder(){
            try{
                let response = await CY.orders();
                this.orders = response.orders;
                
            }catch(e){
                console.log(e);
            }
            
        },
        createCategory(){
            CY.createCategory(this.form)
                .then(res => {
                    this.form = {};
                    this.getCategory();
                    this.$toast({
                        position: 'top-right',
                        description: "Category created",
                        status: 'success',
                        duration: 5000
                    })
                })
        },
        submitLoad(){
            let fd = new FormData();
            fd.append('price', this.form.price);
            fd.append('inStock', this.form.inStock);
            fd.append('product_name', this.form.product_name);
            fd.append('size', this.form.size);
            fd.append('color', this.form.color);
            fd.append('category_id', this.form.category_id);
            fd.append('cover_image_url', this.form.cover_image_url);
            CY.createNewProduct(fd).then(res => {
                this.showToast();
                this.form = {};
                this.getProduct();
            })
            this.close();
        },
        showToast() {
            this.$toast({
                title: 'Product created.',
                description: "Your product has been added.",
                status: 'success',
                duration: 5000
            })
        }
    },

}
</script>

<style lang="scss" >
.css-m1s7dy {
    z-index:0
}

</style>