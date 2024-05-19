<div class="flex justify-center bg-[#2d2d2d] mt-10">
    <div class="container max-w-6xl md:px-0 px-5">
        <div class="p-16">
            <div class="flex md:flex-row flex-col items-start justify-between md:gap-0 gap-10">
                <div class="flex flex-col max-w-lg gap-4">
                    <h4 class="text-lg font-bold text-[#c4c4c4]">@lang('public.footertitle')</h4>
    
                    <div>
                        <p class="text-[#b2b2b2]">@lang('public.footeraddress1')</p>
                        <p class="text-[#b2b2b2]">@lang('public.footeradress2')</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-10 items-start">
                    <div class="flex flex-col gap-4">
                        <h4 class="text-lg font-bold text-[#c4c4c4]">@lang('public.footertitle1')</h4>
                        <div class="text-[#c4c4c4] gap-2 flex flex-col">
                            <a href="/">@lang('public.ft1')</a>
                            <a href={{ route('whoweare') }}>@lang('public.navtext1')</a>
                            <a href={{ route('ourpanellist') }}>@lang('public.navtext2')</a>
                            <a href={{ route('leaders') }}>@lang('public.navtext3')</a>
                            <a href={{ route('blog') }}>@lang('public.navtext7')</a>
                            <a href={{ route('contactus') }}>@lang('public.navtext8')</a>
                        </div>
                    </div>
        
                    <div class="flex flex-col gap-4">
                        <h4 class="text-lg font-bold text-[#c4c4c4]">@lang('public.footertitle2')</h4>
                        <div class="text-[#c4c4c4] gap-2 flex flex-col">
                            <a href={{ route('newsevents') }}>@lang('public.navdrop1')</a>
                            <a href={{ route('recentactivity') }}>@lang('public.navdrop2')</a>
                            <a href={{ route('photogallery') }}>@lang('public.navdrop3')</a>
                            <a href="https://www.youtube.com/@BuyersCouncil/videos">@lang('public.navdrop4')</a>
                        </div>
                    </div>
        
                    <div class="flex flex-col gap-4">
                        <h4 class="text-lg font-bold text-[#c4c4c4]">@lang('public.footertitle3')</h4>
                        <div class="text-[#c4c4c4] gap-2 flex flex-col">
                            <a href="/">@lang('public.ft2')</a>
                            <a href="/">@lang('public.ft3')</a>
                            <a href="/">@lang('public.ft4')</a>
                            <a href="/">@lang('public.ft5')</a>
                            <a href="/">@lang('public.ft6')</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-[#b2b2b2] text-xs flex justify-center pb-10 customfont">
            @lang('public.copyright')
        </div>
    </div>
</div>