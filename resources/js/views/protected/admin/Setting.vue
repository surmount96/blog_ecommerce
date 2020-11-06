<template>
    <c-box>
        <c-text mx="2">
            Manage Users
        </c-text>
        <c-box>
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

                <c-button  mx="2" bg="white" fontSize="11px" px="6" boxShadow="sm">
                    SEND EMAIL
                </c-button>
            
            </c-flex>
            <c-box bg="gray.50"  boxShadow="sm" mx="2">
                <c-flex justify-content="space-between" align-items="center" bg="white" mb="4" boxShadow="sm" py="3" px="4">
                    <c-text width="200px" textAlign="center">
                        <c-checkbox default-is-checked></c-checkbox>
                    </c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Name</c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Email</c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Joined</c-text>
                    <c-text color="blue.200" fontSize="sm" width="md">Role</c-text>
                </c-flex>
                <c-flex justify-content="space-between" align-items="center" mb="4" py="3" px="4" v-for="user in users.data" :key="user.id">
                    <c-text width="200px" textAlign="center">
                        <c-checkbox ></c-checkbox>
                    </c-text>
                    <c-text color="gray.500" fontSize="sm" width="md">{{ user.name }}</c-text>
                    <c-text color="gray.500" fontSize="sm" width="md">{{ user.email }}</c-text>
                    <c-text color="gray.500" fontSize="sm" width="md">{{ user.created_at | date }}</c-text>
                    <c-text color="gray.500" fontSize="sm" width="md">Published</c-text>
                </c-flex>
            </c-box>
        </c-box>
    </c-box>
</template>

<script>
import { CBox, CText, CFlex, CButton, CInput, CInputRightAddon, CIcon, CSelect, CCheckbox, } from "@chakra-ui/vue";
import { RepositoryFactory as Repo } from "../../../repository/RepositoryFactory";
const CY = Repo.get('consultant');

export default {
    components:{
        CBox, CText, CFlex, CButton, CInput, CInputRightAddon, CIcon, CSelect, CCheckbox,
    },
    data(){
        return {
            users:{},
            select:''
        };
    },
    mounted(){
        this.getUsers();
    },
    methods:{
        async getUsers(){
            try{
                let response = await CY.test();
                this.users = response.data.users;
            }catch(e){
                //
            }
            
            
        },
    },
}
</script>