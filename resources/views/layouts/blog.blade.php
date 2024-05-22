<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
    </head>
</html>

@extends('welcome')

@section('mainpage')
    <div class="hero h-[20rem] relative" style="background-image: url({{ asset('assets/backgroundimage/ref3.jpg') }});">
        <div class="hero-overlay bg-black/60 "></div>
        <div class="hero-content text-center text-white">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold uppercase">@lang('public.navtext7')</h1>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-20 mb-10">
        <div class="container max-w-6xl lg:px-0 px-5">
            <div class="flex justify-center mt-20 mb-10">
                <div class="container max-w-6xl lg:px-0 px-5">
                    
                    <div class="flex md:flex-row flex-col md:justify-between items-start gap-10">
                        <div>
                            <div class="flex items-center gap-5 justify-end">
                                <ul class="flex items-center gap-2 border rounded-lg p-1">
                                    <li class="hover:bg-gray-200 px-5 py-1 rounded-md cursor-pointer">Newest</li>
                                    <li class="hover:bg-gray-200 px-5 py-1 rounded-md cursor-pointer">Unaswered</li>
                                </ul>
        
                                <button class="flex items-center gap-2 border border-blue-600 hover:bg-blue-200 rounded-md px-5 py-[0.4rem]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                    </svg>
                                    
                                    Filter
                                </button>
                            </div>
                            <div class="flex md:flex-row flex-col gap-2 flex-1 items-center">
                                <div class="flex gap-1 items-center">
                                    <h1 class="font-semibold uppercase text-3xl w-full">@lang('public.navtext7')</h1>
                                    <p class="rounded-full bg-blue-700 p-1 md:block hidden"></p>
                                </div>
                                <p class="flex-1 w-full p-[2px] border-t border-b"></p>
                            </div>
                
                            <div class="flex flex-col gap-10 w-full">

                                <div class="flex md:flex-row flex-col gap-5 items-center mt-10">
                                    <div class="flex md:flex-col flex-row gap-2 md:w-fit w-full text-gray-400">
                                        <p class="text-sm flex gap-2 cursor-pointer"><span>4</span> votes</p>
                                        <p class="text-sm flex gap-2 cursor-pointer"><span>3</span> answers</p>
                                        <p class="text-sm flex gap-2 cursor-pointer"><span>9</span> views</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-4 w-full items-start">
                                        
                                        <h4 class="text-2xl font-bold">@lang('public.cart1text')</h4>
                
                                        <h4 class="capitalize text-lg text-start">@lang('public.texttime1')</h4>
                                        
                                        <div class="flex lg:flex-row flex-col lg:items-center lg:gap-0 gap-4 items-start w-full">
            
                                            <div class="flex flex-wrap gap-4">
                                                <div class="flex items-center gap-1 text-sm uppercase">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
                                                    </svg>
                                                      
                                                    <p class="text-[#7a7a7a]">@lang('public.projecttext1')</p>
                                                </div>
            
                                                <div class="flex items-center gap-1 text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                                    </svg>
                                                      <p class="text-[#7a7a7a]">@lang('public.user1')</p>
                                                </div>
                    
                                                <div class="flex items-center gap-1 text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                                                    </svg>
                                                      
                                                    <p class="text-[#7a7a7a]">@lang('public.date1')</p>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="mt-2">
                                            <a href="{{ route('blogdetail') }}" class="px-5 py-3 bg-[#0d6efd] hover:bg-blue-800 hover:scale-105 duration-200 text-white">@lang('public.readmorebutton')</a>
                                        </div>
                                    </div>
                                </div>
            
            
                                <div class="flex md:flex-row flex-col gap-5 justify-center items-center mt-10">
            
                                    <div class="flex md:flex-col flex-row gap-2 md:w-fit w-full text-gray-400">
                                        <p class="text-sm flex gap-2 cursor-pointer"><span>4</span> votes</p>
                                        <p class="text-sm flex gap-2 cursor-pointer"><span>3</span> answers</p>
                                        <p class="text-sm flex gap-2 cursor-pointer"><span>9</span> views</p>
                                    </div>
                                    
                                    <div class="flex flex-col gap-4 w-full items-start">
                                        
                                        <h4 class="text-2xl font-bold">@lang('public.cart2text')</h4>
                
                                        <h4 class="capitalize text-lg text-start">@lang('public.texttime1')</h4>
                                        
                                        <div class="flex lg:flex-row flex-col lg:items-center lg:gap-0 gap-4 items-start w-full">
            
                                            <div class="flex flex-wrap gap-4">
                                                <div class="flex items-center gap-1 text-sm uppercase">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
                                                    </svg>
                                                      
                                                    <p class="text-[#7a7a7a]">@lang('public.projecttext1')</p>
                                                </div>
            
                                                <div class="flex items-center gap-1 text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                                    </svg>
                                                      <p class="text-[#7a7a7a]">@lang('public.user1')</p>
                                                </div>
                    
                                                <div class="flex items-center gap-1 text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                                                    </svg>
                                                      
                                                    <p class="text-[#7a7a7a]">@lang('public.date1')</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="mt-2">
                                            <a href="{{ route('blogdetail2') }}" class="px-5 py-3 bg-[#0d6efd] hover:bg-blue-800 hover:scale-105 duration-200 text-white">@lang('public.readmorebutton')</a>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </div>
        
                        <div class="flex">
                            @include('mainpages.sidebanners')
                        </div>
                    </div>
        
        
                </div>
            </div>
        </div>
    </div>
@endsection