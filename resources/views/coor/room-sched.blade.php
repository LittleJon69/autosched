<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            ROOM SCHEDULES
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">ROOM SCHEDULES</p> 
                </div>                
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3">
            <div class="w-full h-full flex flex-wrap justify-center xl:w-tabw">
                <div class="w-full h-full">
                    <x-splade-table  class="w-full h-full mobtable" :for="$Room_sched" striped>
                        @cell('action', $Room_sched)
                            <div class="td" data-title="Actions">
                                <div class="flex gap-2">
                                    <a class="group squared-btn red-btn border" href="{{ route('coor-room-pdf', ['Room_Number' => $Room_sched->roomNumber, 'Room_School' => $Room_sched->roomSchool]) }}">
                                        <div class="h-full w-full relative">
                                            <div class="flex items-center justify-center h-full w-full">
                                                <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-red-500 text-white"></i>
                                                <i class="fa-solid fa-file-pdf sm:group-hover:text-red-500 text-white"></i>
                                            </div>

                                            <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-90 rounded-md p-2 hidden w-fit group-hover:block">
                                                <p class="text-red-500 text-xs0 whitespace-pre">
                                                    GENERATE PDF
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> 
                        @endcell
                    </x-splade-table>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End -->
</x-coor-layout>


