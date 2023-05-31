<x-app-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            DEPARTMENTS
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-b6 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">DEPARTMENTS</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit">
                <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('department.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-building sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD DEPARTMENT
                </Link>
            </div>

            {{-- <div class="m-3 sm:flex items-center h-fit hidden">
                <Link modal class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('department.create') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <i class=" mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-b6 text-white"></i>
                        <i class="fa-solid fa-building sm:group-hover:text-b6 text-white"></i>
                    </div>

                    ADD DEPARTMENT
                </Link>
            </div> --}}
        </div>

        <div class="overflow-auto h-full w-full flex justify-center p-3 items-center">
            <div class="h-full w-full flex justify-center 2xl:w-tabw 2xl:h-fit">
                <div class="w-full h-full">
                    <x-splade-table class="w-full h-full mobtable" :for="$departments" striped>
                        @cell('deptCode', $dept)
                        <div class="td" data-title="Department Code">
                            {{ $dept->deptCode }}
                        </div>
                        @endcell

                        @cell('deptName', $dept)
                        <div class="td" data-title="Department Name">
                            {{ $dept->deptName }}
                        </div>
                        @endcell

                        @cell('action', $dept)
                        <div class="td" data-title="Actions">
                            <div class="flex gap-2">
                                <Link onclick="start()" href="{{ route('department.edit', $dept->id) }}" class="flex sm:hidden group squared-btn green-btn border">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-pen-to-square text-white sm:group-hover:text-green-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-90 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-green-500 text-xs0 whitespace-pre">
                                                EDIT DEPARTMENT
                                            </p>
                                        </div>
                                    </div>
                                </Link>

                                <Link onclick="start()" href="{{ route('department.edit', $dept->id) }}" class="sm:flex hidden group squared-btn green-btn border">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-pen-to-square text-white sm:group-hover:text-green-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-90 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-green-500 text-xs0 whitespace-pre">
                                                EDIT DEPARTMENT
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                
                                <Link class="group squared-btn red-btn border" confirm="DELETE DEPARTMENT" confirm-text="Are You Sure?" confirm-button="Confirm" cancel-button="Cancel" href="{{ route('department.destroy', $dept->id) }}" method="DELETE">
                                    <div class="h-full w-full relative">
                                        <i class="fa-solid fa-trash text-white sm:group-hover:text-red-500"></i>
    
                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-90 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-xs0 text-red-500 whitespace-pre">
                                                DELETE DEPARTMENT
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        </div>
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</x-app-layout>
