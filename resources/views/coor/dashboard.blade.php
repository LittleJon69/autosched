<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            DASHBAORD
        </p>
    </x-slot>  

    <!-- Content -->
    <div class="w-full h-full flex flex-col">
        <div class="title-btn flex w-full justify-between items-center overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden">
                <div class="z-10 w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">DASHBOARD</p> 
                </div>                
            </div>
        </div>

        {{-- <Link href="profconfig">setup</Link> --}}

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3">
            <div class="w-full h-fit flex flex-wrap justify-center xl:w-tabw">
                {{-- <div class="bg-white shadow-md rounded-lg w-full">
                    <div class="p-7 border-b border-gray-300">
                        <p class="text-xl text-b6">
                            Today's Class/es
                        </p>
                    </div>

                    <div class="flex flex-warp items-center p-7">
                        <div class="bg-white flex flex-col shadow-lg rounded-lg overflow-hidden w-52 h-fit border border-b6">
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="group relative p-2 h-full w-full">
                                    <p class="text-white text-xs bg-red-500 p-1 px-2 rounded-md w-fit">
                                        CS 118
                                    </p>
        
                                    <p class="text-lg whitespace-nowrap text-b6 w-full h-fit overflow-hidden text-ellipsis p-2 pt-4">
                                        CS THESIS WRITING 1
                                    </p>
                                </div>

                                <div class="bg-b6 flex flex-wrap gap-2 p-3">
                                    <div class="flex justify-between w-full">
                                        <p class="text-white text-xs">
                                            BSCS 4B
                                        </p>

                                        <p class="text-white text-xs">
                                            ROOM 301
                                        </p>
                                    </div>

                                    <div class="flex justify-between w-full">
                                        <p class="text-white text-xs">
                                            MON
                                        </p>

                                        <p class="text-white text-xs">
                                            07:00 - 13:00
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="w-full flex flex-wrap justify-center gap-5 m-3 mt-7">
                    <div class="bg-white flex flex-col shadow-md rounded-lg overflow-hidden w-52 h-fit">
                        <div class="flex items-center justify-between p-4">
                            <div>
                                <p class="text-b6 text-xs1">
                                    SUBJECTS
                                </p>
    
                                <p class="text-4xl text-b6">
                                    5
                                </p>
                            </div>
                            
                            <div class="rounded-50 p-4 bg-b6 bg-opacity-20 w-12 h-12 flex items-center justify-center">
                                <i class="fa-solid fa-book text-xl text-b6"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white flex flex-col shadow-md rounded-lg overflow-hidden w-52 h-fit">
                        <div class="flex items-center justify-between p-4">
                            <div>
                                <p class="text-green-500 text-xs1">
                                    DEPARTMENTS
                                </p>
    
                                <p class="text-4xl text-green-500">
                                    5
                                </p>
                            </div>
                            

                            <div class="rounded-50 p-4 bg-green-500 bg-opacity-20 w-12 h-12 flex items-center justify-center">
                                <i class="fa-solid fa-building text-xl text-green-500"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white flex flex-col shadow-md rounded-lg overflow-hidden w-52 h-fit">
                        <div class="flex items-center justify-between p-4">
                            <div>
                                <p class="text-red-500 text-xs1">
                                    COURSES
                                </p>
    
                                <p class="text-4xl text-red-500">
                                    5
                                </p>
                            </div>
                            

                            <div class="rounded-50 p-4 bg-red-500 bg-opacity-20 w-12 h-12 flex items-center justify-center">
                                <i class="fa-solid fa-graduation-cap text-xl text-red-500"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white flex flex-col shadow-md rounded-lg overflow-hidden w-52 h-fit">
                        <div class="flex items-center justify-between p-4">
                            <div>
                                <p class="text-yellow-500 text-xs1">
                                    PROFESSORS
                                </p>
    
                                <p class="text-4xl text-yellow-500">
                                    5
                                </p>
                            </div>
                            

                            <div class="rounded-50 p-4 bg-yellow-500 bg-opacity-20 w-12 h-12 flex items-center justify-center">
                                <i class="fa-solid fa-user-tie text-xl text-yellow-500"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white flex flex-col shadow-md rounded-lg overflow-hidden w-52 h-fit">
                        <div class="flex items-center justify-between p-4">
                            <div>
                                <p class="text-purple-500 text-xs1">
                                    ROOMS
                                </p>
    
                                <p class="text-4xl text-purple-500">
                                    5
                                </p>
                            </div>
                            

                            <div class="rounded-50 p-4 bg-purple-500 bg-opacity-20 w-12 h-12 flex items-center justify-center">
                                <i class="fa-solid fa-door-open text-xl text-purple-500"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->    
</x-coor-layout>
