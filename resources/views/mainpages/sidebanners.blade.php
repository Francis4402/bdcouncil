<div class="flex flex-col lg:w-96 w-full gap-8">
    <div class="bg-[#f7f7f7] p-8">
        <p class="text-[#333333]">Search</p>
        <div class="flex lg:flex-row flex-col lg:items-center gap-4">
            <input type="text" class="w-full" />
            <button class="bg-[#f0f0f0] px-6 py-2 border">Search</button>
        </div>
    </div>

    <div class="bg-[#f7f7f7] p-8 flex flex-col">
        <h4 class="text-2xl font-bold border-b py-4">Recent Posts</h4>
        <div class="text-lg flex flex-col font-light divide-y text-[#333333]">
            <p class="py-4">Training on Trade Financings</p>
            <p class="py-4">Proposed Downtown District Ordinance</p>
            <p class="py-4">Annual Water Quality Report (Gallery Post)</p>
            <p class="py-4">Waste Industries Garbage Pick Up: Embeds</p>
            <p class="py-4">Traffic Pattern Changes (Testing A Pagination)</p>
        </div>
    </div>

    <div class="bg-[#f7f7f7] p-8 flex flex-col">
        <h4 class="text-2xl font-bold border-b py-4">Recent Comments</h4>
        <div class="text-lg flex flex-col font-light divide-y text-[#333333]">
            <p class="py-4">1. ssdfsdf on Annual Water Quality Report (Gallery Post)</p>
        </div>
    </div>

    <div class="bg-[#f7f7f7] flex flex-col">
        <img src="{{ asset('assets/backgroundimage/CoffeeBanner.jpg') }}" alt="i">
    </div>

    <div class="bg-[#f7f7f7] p-8 flex flex-col">
        <h4 class="text-xl font-bold border-b py-4">Recent Posts</h4>
        <div class="text-lg flex flex-col font-light divide-y text-[#333333]">
            <div class="flex gap-4 mt-5 items-start">
                <img class="w-16 h-full" src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">
                <div class="flex flex-col gap-2">
                    <h4 class="text-sm font-semibold hover:underline cursor-pointer uppercase">Training on trade financings</h4>
                    <p class="text-gray-300 text-xs uppercase">May 4, 2024</p>
                </div>
            </div>

            <div class="flex gap-4 mt-5 items-start pt-5">
                <img class="w-16 h-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrOdsZkSoAV8YL9loXYtKcnnzk7PJqDlmIIHR7-6Qpfw&s" alt="i">
                <div class="flex flex-col gap-2">
                    <h4 class="text-sm font-semibold hover:underline cursor-pointer uppercase">proposed downtown district ordianance</h4>
                    <p class="text-gray-300 text-xs uppercase">september 16, 2018</p>
                </div>
            </div>
        </div>
    </div>
</div>