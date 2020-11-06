<template>
    <div>
        <c-flex>
            <c-box width="80%">
                <c-flex mx="10" justify-content="space-between">
                    <c-box width="md" bg="orange.500" rounded="md"  boxShadow="md" height="15vh" p="3" mr="10">
                        <c-text color="white" fontSize="sm">
                            Approved orders
                        </c-text>
                        <c-text color="white" fontSize="40px">
                           46
                        </c-text>
                    </c-box>
                    <c-box width="md" boxShadow="md" bg="yellow.500" rounded="md" height="15vh" p="3"  mr="10">
                        <c-text color="white" fontSize="sm">
                            Pending orders
                        </c-text>
                        <c-text color="white" fontSize="40px">
                           10
                        </c-text>
                    </c-box>
                    <c-box width="md" boxShadow="md" bg="blue.500" rounded="md" height="15vh" p="3" >
                        <c-text color="white" fontSize="sm">
                            Pending messages
                        </c-text>
                        <c-text color="white" fontSize="40px">
                           2
                        </c-text>
                    </c-box>
                
                </c-flex>
                <c-flex mx="10" justify-content="space-between" my="6">
            
                    <c-box flex="4" boxShadow="md" bg="blue.500" rounded="md" height="15vh" p="3" mr="10">
                        <c-text color="white" fontSize="sm">
                            Active users
                        </c-text>
                        <c-text color="white" fontSize="40px">
                           {{ userCount }}
                        </c-text>
                    </c-box>

                    <c-box flex="1" >
                        <v-calendar :attributes='attrs'></v-calendar>
                    </c-box>
                
                </c-flex>

                <c-box bg="white"  boxShadow="sm" mx="10" height="40vh" px="4" rounded="lg">
                    <c-text fontSize="sm" py="5" color="gray.500">
                        Transaction History
                    </c-text>
                    <c-flex justify-content="space-between" align-items="center" bg="white" mb="3" py="2" px="3">
                        <c-text color="gray.500" textAligin="center" fontSize="sm" width="100px">N</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="sm" width="md">ID</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="sm" width="md">Type</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="sm" width="md">User</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="sm" width="md">Amount</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="sm" width="md">Date</c-text>
                    </c-flex>
                    <c-flex justify-content="space-between" align-items="center" bg="white" mb="3" py="2" px="3">
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="100px">1</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="md">000abd0</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="md">Item Money</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="md">Jane Doe</c-text>
                        <c-text color="green.200" textAligin="center" fontSize="xs" width="md">+NGN 10,000</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="md">2020-04-20</c-text>
                    </c-flex>
                    <c-flex justify-content="space-between" align-items="center" bg="white" mb="3" py="2" px="3">
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="100px">2</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="md">000abd0</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="md">Consultancy Money</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="md">Jane Doe</c-text>
                        <c-text color="green.200" textAligin="center" fontSize="xs" width="md">+NGN 100,000</c-text>
                        <c-text color="gray.500" textAligin="center" fontSize="xs" width="md">2020-04-20</c-text>
                    </c-flex>
                </c-box>
            </c-box>
            <c-box width="20%">
                <c-box bg="gray.200" rounded="lg" height="100px" py="4" px="1">
                    <div class="flex items-center bg-gray px-1 mb-4 py-2 cursor-pointer">
                        <div class="">
                            <div class="h-6 w-5 bg-orange"></div>
                        </div>
                        <div class="text-medium ml-2" style="width:100%">
                            <div class="flex justify-between">
                                <p class=" ">Jane Doe</p>
                                <p class="">1:30pm</p>
                            </div>
                            <p class=" ">Managing director</p>
                        </div>
                    </div>
                </c-box>
            </c-box>
        </c-flex>
        
    </div>
</template>

<script>
import { CBox, CText, CFlex, CButton, CInput, CInputRightAddon, CIcon, CSelect, CImage } from "@chakra-ui/vue";
import { RepositoryFactory as Repo } from "../../../repository/RepositoryFactory";
const CY = Repo.get('consultant');

export default {
    components:{
        CBox, CText, CFlex, CButton, CInput, CInputRightAddon, CIcon, CSelect, CImage
    },
    data(){
        return {
            select:'',
            userCount:'',
            attrs: [
                {
                key: 'today',
                highlight: true,
                dates: new Date(),
                },
            ],
        };
    },
    mounted(){
        this.getAllUsers();
    },
    methods:{
        async getAllUsers(){
            let response = await CY.allUsers();
            this.userCount = response.data;
            console.log(response)
        },
    },
}
</script>