<div class="flex text-blc1 bg-white sm:bg-blue-100 relative h-full w-full overflow-hidden">
    <!-- Header -->
    <nav class="bg-b6 p-3 flex justify-between items-center shadow-md absolute top-0 z-10 w-full h-16">
        <div class="sm:hidden flex gap-3 items-center">
            <div class="cursor-pointer bg-white p-2 w-8 h-8 flex items-center justify-center rounded-md" id="menubtn" onclick="menuBtn()">
                <i class="fa-solid fa-bars text-b6 text-sm"></i>
            </div>

            <div>
                {{ $tabname }}
            </div>
        </div>

        <div class="sm:block hidden">
            <Link class="text-xs0 flex items-center">
                <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                <p class="text-sm text-white">AUTO - SCHED</p>
            </Link>
        </div>

        <div class="flex items-center gap-3 mr-2">
            <div class="h-8 duration-500 max-w-namew sm:flex flex-col justify-center text-right hidden">
                <p class="text-white text-xs overflow-hidden text-ellipsis whitespace-nowrap">
                    {{ Auth::user()->coorFName.' '.Auth::user()->coorLName }}
                </p>
                <p class="text-white text-xs1">
                    Coordinator
                </p>
            </div>

            <div class="flex items-center justify-center w-fit h-fit relative">
                {{-- @if ($school->schLogo == "")
                    <div class="absolute background-image -top-32 w-11 h-11 flex items-center justify-center border-4 border-b6 rounded-full p-2 shadow-md bg-white" style="background-image:url('{{ asset('image/logo-as.png') }}')">
                @else
                    <div class="absolute background-image -top-32 w-11 h-11 flex items-center justify-center border-4 border-b6 rounded-full p-2 shadow-md bg-white" style="background-image:url('{{ asset('storage/'.$school->schLogo) }}')">
                @endif --}}

                <div class="background-image w-9 h-9 flex items-center justify-center border-2 border-white rounded-full p-2 shadow-md bg-white" style="background-image:url('{{ asset('image/logo-as.png') }}')">
                </div>

                <div class="absolute shadow-md -bottom-0 -right-1 rounded-full bg-b4 w-4 h-4 flex items-center justify-center">
                    <div class="drop-btn flex items-center justify-center relative cursor-pointer w-full h-full">
                        <x-dropdown placement="bottom-end" class="flex items-center justify-center w-full h-full">
                            <x-slot name="trigger" class="flex items-center justify-center w-4 h-4">
                                <button class="flex items-center justify-center w-4 h-4">
                                    <div class="flex items-center justify-center w-4 h-4">
                                        <span class="flex items-center justify-center w-4 h-4">
                                            <i class="fa-solid fa-caret-down text-xs1 text-white"></i>
                                        </span>
                                    </div>
                                </button>
                            </x-slot>
        
                            <x-slot name="content">
                                <x-dropdown-link onclick="start()" href="{{ route('coordinator-update-profile') }}">
                                    <div class="flex items-center gap-2 uppercase whitespace-nowrap">
                                        <i class="fa-solid fa-user-pen text-xs"></i> Update Your Profile
                                    </div>
                                </x-dropdown-link>
        
                                <x-dropdown-link onclick="start()" href="{{ route('coordinator-update-password') }}">
                                    <div class="flex items-center gap-2 uppercase whitespace-nowrap">
                                        <i class="fa-solid fa-lock text-xs"></i> Change Your Password
                                    </div>
                                </x-dropdown-link>
        
                                <x-dropdown-link onclick="start()" :href="route('coor.logout')" confirm="LOG OUT" confirm-text="Are You Sure?" confirm-button="Confirm" cancel-button="Cancel" method="POST">
                                    <div class="flex items-center gap-2 uppercase whitespace-nowrap">
                                        <i class="fa-solid fa-arrow-right-from-bracket text-xs"></i> Log Out
                                    </div>
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End -->

    <!-- Mobile View Sidebar -->
    <div class="sidebar-cntnr flex sm:hidden fixed h-full w-full z-10 transition-all ease-out -translate-x-full">
        <div class="relative">
            <div id="closebtn" onclick="menuBtn()" class="flex menu-close-btn group border-2 border-b5 bg-b5 top-5 right-5">
                <i class="fa-solid fa-xmark text-sm text-white"></i>
            </div>
            
            @include('coor.layouts.sidebar')
        </div>
    </div>
    <!-- End -->

    <div class="flex h-full w-full pt-16">
        <!-- Sidebar -->
        <div class="sm:flex hidden">
            @include('coor.layouts.sidebar')
        </div>
        <!-- End -->

        <!-- Content -->
        {{ $slot }}
        <!-- End -->
    </div>
</div>