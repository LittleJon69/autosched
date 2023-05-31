<x-coor-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            CLASSES
        </p>
    </x-slot>

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">CLASS LIST</p> 
                </div>                
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3 items-center">
            <div class="w-full h-full flex flex-wrap justify-center 2xl:w-tabw 2xl:h-fit">
                <div class="w-full h-full">
                    <x-splade-table  class="w-full h-full mobtable" :for="$All_Class" striped>
                        @cell('course', $All_Class)
                            <div class="td" data-title="Course">
                                {{ $All_Class->course }}
                            </div>
                        @endcell

                        @cell('year', $All_Class)
                            <div class="td" data-title="Year">
                                {{ $All_Class->year }}
                            </div>
                        @endcell

                        @cell('section', $All_Class)
                            <div class="td" data-title="Section">
                                {{ $All_Class->section }}
                            </div>
                        @endcell

                        @cell('action', $All_Class)
                            <div class="td" data-title="Action">
                                <div class="flex gap-2">
                                    <Link class="group squared-btn red-btn border" confirm="DELETE CLASS" confirm-text="Are You Sure?" confirm-button="Confirm" cancel-button="Cancel" href="{{ route('class-list-delete', $All_Class->id) }}" method="DELETE">
                                        <div class="h-full w-full relative">
                                            <i class="fa-solid fa-trash text-white sm:group-hover:text-red-500"></i>
        
                                            <div class="absolute bottom-9 -right-4 shadow-md bg-white bg-opacity-90 rounded-md p-2 hidden w-fit group-hover:block">
                                                <p class="text-red-500 text-xs0 whitespace-pre">
                                                    DELETE CLASS
                                                </p>
                                            </div>
                                        </div>
                                    </Link>
                                </div>
                            </div>

                            {{-- <Link confirm confirm-text="Are you sure to delete this class?" confirm-button="Confirm" cancel-button="No" href="{{ route('class-list-delete', $All_Class->id) }}" >Delete Class</Link> --}}
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</x-coor-layout>



