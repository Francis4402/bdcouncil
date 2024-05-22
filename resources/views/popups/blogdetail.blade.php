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

    <div class="flex justify-center">
        <div class="container max-w-6xl md:px-0 px-5">
            
            <div class="flex md:flex-row flex-col md:justify-between items-start gap-10 w-full">

                <div class="flex flex-col gap-20 justify-center items-center my-20">

                    <h1 class="md:text-4xl text-3xl font-bold">@lang('public.cart1text')</h1>

                    <img class="w-96 h-full" src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">

                    <div class="flex flex-wrap gap-4 w-full">
                        <div class="flex items-center gap-1 uppercase">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
                            </svg>
                            
                            <p class="text-[#7a7a7a]">@lang('public.projecttext1')</p>
                        </div>

                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-[#7a7a7a]">@lang('public.user1')</p>
                        </div>

                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                            </svg>
                            
                            <p class="text-[#7a7a7a]">@lang('public.date1')</p>
                        </div>

                    </div>


                    <p>
                        @lang('public.blogpost')
                    </p>

                    <hr />
            
                    <div class="flex flex-col gap-8 w-full">
                        <h1 class="text-2xl font-bold">Leave a Reply</h1>
                        <div>
                            <hr class="w-24"/>
                            <hr class="w-full"/>
                        </div>

                            <p class="text-sm text-gray-400">Your email address will not be published. Required fields are marked *</p>
                        
                        <div class="flex flex-col gap-4">
                            <p class="text-sm">Comment *</p>
                            <textarea rows="8" cols="16" class="border w-full bg-[#f7f7f7] focus:outline-none p-5"></textarea>
                        </div>

                        <div class="flex md:flex-row flex-col items-center gap-4">
                            <div class="flex flex-col gap-2">
                                <p class="text-sm">Name *</p>
                                <input type="text" class="border w-full bg-[#f7f7f7] focus:outline-none px-4 py-2">
                            </div>
                            
                            <div class="flex flex-col gap-2">
                                <p class="text-sm">Email *</p>
                                <input type="email" class="border w-full bg-[#f7f7f7] focus:outline-none px-4 py-2">
                            </div>

                            <div class="flex flex-col gap-2">
                                <p class="text-sm">Website *</p>
                                <input type="text" class="border w-full bg-[#f7f7f7] focus:outline-none px-4 py-2">
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <p>Save my name,email and website in this browser for the next time I comment.</p>
                        </div>

                        <div>
                            <button class="text-white text-sm px-5 py-4 bg-[#008000] hover:bg-[#356d2a] uppercase font-semibold">post comment</button>
                        </div>
                    </div>
                </div>

                <div class="flex mt-10">
                    @include('mainpages.sidebanners')
                </div>
            </div>

        </div>
    </div>
@endsection