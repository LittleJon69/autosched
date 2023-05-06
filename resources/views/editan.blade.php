{{-- <x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <Link href="/">
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="text-lg whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </Link>
        </nav>
    </x-slot>    

    <div class="sm:p-20 sm:max-w-lg w-full sm:h-fit h-full flex flex-wrap">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-fit">
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="flex items-center justify-center gap-3" href="{{ route('login') }}">
                    <i class="text-sm fa-solid fa-arrow-left"></i>
                    <p class="text-xs text-center">Back</p>
                </Link>
            </div>

            <div class="sm:hidden flex items-center justify-center p-5 pt-0 sm:p-5">
                <div class="flex items-center justify-center flex-wrap">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="text-lg text-center">AUTO - SCHED</p>
                </div>
            </div>

            <div class="bg-red-500 sm:hidden w-full p-5 flex items-center justify-center">
                <p class="text-white text-lg font-normal text-center">FORGOT PASSWORD?</p>
            </div>

            <div class="px-3 py-1 border-l-4 border-l-red-500 hidden sm:block m-7 mb-0">
                <p class="text-lg text-red-500">
                    FORGOT PASSWORD?
                </p>
            </div>

            <div class="m-7 mt-2">
                <!-- Session Status -->
                <x-auth-session-status/>
                
                <div class="my-4">
                    <p class="text-xs text-justify">
                        Forgot your Password? No Problem. Just let us know your Email Address and we will email you a Password Reset Link that will Allow you to Create a New Password.
                    </p>
                </div>
                
                <div class="mt-4">
                    <x-splade-form action="{{ route('password.email') }}">
                        <div class="w-full">
                            <x-splade-input id="email" class="input red-inpt" type="email" name="email" :label="__('Email')" required autofocus />
                        </div>
                        
                        <div class="flex items-center w-full sm:justify-between mt-8">
                            <Link class="hidden sm:block text-blc1 text-xs mr-2 transition-all ease-in-out hover:text-b6" href="{{ route('login') }}">
                                Go Back to Log In Form.
                            </Link>

                            <div class="squared-btn-i red-btn-i w-full flex flex-col sm:items-end">
                                <x-splade-submit :label="__('EMAIL PASSWORD RESET LINK')" />
                            </div>
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout> --}}

{{-- <x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            
        </nav>
    </x-slot>    

    <div class="sm:p-20 sm:max-w-lg w-full sm:h-fit h-full flex flex-wrap">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-fit">

            
            <div class="m-7 mt-2">
                
            </div>
        </div>
    </div>
</x-guest-layout> --}}

{{-- <div class="w-full min-h-full relative bg-white sm:bg-gray-100 flex flex-wrap">
    <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
        <div>
            <div class="flex items-center ml-2">
                <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                <p class="text-lg whitespace-nowrap">AUTO - SCHED</p>
            </div>
        </div>
    </nav>

    <div class="w-full flex justify-center flex-wrap">
        <div class="flex justify-center items-center w-full h-full sm:w-fit sm:p-20">
            <div class="h-full flex justify-center sm:items-center sm:w-96">
                <div class="bg-white sm:rounded-xl sm:shadow-md w-full sm:p-6">
                    
        
                    <div class="px-3 py-1 border-l-4 border-l-red-500 hidden sm:block">
                        <p class="text-lg text-red-500">
                            RESET YOUR PASSWORD
                        </p>
                    </div>
        
                    <div class="px-6 pt-2 pb-6 sm:p-0">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="hidden p-5 sm:flex justify-center items-center align-bottom h-40 border-t border-gray-300 bg-white">
    <p class="text-xs0">TERMS AND CONDITIONS</p>
</footer> --}}

{{-- <div class="w-full h-full flex items-center justify-center flex-wrap p-6">
    <div>
        <div class="border border-gray-400 rounded-lg relative w-full sm:w-80 h-fit">
            <div class="flex gap-2 items-center justify-center pt-4 flex-wrap">
                <div class="background-image w-11 h-11" style="background-image: url('{{ asset('image/logo-main.png') }}');">
    
                </div>
                <p class="sm:text-lg text-sm">
                    AUTO - SCHED
                </p>
            </div>
    
            <div class="pt-4 flex items-center flex-wrap w-full">
                <div class="bg-b6 w-full p-3 flex items-center justify-center flex-wrap flex-col">
                    <p class="text-white text-sm sm:text-lg font-normal uppercase text-center">Welcome</p>
                    <p class="text-white text-xs sm:text-sm font-normal uppercase text-center">
                        {{ $profFName }} {{ $profLName }}
                    </p>
                </div>
    
                <div class="p-5 w-fit h-fit flex items-center gap-3 flex-wrap">
                    <div class="text-justify text-xs">
                        <p>
                            Your Account has been Created by Coor Name. 
                            You can now Log In your Account by using your <span class="text-b6">Email Address</span> and <span class="text-red-500">Password</span>.
                        </p>
                    </div>
                    
                    <div class="text-justify text-xs">
                        <p>
                            Here is your <span class="text-b6">Email Address</span> and <span class="text-red-500">Password</span>:
                        </p>
        
                        <p>
                            Email Address: {{ $email }}
                        </p>
                        <p>
                            Password: {{ $password }}
                        </p>
                    </div>
        
                    <div class="text-justify text-xs">
                        <p>
                            Now, Log In your Account Here:
                        </p>
                        <p class="text-b6">
                            Link
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="sm:w-80 w-full flex items-center justify-center text-xs1 flex-wrap pt-4">
            <p class="text-center">
                This Email was sent to {{ $email }} because your Account has been created.
            </p>
            <p>
                © Auto-Sched 2023. All Right Reserved. 
            </p>
        </div>
    </div>
</div> --}}

{{-- <div class="w-full h-full flex items-center justify-center flex-wrap sm:p-5 bg-gray-100">
    <div class="sm:w-96 w-full h-full flex items-center justify-center flex-col">
        <div class="shadow-md sm:rounded-xl relative w-full sm:w-96 h-fit bg-white">
            <div class="flex gap-2 items-center justify-center pt-4 flex-wrap">
                <div class="background-image w-11 h-11" style="background-image: url('{{ asset('image/logo-main.png') }}');">
    
                </div>
                <p class="sm:text-lg text-sm">
                    AUTO - SCHED
                </p>
            </div>
    
            <div class="pt-4 flex items-center flex-wrap w-full">
                <div class="bg-b6 w-full p-3 flex items-center justify-center flex-wrap flex-col">
                    <p class="text-white text-sm sm:text-lg font-normal uppercase text-center">Welcome</p>
                    <p class="text-white text-xs sm:text-sm font-normal uppercase text-center">
                        
                    </p>
                </div>
    
                <div class="p-5 w-fit h-fit flex justify-center gap-4 flex-wrap flex-col">
                    <div class="text-justify sm:text-xs text-xs0">
                        <p>
                            Your Account has been Created by Coor Name. 
                            You can now Log In your Account by using your <span class="text-b6">Email Address</span> and <span class="text-red-500">Password</span>.
                        </p>
                    </div>
                    
                    <div class="text-justify sm:text-xs text-xs0">
                        <p>
                            Here is your <span class="text-b6 sm:text-xs text-xs0">Email Address</span> and <span class="text-red-500 sm:text-xs text-xs0">Password</span>:
                        </p>
        
                        <p class="flex flex-wrap gap-1">
                            <span class="sm:text-xs text-xs0">Email Address: </span> <span class="sm:text-xs text-xs0"></span>
                        </p>
                        <p class="flex flex-wrap gap-1 pt-1">
                            <span class="sm:text-xs text-xs0">Password: </span> <span class="sm:text-xs text-xs0"></span>
                        </p>
                    </div>
        
                    <div class="text-justify sm:text-xs text-xs0">
                        <p>
                            Now, Log In your Account Here:
                        </p>
                        <a href="{{ route('prof.login') }}" target="_blank" rel="noreferrer noopener" class="text-b6 cursor-pointer">
                            {{ route('prof.login') }}
                        </a>
                    </div>

                    <div class="text-justify sm:text-xs text-xs0">
                        <p class="text-orange-500">
                            Note: Please Don't Share this Information to Anyone.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="w-full flex items-center justify-center flex-col text-xs1 flex-wrap p-4">
            <p class="text-center w-full">
                This Email was sent to ddsssssddsdsddsdssddss because your Account has been created.
            </p>
            <p class="pt-1">
                © Auto-Sched 2023. All Rights Reserved. 
            </p>
        </div>
    </div>
</div> --}}

<x-guest-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div>
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
        </nav>
    </x-slot>

    <div class="sm:p-20 sm:max-w-lg w-full sm:h-fit h-full flex flex-wrap">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-fit">
            {{-- <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="flex items-center justify-center gap-3" href="{{ route('login') }}">
                    <i class="text-sm fa-solid fa-arrow-left"></i>
                    <p class="text-xs text-center">Exit</p>
                </Link>
            </div> --}}

            <div class="sm:hidden flex items-center justify-center p-5 sm:p-5">
                <div class="flex items-center justify-center flex-wrap">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm text-center">AUTO - SCHED</p>
                </div>
            </div>

            <div class="bg-b6 sm:hidden w-full p-3 flex sm:px-5 items-center justify-center">
                <p class="text-white sm:text-lg text-sm font-normal text-center">CONFIRM YOUR PASSWORD</p>
            </div>

            <div class="px-3 py-1 border-l-4 border-l-b6 hidden sm:block m-7 mb-0">
                <p class="sm:text-lg text-sm text-b6">
                    CONFIRM YOUR PASSWORD
                </p>
            </div>

            <div class="m-7 mt-2">
                <div class="my-4">
                    <p class="text-xs text-justify">
                        This is a Secure Area of the Application. Please Confirm your Password before Continuing.
                    </p>

                    <p class="mt-2 text-xs flex items-center justify-center sm:justify-start">Note: " <i class="fa-solid fa-circle text-xs3 text-red-500"></i> " Means that the Field is Required.</p>
                </div>
                
                <div class="mt-4">
                    <x-splade-form action="{{ route('password.confirm') }}">
                        <div class="relative h-full w-full">
                            <div onclick="togglepass()" class="group cursor-pointer bg-white w-11 flex items-center justify-center mt-5 p-2 absolute right-0 border-gray-300 border-solid border rounded-md rounded-tl-none rounded-bl-none">
                                <span class="cursor-pointer text-base">
                                    <i id="eyes" class="fa-solid fa-eye text-gray-400 group-hover:text-gray-500"></i>
                                </span>
                            </div>

                            <x-splade-input onkeyup="validate(0, 'addrss', 'true')" class="input blue-inpt" id="password" type="password" name="password" :label="__('Password')" />
                            <p class="message mt-1"></p>
                            <i class="fa-solid fa-circle text-xs3 text-red-500 mx-2 absolute top-6 -right-1"></i>
                        </div>
                        
                        <div class="flex items-center w-full sm:justify-between mt-8">
                            <div class="squared-btn-i blue-btn-i w-full flex flex-col sm:items-end">
                                <x-splade-submit :label="__('CONFIRM PASSWORD')" />
                            </div>
                        </div>
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>