<template>
    <CThemeProvider class="">
        <div class="lg:mx-5 md:mx-8 mx-5 mb-4">
            <h3 class="font-bold">Dashboard</h3>
        </div>
        <div class="lg:mx-5 md:mx-8 mx-5 mb-4">
            <div class="border-l-4 bg-white shadow border-green py-1 ">
                <p class="p-3 text-medium">
                    Hey, we've noticed that you do not have "silence bundled plugins purchase notifications" options enabled. If they are bothering you, click here to enable it. You can always change this setting under The7 > My The7, in the "Bundled Plugins" box.
                </p>
            </div>
        </div>
        <div class="lg:mx-5 md:mx-8 mx-5 mb-4">
            <div class="border-l-4 bg-white shadow border-yellow py-1 ">
                <p class="p-3 text-medium">
                    Hey, we've noticed that you do not have "silence bundled plugins purchase notifications" options enabled. If they are bothering you, click here to enable it. You can always change this setting under The7 > My The7, in the "Bundled Plugins" box.
                </p>
            </div>
        </div>
        <div class="flex flex-wrap lg:mx-5 md:mx-8 mx-5 mb-4 mt-5">
            <div class="lg-w-1/3 md:w-1/3 sm:w-1/2 mb-4 w-full">
                <h3 class="text-body-2 mb-1">Appointment</h3>
                <div class="bg-white shadow rounded-lg mr-8 py-5">
                    <div class="px-4 ">
                        <h3 class="text-body-2">Thursday, 07 May</h3>
                        <p class="my-2 text-medium text-gray-grayer mr-10 flex items-center">
                            <i class="ri-time-line ri-fw mr-2"></i>10:30 - 11:00 - 30mins
                        </p>
                        <p class="my-2 text-medium text-gray-grayer mr-10 flex items-center">
                            <i class="ri-map-pin-2-line ri-fw mr-2"></i>Abule egba london, crescent
                        </p>
                    </div>
                    <div class="border-t border-gray mt-3">
                        <p class="text-center text-blue text-medium py-4 cursor-pointer" @click="open">Manage Appointment</p>
                    </div>
                </div>
            </div>
            <div class="lg-w-2/3 md:w-2/3 sm:w-1/2 mb-4 w-full pt-8">
                <div class="bg-blue-deep h-48 rounded-lg">

                </div>
            </div>
        </div>

        <c-modal
        :is-open="isOpen"
        :on-close="close"
        :block-scroll-on-mount="blockScrollOnMount"
        >
        <c-modal-content ref="content">
            <c-modal-header>Manage Appointment</c-modal-header>
            <c-modal-close-button />
            <c-modal-body>
                You can scroll the content behind the modal
            </c-modal-body>
            <c-modal-footer>
            <c-button variant-color="blue" mr="3" fontSize="sm">
                Close
            </c-button>
            <c-button @click="close" fontSize="sm">submit</c-button>
            </c-modal-footer>
        </c-modal-content>
        <c-modal-overlay />
        </c-modal>
    </CThemeProvider>
</template>

<script>
    import {
        CThemeProvider,
        CModal,
        CButton,
        CModalOverlay,
        CModalContent,
        CModalHeader,
        CModalFooter,
        CModalBody,
        CModalCloseButton,
    } from "@chakra-ui/vue";
    export default {
        name: "Index",
        components:{
            CThemeProvider,
            CModal,
            CButton,
            CModalOverlay,
            CModalContent,
            CModalHeader,
            CModalFooter,
            CModalBody,
            CModalCloseButton,
        },
        data () {
            return {
                isOpen: false,
                blockScrollOnMount: false
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

<style scoped>

</style>
