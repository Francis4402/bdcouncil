<div class="flex flex-col lg:w-96 w-full gap-8">
    <div class="bg-[#f7f7f7] p-8">
        <div class="flex lg:flex-row flex-col lg:items-center gap-4">
            <input type="text" class="w-full py-2" />
            <button class="bg-[#f0f0f0] px-6 py-2 border hover:bg-slate-300 hover:scale-105 duration-200">@lang('public.search')</button>
        </div>
    </div>

    <div class="bg-[#f7f7f7] p-8 flex flex-col">
        <h4 class="text-2xl font-bold border-b py-4">@lang('public.recentposts')</h4>
        <div class="text-lg flex flex-col font-light divide-y text-[#333333]">
            <p class="py-4">@lang('public.post1')</p>
            <p class="py-4">@lang('public.post2')</p>
            <p class="py-4">@lang('public.post3')</p>
            <p class="py-4">@lang('public.post4')</p>
            <p class="py-4">@lang('public.post5')</p>
        </div>
    </div>

    <div class="bg-[#f7f7f7] p-8 flex flex-col">
        <h4 class="text-2xl font-bold border-b py-4">@lang('public.recentcomments')</h4>
        <div class="text-lg flex flex-col font-light divide-y text-[#333333]">
            <p class="py-4">@lang('public.comments')</p>
        </div>
    </div>

    <div class="bg-[#f7f7f7] flex flex-col">
        <img src="{{ asset('assets/backgroundimage/CoffeeBanner.jpg') }}" alt="i">
    </div>

    <div class="bg-[#f7f7f7] p-8 flex flex-col">
        <h4 class="text-xl font-bold border-b py-4">@lang('public.recentposts')</h4>
        <div class="text-lg flex flex-col font-light divide-y text-[#333333]">
            <div class="flex gap-4 mt-5 items-start">
                <img class="w-16 h-full" src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">
                <div class="flex flex-col gap-2">
                    <h4 class="text-sm font-semibold hover:underline cursor-pointer uppercase">@lang('public.tra1')</h4>
                    <p class="text-gray-300 text-xs uppercase">May 4, 2024</p>
                </div>
            </div>

            <div class="flex gap-4 mt-5 items-start pt-5">
                <img class="w-16 h-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrOdsZkSoAV8YL9loXYtKcnnzk7PJqDlmIIHR7-6Qpfw&s" alt="i">
                <div class="flex flex-col gap-2">
                    <h4 class="text-sm font-semibold hover:underline cursor-pointer uppercase">@lang('public.tra2')</h4>
                    <p class="text-gray-300 text-xs uppercase">september 16, 2018</p>
                </div>
            </div>
        </div>
    </div>
</div>