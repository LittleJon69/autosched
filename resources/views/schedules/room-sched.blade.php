<x-app-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            ROOM SCHEDULES
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b border-b-b6 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">ROOM SCHEDULES</p> 
                </div>                
            </div>

            <div class="m-3 flex items-center h-fit">
                <div>
                    <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('previous-rooms-schedules') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <i class="mr-xs fa-solid fa-backward text-xs1 sm:group-hover:text-b6 text-white"></i>
                            
                            <span class="flex justify-center items-center relative">
                                <i class="fa-solid fa-calendar-day sm:group-hover:text-b6"></i>
                                <i class="absolute -bottom-1 -right-1 side-icon-btn fa-solid fa-door-open text-xs2 sm:group-hover:text-b6"></i>
                            </span>
                        </div>
    
                        PREVIOUS ROOM SCHEDULES
                    </Link>
                </div>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3 items-center">
            <div class="w-full h-full flex flex-wrap justify-center 2xl:w-tabw 2xl:h-fit">
                <x-splade-table class="w-full h-full mobtable" :for="$Room_sched" striped>
                    @cell('roomNumber', $Room_sched)
                        <div class="td" data-title="Room Number">
                            {{ $Room_sched->roomNumber }}
                        </div>
                    @endcell

                    @cell('profName', $Room_sched)
                        <div class="td" data-title="Professors Name">
                            {{ $Room_sched->profName }}
                        </div>
                    @endcell

                    @cell('subCode', $Room_sched)
                        <div class="td" data-title="Subject Code">
                            {{ $Room_sched->subCode }}
                        </div>
                    @endcell

                    @cell('studCourse', $Room_sched)
                        <div class="td" data-title="Course">
                            {{ $Room_sched->studCourse }}
                        </div>
                    @endcell

                    @cell('studYear', $Room_sched)
                        <div class="td" data-title="Year">
                            {{ $Room_sched->studYear }}
                        </div>
                    @endcell

                    @cell('studSection', $Room_sched)
                        <div class="td" data-title="Section">
                            {{ $Room_sched->studSection }}
                        </div>
                    @endcell

                    @cell('totalHours', $Room_sched)
                        <div class="td" data-title="Units">
                            {{ $Room_sched->totalHours }}
                        </div>
                    @endcell

                    @cell('schedDay', $Room_sched)
                        <div class="td" data-title="Day">
                            {{ $Room_sched->schedDay }}
                        </div>
                    @endcell

                    @cell('startTime', $Room_sched)
                        <div class="td" data-title="Start Time">
                            {{ $Room_sched->startTime }}
                        </div>
                    @endcell

                    @cell('endTime', $Room_sched)
                        <div class="td" data-title="End Time">
                            {{ $Room_sched->endTime }}
                        </div>
                    @endcell

                    @cell('sem', $Room_sched)
                        <div class="td" data-title="Semester">
                            {{ $Room_sched->sem }}
                        </div>
                    @endcell

                    @cell('action', $Room_sched)
                        <div class="td" data-title="Actions">
                            <div class="flex gap-2">
                                <a class="group squared-btn red-btn border" href="{{ route('room-generate-pdf', $Room_sched->roomNumber) }}">
                                    <div class="h-full w-full relative">
                                        <div class="flex items-center justify-center h-full w-full">
                                            <i class="mr-xs fa-solid fa-plus text-xs1 sm:group-hover:text-red-500 text-white"></i>
                                            <i class="fa-solid fa-file-pdf sm:group-hover:text-red-500 text-white"></i>
                                        </div>

                                        <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-90 rounded-md p-2 hidden w-fit group-hover:block">
                                            <p class="text-red-500 text-xs0 whitespace-pre">
                                                GENERETE PDF
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

    <!-- End -->
</x-app-layout>


