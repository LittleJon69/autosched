<x-prof-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            CLASS CALENDAR
        </p>
    </x-slot>  

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-b6 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">CLASS CALENDAR</p> 
                </div>
            </div>

            <div class="m-3 sm:flex items-center h-fit hidden gap-3">
                <div class="pr-0 border-r-0 border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" modal href="{{ route('prof-save-time') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-clock text-white sm:group-hover:text-b6"></i>
                        </div>
    
                        SETUP DAY AND TIME AVAILABILITY
                    </Link>
                </div>

                <div>
                    <a class="whitespace-nowrap squared-btn red-btn text-xs0 border group flex items-center justify-center" href="{{ route('professor-pdf') }}">
                        <div class="flex items-center justify-center h-full w-full mr-2">
                            <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-red-500 text-white"></i>
                            <i class="fa-solid fa-file-pdf sm:group-hover:text-red-500 text-white"></i>
                        </div>
                        
                        GENERATE PDF
                    </a>
                </div>
            </div>

            <div class="m-3 sm:hidden items-center h-fit flex gap-3">
                <div class="pr-0 border-r-0 border-r-gray-300">
                    <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('prof-save-time') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="fa-solid fa-clock text-white sm:group-hover:text-b6"></i>
                        </div>
    
                        SETUP DAY AND TIME AVAILABILITY
                    </Link>
                </div>

                <div class="pr-0 border-r-0 border-r-gray-300">
                    <a class="whitespace-nowrap squared-btn red-btn text-xs0 border group flex items-center justify-center" href="{{ route('professor-pdf') }}">
                        <div class="flex items-center justify-center h-full w-full mr-2">
                            <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-red-500 text-white"></i>
                            <i class="fa-solid fa-file-pdf sm:group-hover:text-red-500 text-white"></i>
                        </div>
                        
                        GENERATE PDF
                    </a>
                </div>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex justify-center p-3 items-center">
            <div class="w-full h-full flex justify-center 2xl:w-tabw 2xl:h-fit">
                <div class="w-full h-full">
                    <x-splade-table class="w-full h-full mobtable" :for="$Prof_sched" striped>
                        {{-- @cell('action', $Prof_sched)
                            <a href="{{ route('prof-generate-pdf', $Prof_sched->profId ) }}">Generate PDF</a>
                        @endcell --}}
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->    
</x-prof-layout>