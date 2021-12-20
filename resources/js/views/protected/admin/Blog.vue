<template>
    <c-box minHeight="100vh">
        <c-flex justify-content="space-between" align-items="center" my="5" >
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

            <!-- <c-select v-model="select" width="20%" boxShadow="sm" border-color="gray.50" fontSize="sm" placeholder="Action ">
                <option value="grilled">Edit</option>
                <option value="pub-style">Delete</option>
                <option value="jucy-lucy">The Jucy Lucy</option>
            </c-select> -->
           
        </c-flex>
        <div class="mt-10 bg-white lg:mx-8 md:mx-6 mx-3 shadow rounded-md p-6" v-for="post in posts" :key="post.id">
            <h3 class="text-body-2 font-bold mb-3">
                {{ post.title }}
            </h3>
            
            <p class="text-medium">
                {{ post.body }}
            </p>
           
            <div class="flex items-center">
                <button ref="btnRef" @click="showDrawer(post)" class="text-small text-orange flex items-center mt-3" style="letter-spacing:2px">
                    VIEW MORE
                    <span class="ml-1 text-medium">&#187;</span>
                </button>
                <button ref="btnRef" @click="drawer =true" class="mx-5 text-small text-blue flex items-center mt-3" style="letter-spacing:2px">
                    <i class="ri-edit-line mr-2"></i>
                    EDIT
                </button>
                <button ref="btnRef" class="text-small text-red flex items-center mt-3" style="letter-spacing:2px">
                    <i class="ri-delete-bin-line mr-2"></i>
                    DELETE
                </button>
            </div>
        </div>
        <!-- <c-box bg="gray.50"  boxShadow="sm" mx="2">
            <c-flex justify-content="space-between" align-items="center" bg="white" mb="4" boxShadow="sm" py="3" px="4">
                <c-text width="200px" textAlign="center">
                    <c-checkbox default-is-checked></c-checkbox>
                </c-text>
                <c-text color="blue.200" fontSize="sm" width="md">Title</c-text>
                <c-text color="blue.200" fontSize="sm" width="md">Author</c-text>
                <c-text color="blue.200" fontSize="sm" width="md">Category</c-text>
                <c-text color="blue.200" fontSize="sm" width="md">Date</c-text>
            </c-flex>
            <c-flex justify-content="space-between" align-items="center" mb="4" py="3" px="4" >
                <c-text width="200px" textAlign="center">
                    <c-checkbox ></c-checkbox>
                </c-text>
                <c-text color="gray.500" fontSize="sm" width="md">{{ post.title }}</c-text>
                <c-text color="green.200" fontSize="sm" width="md">Jane Doe</c-text>
                <c-text color="gray.500" fontSize="sm" width="md">Uncategorized</c-text>
                <c-text color="gray.500" fontSize="sm" width="md">{{ post.created_at | date }}</c-text>
            </c-flex>
        </c-box> -->

        <c-modal
        :is-open="isOpen"
        :on-close="close"
        :block-scroll-on-mount="blockScrollOnMount"
        is-centered
        >
            <c-modal-content ref="content" >
                <c-modal-header fontSize="15px">Add Post</c-modal-header>
                <c-modal-close-button size="sm"/>
                <c-modal-body>
                    <c-form-control>
                        <c-form-label fontSize="13px">Title</c-form-label>
                        <c-input ref="initialRef" v-model="form.title" placeholder="Title" fontSize="11px" border-color="#ccc"/>
                    </c-form-control>

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Body</c-form-label>
                        <c-textarea placeholder="Message" v-model="form.body" fontSize="11px" border-color="#ccc"/>       
                    </c-form-control>

                    <c-flex>
                        <c-form-control mt="4">
                            <c-form-label fontSize="13px"> image</c-form-label>
                            <input type="file" @change="getImage" class="w-full border border-gray text-medium" fontSize="13px">
                        </c-form-control>

                        <c-form-control mt="4">
                            <c-form-label fontSize="13px"> Video</c-form-label>
                            <input type="file" @change="getVideo" class="w-full border border-gray text-medium" fontSize="13px">
                        </c-form-control>
                    </c-flex>

                    <c-form-control mt="4">
                        <c-form-label fontSize="13px">Category</c-form-label>
                        <c-input ref="initialRef" v-model="form.category" placeholder="Category" fontSize="11px" border-color="#ccc"/>
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

        <c-drawer :isOpen="drawer" placement="right" :on-close="closeDrawer" :initialFocusRef="()=>$refs.inputInsideModal">
            <c-drawer-overlay />
            <c-drawer-content>
            <c-drawer-close-button />


            <c-drawer-body>
                <c-text mt="12" mb="5" fontSize="17px" fontWeight="bold">
                    {{ post.title }}
                </c-text>
                <img :src="'/storage/photo/'+post.image" alt="" class="h-20 object-cover w-full">
                 <c-text mb="5" mt="3" fontSize="12px">
                    {{ post.body}}
                </c-text>
                <iframe src="https://www.youtube.com/embed/eyIEQYR79w4?autoplay=1&mute=1" class="w-full rounded-sm" title="Iframe Example" style="min-height: 35vh"></iframe>
            </c-drawer-body>

            <c-drawer-footer>
                <c-button variant="outline" mr="3" @click="isOpen = false">Cancel</c-button>
            </c-drawer-footer>
            </c-drawer-content>
        </c-drawer>
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
    CDrawer,
    CDrawerBody,
    CDrawerFooter,
    CDrawerHeader,
    CDrawerOverlay,
    CDrawerContent,
    CDrawerCloseButton,
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
        CDrawer,
        CDrawerBody,
        CDrawerFooter,
        CDrawerHeader,
        CDrawerOverlay,
        CDrawerContent,
        CDrawerCloseButton,
    },
    data(){
        return {
            posts:{},
            post:{},
            select:'',
            isOpen:false,
            drawer:false,
            blockScrollOnMount: false,
            form: {
                category:'',             
                image_url:'',
                video:'',
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
        closeDrawer() {
            this.drawer = false
        },
        getImage(e){
            this.form.image_url = e.target.files[0];
            // console.log(e.target.files[0]);
        },
        getVideo(e){
            this.form.video = e.target.files[0];
            // console.log(e.target.files[0]);
        },
        showDrawer(data){
            this.drawer = true;
            this.post = data;
        },
        async getPost(){
            let response = await CY.getAllPost();
            this.posts = response.posts;
        },
        submitLoad(){
            let fd = new FormData();
            fd.append('title',this.form.title);
            fd.append('body',this.form.body);
            fd.append('category',this.form.category);
            fd.append('video',this.form.video);
            fd.append('image',this.form.image_url);
            CY.createPost(fd).then(res => {
                // console.log(res)
                this.showToast();
                this.form = {};
                this.getPost();
            })
            this.close();
        },
        showToast() {
            this.$toast({
                position: 'top-right',
                title: 'Post created.',
                description: "Your post has been added",
                status: 'success',
                duration: 10000
            })
        }
    }
}
</script>