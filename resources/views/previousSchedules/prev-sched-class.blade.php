<x-table-layout>
    <x-slot name="navbar">
        <nav class="w-full hidden sm:flex justify-between items-center p-3 transition-all ease-in-out nav absolute top-0">
            <div class="flex items-center">
                <div class="pr-3 border-r border-gray-300">
                    <Link class="whitespace-nowrap squared-btn blue-btn text-xs0 border group flex items-center justify-center" onclick="start()" href="{{ route('superadmin-class-sched') }}">
                        <div class="mr-2 flex items-center justify-center">
                            <span class="flex justify-center items-center relative">
                                <i class="fa-solid fa-calendar-day sm:group-hover:text-b6"></i>
                                <i class="absolute -bottom-1 -right-1 side-icon-btn fa-solid fa-users text-xs2 sm:group-hover:text-b6"></i>
                            </span>
                        </div>
    
                        CLASS SCHEDULES
                    </Link>
                </div>
    
                <div class="flex items-center ml-2">
                    <img src="{{ asset('image/logo-main.png') }}" alt="auto-sched-logo" class="w-11 mr-2">
                    <p class="sm:text-lg text-sm whitespace-nowrap">AUTO - SCHED</p>
                </div>
            </div>
        </nav>
    </x-slot>   
    
    <div class="flex flex-wrap items-center justify-center 2xl:max-w-7xl 2xl:h-fit w-full h-full gap-5 sm:pt-20 sm:p-3">
        <div class="bg-white sm:rounded-xl relative sm:shadow-md w-full h-full flex flex-col">
            <div class="sm:hidden flex items-start p-5 h-fit transition-all ease-in-out navback">
                <Link class="text-xs0 flex items-center justify-center gap-2" href="{{ route('superadmin-class-sched') }}">
                    <div class="mr-2 flex items-center justify-center">
                        <span class="flex justify-center items-center relative">
                            <i class="fa-solid fa-calendar-day sm:group-hover:text-b6"></i>
                            <i class="absolute -bottom-1 -right-1 side-icon-btn-dflt fa-solid fa-users text-xs2 sm:group-hover:text-b6"></i>
                        </span>
                    </div>

                    <p class="text-center">CLASS SCHEDULES</p>
                </Link>
            </div>

            <div class="hidden sm:block px-3 border-l-4 border-l-b6 m-7 mb-0">
                <p class="sm:text-lg text-sm text-b6">
                    PREVIOUS CLASS SCHEDULES
                </p>
            </div>
    
            <div class="sm:hidden">
                <div class="bg-b6 w-full p-3 flex sm:px-5 items-center justify-center">
                    <p class="text-white sm:text-lg text-sm font-normal text-center">PREVIOUS CLASS SCHEDULES</p>
                </div>
            </div>
    
            <div class="h-full w-full flex justify-center p-3 overflow-auto items-center">
                <div class="h-full w-full sm:p-4">
                    <div class="h-full w-full">
                        <x-splade-table class="w-full h-full mobtable" :for="$Prev_Stud_Scheds" striped>
                            @cell('studCourse', $Prev_Stud_Scheds)
                                <div class="td" data-title="Course">
                                    {{ $Prev_Stud_Scheds->studCourse }}
                                </div>
                            @endcell

                            @cell('studYear', $Prev_Stud_Scheds)
                                <div class="td" data-title="Year">
                                    {{ $Prev_Stud_Scheds->studYear }}
                                </div>
                            @endcell

                            @cell('studSection', $Prev_Stud_Scheds)
                                <div class="td" data-title="Section">
                                    {{ $Prev_Stud_Scheds->studSection }}
                                </div>
                            @endcell

                            @cell('subCode', $Prev_Stud_Scheds)
                                <div class="td" data-title="Subject Code">
                                    {{ $Prev_Stud_Scheds->subCode }}
                                </div>
                            @endcell

                            @cell('profName', $Prev_Stud_Scheds)
                                <div class="td" data-title="Professors Name">
                                    {{ $Prev_Stud_Scheds->profName }}
                                </div>
                            @endcell

                            @cell('schedDay', $Prev_Stud_Scheds)
                                <div class="td" data-title="Day">
                                    {{ $Prev_Stud_Scheds->schedDay }}
                                </div>
                            @endcell

                            @cell('startTime', $Prev_Stud_Scheds)
                                <div class="td" data-title="Start Time">
                                    {{ $Prev_Stud_Scheds->startTime }}
                                </div>
                            @endcell

                            @cell('endTime', $Prev_Stud_Scheds)
                                <div class="td" data-title="End Time">
                                    {{ $Prev_Stud_Scheds->endTime }}
                                </div>
                            @endcell
                            
                            @cell('totalHours', $Prev_Stud_Scheds)
                                <div class="td" data-title="Units">
                                    {{ $Prev_Stud_Scheds->totalHours }}
                                </div>
                            @endcell

                            @cell('classroom', $Prev_Stud_Scheds)
                                <div class="td" data-title="Room Number">
                                    {{ $Prev_Stud_Scheds->classroom }}
                                </div>
                            @endcell

                            @cell('sem', $Prev_Stud_Scheds)
                                <div class="td" data-title="Semester">
                                    {{ $Prev_Stud_Scheds->sem }}
                                </div>
                            @endcell
                        </x-splade-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-table-layout>