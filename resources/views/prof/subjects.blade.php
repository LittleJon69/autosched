<x-prof-layout>
    <x-slot name="tabname">
        <p class="text-white text-sm">
            SUBJECTS
        </p>
    </x-slot>  

    <!-- Content -->
    <div class="w-full h-full flex flex-col overflow-auto">
        <div class="title-btn flex w-full justify-between items-center border-b-gray-300 overflow-x-auto overflow-y-hidden">
            <div class="sm:flex hidden h-full">
                <div class="h-full w-fit rounded-br-3xl bg-b7 flex justify-center items-center shadow-md p-5">
                    <p class="whitespace-nowrap text-xl px-3 text-white tracking-widest">SUBJECTS</p> 
                </div>
            </div>
        </div>

        <div class="overflow-auto h-full w-full flex flex-wrap justify-center p-3 items-center">
            <div class="w-full h-full flex flex-wrap justify-center 2xl:w-tabw 2xl:h-fit">
                <div class="h-full w-full flex items-center justify-center">
                    <div class="h-full w-full flex items-center flex-wrap justify-center p-2 gap-3">
               
                        <table> 

                            <tr>
                                <th>Subject Description</th>
                                <th>Subject Code</th>
                                <th>Subject Units</th>
                            </tr>

                            
                                @foreach ($matchingRecords as $new_matchingRecords)
                                    <tr>
                                        <td>{{ $new_matchingRecords->subTitle }}</td>
                                        <td>{{ $new_matchingRecords->subCode }}</td>
                                        <td>{{ $new_matchingRecords->subUnits }}</td>
                                    </tr>
                                @endforeach
                            

                        </table>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->    
</x-prof-layout>