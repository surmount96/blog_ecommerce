@extends('layouts.app')

@section('content')
<div class="flex flex-wrap">
    <div class="lg:w-1/2 md:w-1/2 w-full lg:py-24 md:py-24 py-32 lg:px-12 md:px-12 px-10 relative" >
        <div class="absolute top-0 right-0 mr-4 text-blue " style="margin-top: .65rem">
            <a href="/logout" class="flex items-center" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                <span class="text-medium">Logout</span>
                <i class="ri-logout-box-line ri-fw"></i>
            </a>
            <form action="{{ route('logout') }}" id="logout" class="hidden" method="POST">
                @csrf
            </form>
        </div>
        <div class="text-blue text-h4 font-bold mb-8 text-center">{{ __('Define your patient') }}</div>
        
        <form action="">
            <div class="flex flex-wrap justify-between lg:mx-4 mx-4 my-6">
                <div class="lg:w-3/5 md:w-2/3 w-full">
                    <h4 class="font-bold text-blue">Versalin</h4>
                </div>
                <div class="lg:w-2/5 md:w-1/3 w-full flex items-center">
                    <p class="mr-2 text-blue w-20" style="font-size: 9px;letter-spacing:2px;">55</p>
                    <div class="">
                        <toggle-button v-model="test"
                            color="#82C7EB"
                            :sync="true"
                            :labels="true"/>
                    </div>
                    <p class="ml-2 text-blue w-24" style="font-size: 9px; letter-spacing:2px;">FIRSTLINE</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-between mx-4 my-6">
                <div class="lg:w-3/5 md:w-2/3 w-full">
                    <h4 class="font-bold text-blue">Age</h4>
                </div>
                <div class="lg:w-2/5 md:w-1/3 w-full flex items-center">
                    <p class="mr-2 text-blue w-20" style="font-size: 9px;letter-spacing:2px;"> &#60;65years</p>
                    <div class="">
                        <toggle-button v-model="age"
                            color="#82C7EB"
                            :sync="true"
                            :labels="true"/>
                    </div>
                    <p class="ml-2 text-blue w-24" style="font-size: 9px; letter-spacing:2px;">&#62;65years</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-between mx-4 my-6">
                <div class="lg:w-3/5 md:w-2/3 w-full">
                    <h4 class="font-bold text-blue">Dose</h4>
                </div>
                <div class="lg:w-2/5 md:w-1/3 w-full flex items-center">
                    <p class="mr-2 text-blue w-20" style="font-size: 9px;letter-spacing:2px;">55</p>
                    <div class="">
                        <toggle-button v-model="test"
                            color="#82C7EB"
                            :sync="true"
                            :labels="true"/>
                    </div>
                    <p class="ml-2 text-blue w-24" style="font-size: 9px; letter-spacing:2px;">FIRSTLINE</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-between mx-4 my-6">
                <div class="lg:w-3/5 md:w-2/3 w-full">
                    <h4 class="font-bold text-blue">Break</h4>
                </div>
                <div class="lg:w-2/5 md:w-1/3 w-full flex items-center">
                    <p class="mr-2 text-blue w-20" style="font-size: 9px;letter-spacing:2px;">0-14DAYS</p>
                    <div class="">
                        <toggle-button v-model="test"
                            color="#82C7EB"
                            :sync="true"
                            :labels="true"/>
                    </div>
                    <p class="ml-2 text-blue w-24" style="font-size: 9px; letter-spacing:2px;">&#62;14DAYS</p>
                </div>
            </div>

            <div class="flex flex-wrap justify-between mx-4 my-6">
                <div class="lg:w-3/5 md:w-2/3 w-full">
                    <h4 class="font-bold text-blue">Age</h4>
                </div>
                <div class="lg:w-2/5 md:w-1/3 w-full flex items-center">
                    <p class="mr-2 text-blue w-20" style="font-size: 9px;letter-spacing:2px;"> &#60;65years</p>
                    <div class="">
                        <toggle-button v-model="age"
                            color="#82C7EB"
                            :sync="true"
                            :labels="true"/>
                    </div>
                    <p class="ml-2 text-blue w-24" style="font-size: 9px; letter-spacing:2px;">&#62;65years</p>
                </div>
            </div>
            <div class="w-32 mx-auto my-10">
                <a href="/home" class="bg-green text-center text-white py-3 px-4 w-full rounded-full text-medium" type="submit">start</a>
            </div>
        </form>
    </div>

    <div class="lg:w-1/2 md:w-1/2 w-full lg:flex md:flex hidden bg-blue" style="height:100vh">
        <img src="{{ asset('images/point.svg') }}" alt="" class="mt-5">
    </div>
</div>
@endsection