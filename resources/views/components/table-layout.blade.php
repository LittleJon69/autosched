<div class="flex flex-wrap h-full w-full">
    <div class="w-full h-full justify-between relative sm:bg-blue-100 flex flex-wrap">
        {{ $navbar }}
    
        <div class="w-full h-full flex justify-center flex-wrap">
            <div class="flex justify-center sm:items-center w-full h-full flex-wrap">
                {{ $slot }}
            </div>
        </div>
    </div>
    
    <footer class="hidden w-full p-5 sm:flex flex-col justify-center items-center align-bottom h-fit border-t border-gray-300 bg-white">
        <p class="text-xs">Terms and Conditions</p>

        <p class="pt-1 text-xs">
            © Auto-Sched 2023. All Rights Reserved. 
        </p>
    </footer>
</div>