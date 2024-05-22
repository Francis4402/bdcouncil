<?php
    $currentRoute = Route::currentRouteName();
?>


<div class="bg-[#333333] flex justify-center w-full h-full sticky top-0 customfont z-20">
    <div class="container max-w-6xl">
        <div class="flex justify-between items-center ">
            <a href="/">
                <img class="bg-[#232323] p-8 w-32 h-full" src="https://buyerscouncil.org/wp-content/uploads/2024/02/logo.png" alt="i">
            </a>

            <div class="uppercase text-white font-bold text-sm lg:flex hidden items-center">
                <a href="{{ route('whoweare') }}" class="border-r border-gray-800 menu-link <?php echo ($currentRoute == 'whoweare') ? 'active' : ''; ?>">
                    @lang('public.navtext1')
                </a>
                <a href={{ route('ourpanellist') }}  class="border-r border-gray-800 menu-link <?php echo ($currentRoute == 'ourpanellist') ? 'active' : ''; ?>">@lang('public.navtext2')</a>
                <a href={{ route('leaders') }}  class="border-r border-gray-800 menu-link <?php echo ($currentRoute == 'leaders') ? 'active' : ''; ?>">@lang('public.navtext3')</a>
                
                <div class="relative">
                    <a id="dropdownToggle" class="border-r border-gray-800 flex items-center cursor-pointer menu-link">
                        @lang('public.navtext4')
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
                            </svg>
                        </span>
                    </a>
                    <div id="dropdownMenu" class="dropdowns hidden">
                        <div class="shape"></div>
                        <div class="absolute left-4 top-10 w-48 py-2 bg-[#232323] shadow-md z-10">
                            <div class="text-sm font-normal px-5 py-2 capitalize">
                                <div class="flex flex-col gap-4">
                                    <a href={{ route('newsevents') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop1')</a>
                                    <a href={{ route('recentactivity') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop2')</a>
                                    <a href={{ route('photogallery') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop3')</a>
                                    <a href="https://www.youtube.com/@BuyersCouncil/videos" class="hover:text-gray-400">@lang('public.navdrop4')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="relative">
                    <a id="dropdownToggle2" class="border-r border-gray-800 flex items-center cursor-pointer menu-link">
                        @lang('public.navtext5')
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
                            </svg>
                        </span>
                    </a>
                    <div id="dropdownMenu2" class="dropdowns hidden">
                        <div class="shape"></div>
                        <div class="absolute left-4 top-10 w-48 py-2 bg-[#232323] shadow-md z-10">
                            <div class="text-sm font-normal px-5 py-2 capitalize">
                                <div class="flex flex-col gap-2">
                                    <a href={{ route('traningdevroute') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop5')</a>
                                    <a href="/fair-exhibition" class="hover:text-gray-400">@lang('public.navdrop6')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <a id="dropdownToggle3" class="border-r border-gray-800 flex items-center cursor-pointer menu-link">
                        @lang('public.navtext6')
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25 12 21m0 0-3.75-3.75M12 21V3" />
                            </svg>
                        </span>
                    </a>

                    <div id="dropdownMenu3" class="dropdowns hidden">
                        <div class="shape"></div>
                        <div class="absolute left-4 top-10 w-48 py-2 bg-[#232323] shadow-md z-10">
                            <div class="text-sm font-normal px-5 py-2 capitalize">
                                <div class="flex flex-col gap-2">
                                    <a href="https://admin.buyerscouncil.org/login" class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop7')</a>
                                    <a href="/factory" class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop8')</a>
                                    <a href="/buyer" class="hover:text-gray-400">@lang('public.navdrop9')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
                <a href="/blog" class="border-r border-gray-800 menu-link <?php echo ($currentRoute == 'blog') ? 'active' : ''; ?>">@lang('public.navtext7')</a>
                <a href="/contactus" class="border-r border-gray-800 menu-link <?php echo ($currentRoute == 'contactus') ? 'active' : ''; ?>">@lang('public.navtext8')</a>
                <a href="{{ route('lang', ['lang' => 'en']) }}" class="border-r border-gray-800 cursor-pointer menu-link @if(Session::get('lang') == 'en') active @endif">
                    en
                </a>
                <a href="{{ route('lang', ['lang' => 'bn']) }}" class="flex items-center cursor-pointer menu-link @if(Session::get('lang') == 'bn') active @endif">
                    bn
                </a>
            </div>

            <div class="lg:px-0 px-5">
                <a class="text-white lg:hidden flex gap-1 items-center font-semibold uppercase text-sm p-4 bg-[#008000] hover:bg-[#423e3e] duration-200 cursor-pointer menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                    </svg>
                    @lang('public.menu')
                </a>
            </div>
            
            <div class="bg-[#1f2024] absolute hidden top-[7.6rem] w-full menu transition duration-500 ease-in-out">
                <div class="text-white py-5 font-semibold text-base flex flex-col gap-5 w-full uppercase">
                    <a href={{ route('whoweare') }} class="menu-link">@lang('public.navtext1')</a>
                    <a href={{ route('ourpanellist') }} class="menu-link">@lang('public.navtext2')</a>
                    <a href={{ route('leaders') }} class="menu-link">@lang('public.navtext3')</a>
                    <p class="menu-link flex justify-between">
                        @lang('public.navtext4')
                        <svg id="toggleIcon1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-600">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-.53 14.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V8.25a.75.75 0 0 0-1.5 0v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z" clip-rule="evenodd" />
                        </svg>
                    
                        <svg id="toggleIcon2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="display:none;">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm.53 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v5.69a.75.75 0 0 0 1.5 0v-5.69l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z" clip-rule="evenodd" />
                        </svg>
                    </p>

                    <div id="areaText" style="display: none;" class="text-sm font-normal px-5 capitalize">
                        <div class="flex flex-col gap-2">
                            <a href={{ route('newsevents') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop1')</a>
                            <a href={{ route('recentactivity') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop2')</a>
                            <a href={{ route('photogallery') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop3')</a>
                            <a href="https://www.youtube.com/@BuyersCouncil/videos" class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop4')</a>
                        </div>
                    </div>

                    <p class="menu-link flex justify-between">
                        @lang('public.navtext5')
                        <svg id="toggleIcon3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-600">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-.53 14.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V8.25a.75.75 0 0 0-1.5 0v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z" clip-rule="evenodd" />
                        </svg>
                    
                        <svg id="toggleIcon4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="display:none;">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm.53 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v5.69a.75.75 0 0 0 1.5 0v-5.69l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z" clip-rule="evenodd" />
                        </svg>
                    </p>

                    <div id="areaText2" style="display: none;" class="text-sm font-normal px-5 capitalize">
                        <div class="flex flex-col gap-2">
                            <a href={{ route('traningdevroute') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop5')</a>
                            <a href={{ route('fairexhabition') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop6')</a>
                        </div>
                    </div>

                    <p class="menu-link flex justify-between">
                        @lang('public.navtext6')
                        <svg id="toggleIcon5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-600">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-.53 14.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V8.25a.75.75 0 0 0-1.5 0v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z" clip-rule="evenodd" />
                        </svg>
                    
                        <svg id="toggleIcon6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="display:none;">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm.53 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v5.69a.75.75 0 0 0 1.5 0v-5.69l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z" clip-rule="evenodd" />
                        </svg>
                    </p>

                    <div id="areaText3" style="display: none;" class="text-sm font-normal px-5 capitalize">
                        <div class="flex flex-col gap-2">
                            <a href="https://admin.buyerscouncil.org/login" class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop7')</a>
                            <a href={{ route('factory') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop8')</a>
                            <a href={{ route('buyers') }} class="border-b border-dotted border-gray-600 pb-1 hover:text-gray-400">@lang('public.navdrop9')</a>
                        </div>
                    </div>

                    <a href={{ route('blog') }} class="menu-link flex justify-between">
                        @lang('public.navtext7')
                    </a>

                    <a href={{ route('contactus') }} class="menu-link flex justify-between">
                        @lang('public.navtext8')
                    </a>
                    <a href="/lang/en" class="menu-link">
                        EN
                    </a>
                    <a href="/lang/bn" class="menu-link">
                        BN
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>