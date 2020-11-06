<template>
    <c-box>
        <c-flex justify-content="space-between" align-items="center" my="5">
            <!-- <c-text fontSize="sm" mx="10" color="blue.200" pb="1" border-bottom="2px" border-color="blue.200">View blog post</c-text>
            <c-text fontSize="sm">Create blog post</c-text> -->
            <c-button  mx="2" bg="white" fontSize="11px" px="6" boxShadow="sm" @click="open">
                ADD POST
            </c-button>
            
            <c-flex boxShadow="sm">
                <c-input rounded="0" placeholder="search" width="74%" fontSize="sm" border-color="gray.50"/>
                <c-input-right-addon border-color="gray.50">
                    <c-icon name="user" size="15px"></c-icon>
                </c-input-right-addon>
            </c-flex>
        </c-flex>
        <c-flex align-items="center" my="5" justify-content="space-between" mx="2">
                       
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

            <c-select v-model="select" width="20%" boxShadow="sm" border-color="gray.50" fontSize="sm" placeholder="Action ">
                <option value="grilled">Edit</option>
                <option value="pub-style">Delete</option>
                <option value="jucy-lucy">The Jucy Lucy</option>
            </c-select>
           
        </c-flex>
        <c-box bg="gray.50"  boxShadow="sm" mx="2">
            <c-flex justify-content="space-between" align-items="center" bg="white" mb="4" boxShadow="sm" py="3" px="4">
                <c-text width="200px" textAlign="center">
                    <c-checkbox default-is-checked></c-checkbox>
                </c-text>
                <c-text color="blue.200" fontSize="sm" width="md">Title</c-text>
                <c-text color="blue.200" fontSize="sm" width="md">Author</c-text>
                <c-text color="blue.200" fontSize="sm" width="md">Category</c-text>
                <c-text color="blue.200" fontSize="sm" width="md">Date</c-text>
            </c-flex>
            <c-flex justify-content="space-between" align-items="center" mb="4" py="3" px="4" v-for="post in posts" :key="post.id">
                <c-text width="200px" textAlign="center">
                    <c-checkbox ></c-checkbox>
                </c-text>
                <c-text color="gray.500" fontSize="sm" width="md">{{ post.title }}</c-text>
                <c-text color="green.200" fontSize="sm" width="md">Jane Doe</c-text>
                <c-text color="gray.500" fontSize="sm" width="md">Uncategorized</c-text>
                <c-text color="gray.500" fontSize="sm" width="md">{{ post.created_at | date }}</c-text>
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
                        <c-form-label fontSize="13px">Title</c-form-label>
                        <c-input ref="initialRef" v-model="form.title" placeholder="Product name" fontSize="11px" border-color="#ccc"/>
                    </c-form-control>

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Body</c-form-label>
                        <c-textarea placeholder="Message" v-model="form.body" fontSize="11px" border-color="#ccc"/>       
                    </c-form-control>

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Post image</c-form-label>
                        <input type="file"  class="w-full border border-gray text-medium">
                    </c-form-control>

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Post Video</c-form-label>
                        <input type="file"  class="w-full border border-gray text-medium">
                    </c-form-control>

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Category</c-form-label>
                        <c-select v-model="form.category_id" placeholder="Select Category" fontSize="11px" border-color="#ccc">
                            <option value="1">Clothing</option>
                            <option value="2">Shoe</option>
                            <option value="3">Chains</option>
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
    </c-box>
</template>

<script>
import { CBox, CText, CFlex, CButton, CInput, CInputRightAddon, CIcon, CSelect, CCheckbox, CFormControl, CFormLabel, CTextarea,
    CModal,
    CModalOverlay,
    CModalContent,
    CModalHeader,
    CModalFooter,
    CModalBody,
    CModalCloseButton,
    } from "@chakra-ui/vue";
import { RepositoryFactory as Repo } from "../../../repository/RepositoryFactory";
const CY = Repo.get('consultant');

export default {
    components:{
        CBox, CText, CFlex, CButton, CInput, CInputRightAddon, CIcon, CSelect, CCheckbox,CTextarea,
        CFormControl, CFormLabel,
        CModal,
        CModalOverlay,
        CModalContent,
        CModalHeader,
        CModalFooter,
        CModalBody,
        CModalCloseButton,
    },
    data(){
        return {
            posts:{},
            select:'',
            isOpen:false,
            blockScrollOnMount: false,
            form: {
                category_id:'',             
                cover_image_url:'',
                cover_video:'',
                title:'',
                body:''
            }
        };
    },
    mounted(){
        this.getPost();
    },
    methods:{
        open() {
            this.isOpen = true
        },
        close() {
            this.isOpen = false
        },
        uploadImage(e){
            //
        },
        async getPost(){
            let response = await CY.getAllPost();
            this.posts = response.data.posts;
        },
        submitLoad(){
            
            CY.createPost(this.form).then(res => {
                this.showToast();
                this.form = {};
                this.getPost();
            })
            this.close();
        },
        showToast() {
            this.$toast({
                title: 'Product created.',
                description: "your product has been added.",
                status: 'success',
                duration: 5000
            })
        }
    }
}
</script>