<!DOCTYPE html>
<html>
    <head>
        <title>Who We Are</title>
    </head>
</html>
@extends('welcome')
@section('mainpage')

<div>
    <div class="hero h-[20rem]" style="background-image: url({{ asset('assets/backgroundimage/ref3.jpg') }});">
        <div class="hero-overlay bg-black/60 "></div>
        <div class="hero-content text-center text-white">
            <div class="max-w-2xl">
                <h1 class="mb-5 text-5xl font-bold uppercase">@lang('public.navtext1')</h1>
            </div>
        </div>
    </div>

    <div class="flex justify-center my-20">
        <div class="container max-w-6xl lg:px-0 px-5">
            <div class="flex flex-col justify-center gap-6">

                <h4 class="text-2xl font-bold flex justify-center">@lang('public.whoareyoutitle')</h4>

                <p class="text-[#7a7a7a] text-lg">
                    @lang('public.whoareyoudescription')
                </p>
            </div>
        </div>
    </div>

    <div class="text-white grid md:grid-cols-3 gap-2">
        <div class="bg-[#008000] card-body">
            <h1 class="text-2xl font-bold">@lang('public.introducingt3')</h1>
            <p class="text-lg">@lang('public.whoaredes7')</p>
        </div>

        <div class="bg-[#ff0000] card-body">
            <h1 class="text-2xl font-bold">@lang('public.introducingt5')</h1>
            <p class="text-lg">@lang('public.whoaredes8')</p>
        </div>

        <div class="bg-[#008000] card-body">
            <h1 class="text-2xl font-bold">@lang('public.introducingt7')</h1>
            <p class="text-lg">@lang('public.whoaredes9')</p>
        </div>
    </div>

    <div class="flex justify-center my-20">
        <div class="container max-w-6xl lg:px-0 px-5">
            <div class="flex flex-col justify-center gap-6">
                <h4 class="text-2xl font-bold flex justify-center">@lang('public.whoareyoutitle1')</h4>

                <div class="flex flex-col gap-4">
                    <p class="text-[#7a7a7a] text-lg">@lang('public.1'). <span class="font-bold">@lang('public.whoareyoudescriptiontitle1')</span> @lang('public.whoaredes1')</p>

                    <p class="text-[#7a7a7a] text-lg">@lang('public.2'). <span class="font-bold">@lang('public.whoareyoudescriptiontitle2')</span> @lang('public.whoaredes2')</p>

                    <p class="text-[#7a7a7a] text-lg">@lang('public.3'). <span class="font-bold">@lang('public.whoareyoudescriptiontitle3')</span> @lang('public.whoaredes3')</p>

                    <p class="text-[#7a7a7a] text-lg">@lang('public.4'). <span class="font-bold">@lang('public.whoareyoudescriptiontitle4')</span> @lang('public.whoaredes4')</p>

                    <p class="text-[#7a7a7a] text-lg">@lang('public.5'). <span class="font-bold">@lang('public.whoareyoudescriptiontitle5')</span> @lang('public.whoaredes5')</p>

                    <p class="text-[#7a7a7a] text-lg">@lang('public.6'). <span class="font-bold">@lang('public.whoareyoudescriptiontitle6')</span> @lang('public.whoaredes6')</p>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
