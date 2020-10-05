<template>
    <CThemeProvider>
        <div class="bg-gray">
            <div class="flex flex-wrap lg:mx-20 py-24">
                <div class="lg:w-2/3 md:w-2/3 lg:mx-0 md:mx-0 mx-5 w-full mb-4">
                    <div class="mr-">
                        <h6 class="text-body-2 mb-2">Order</h6>
                        <div class="bg-white  rounded p-8">
                            
                            <c-flex justify-content="space-between" align-items="center" mb="6">
                                <c-flex align-items="center" width="29%" mr="10px">
                                    <c-box my="auto" bg="white.50" width="52%">
                                        <c-image src="images/shirt.png" size="70px" objectFit="cover" />
                                    </c-box>

                                    <c-flex fontSize="11px" my="auto" flexDirection="column">
                                        <c-text>Air Red Pants</c-text>
                                        <c-text color="gray.500">Color:</c-text>
                                        <c-text color="gray.500">Size:</c-text>
                                    </c-flex>
                                    
                                </c-flex>
                                <c-box width="60%" display="flex" align-items="center" justify-content="space-between">
                                    <c-flex align-items="center" >
                                        <c-text text-align="center" fontWeight="500" color="red.200" fontSize="13px" mx="6">
                                            $90.00
                                        </c-text>
                                        <c-text text-align="center" fontSize="13px" mx="6">
                                            $500.00
                                        </c-text>
                                    </c-flex>
                                    <c-box width="40%" display="flex" align-items="center">
                                        <c-text fontSize="13px" mx="6">
                                            Quantity:
                                        </c-text>
                                        <c-number-input :default-value="1" size="sm" :max="30" :min="1" :clamp-value-on-blur="true">
                                            <c-number-input-field />
                                            <c-number-input-stepper >
                                                <c-numberIncrement-stepper />
                                                <c-number-decrement-stepper />
                                            </c-number-input-stepper>
                                        </c-number-input>
                                    </c-box>
                                </c-box>
                                
                            </c-flex>

                            <c-flex justify-content="space-between" align-items="center" mb="6">
                                <c-flex align-items="center" width="29%" mr="10px">
                                    <c-box my="auto" bg="white.50" width="52%">
                                        <c-image src="images/shirt.png" size="70px" objectFit="cover" />
                                    </c-box>

                                    <c-flex fontSize="11px" my="auto" flexDirection="column">
                                        <c-text>Air Red Pants</c-text>
                                        <c-text color="gray.500">Color:</c-text>
                                        <c-text color="gray.500">Size:</c-text>
                                    </c-flex>
                                    
                                </c-flex>
                                <c-box width="60%" display="flex" align-items="center" justify-content="space-between">
                                    <c-flex align-items="center" >
                                        <c-text text-align="center" fontWeight="500" color="red.200" fontSize="13px" mx="6">
                                            $90.00
                                        </c-text>
                                        <c-text text-align="center" fontSize="13px" mx="6">
                                            $500.00
                                        </c-text>
                                    </c-flex>
                                    <c-box width="40%" display="flex" align-items="center">
                                        <c-text fontSize="13px" mx="6">
                                            Quantity:
                                        </c-text>
                                        <c-number-input :default-value="1" size="sm" :max="30" :min="1" :clamp-value-on-blur="true">
                                            <c-number-input-field />
                                            <c-number-input-stepper >
                                                <c-numberIncrement-stepper />
                                                <c-number-decrement-stepper />
                                            </c-number-input-stepper>
                                        </c-number-input>
                                    </c-box>
                                </c-box>
                                
                            </c-flex>

                            <c-flex justify-content="space-between" align-items="center" mb="6">
                                <c-flex align-items="center" width="29%" mr="10px">
                                    <c-box my="auto" bg="white.50" width="52%">
                                        <c-image src="images/shirt.png" size="70px" objectFit="cover" />
                                    </c-box>

                                    <c-flex fontSize="11px" my="auto" flexDirection="column">
                                        <c-text>Air Red Pants</c-text>
                                        <c-text color="gray.500">Color:</c-text>
                                        <c-text color="gray.500">Size:</c-text>
                                    </c-flex>
                                    
                                </c-flex>
                                <c-box width="60%" display="flex" align-items="center" justify-content="space-between">
                                    <c-flex align-items="center" >
                                        <c-text text-align="center" fontWeight="500" color="red.200" fontSize="13px" mx="6">
                                            $90.00
                                        </c-text>
                                        <c-text text-align="center" fontSize="13px" mx="6">
                                            $500.00
                                        </c-text>
                                    </c-flex>
                                    <c-box width="40%" display="flex" align-items="center">
                                        <c-text fontSize="13px" mx="6">
                                            Quantity:
                                        </c-text>
                                        <c-number-input :default-value="1" size="sm" :max="30" :min="1" :clamp-value-on-blur="true">
                                            <c-number-input-field />
                                            <c-number-input-stepper >
                                                <c-numberIncrement-stepper />
                                                <c-number-decrement-stepper />
                                            </c-number-input-stepper>
                                        </c-number-input>
                                    </c-box>
                                </c-box>
                                
                            </c-flex>
                            
                        </div>
                    </div> 
                </div>
                <div class="lg:w-1/3 md:w-1/3 lg:mx-0 md:mx-0 mx-6 w-full mb-4">
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
                                        $122
                                    </c-text>
                                </c-flex>
                                <c-flex justify-content="space-between" mb="3">
                                    <c-text fontSize="xs" color="gray.400">
                                        Addtional Service
                                    </c-text>
                                    <c-text fontSize="xs" fontWeight="600" color="blue.200" mb="3">
                                        $50
                                    </c-text>
                                </c-flex>
                                <c-flex justify-content="space-between" mb="3">
                                    <c-text fontSize="xs" color="gray.400">
                                        Total Amount
                                    </c-text>
                                    <c-text fontSize="xs" color="gray.400" mb="3">
                                        $122
                                    </c-text>
                                </c-flex>
                                
                            </c-box>
                            <!-- {{ money | formatNumber}} -->
                            <c-button mb="3" w="100%" fontSize="13px" variant-color="blue" variant="outline">Checkout</c-button>
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
import { CThemeProvider, CBox, CButton, CFlex, CText,CImage } from '@chakra-ui/vue'
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
} from "@chakra-ui/vue";

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
    },
    data () {
        return {
            isOpen: false,
            money:'1000000'
        }
    },
    filters:{
        formatNumber(value){
            return new Intl.NumberFormat('en-IN',{ maximumSignificantDigits:3 }).format(value);
        }
    },
    methods: {
        open() {
            this.isOpen = true
        },
        close() {
            this.isOpen = false
        }

    }
}
</script>