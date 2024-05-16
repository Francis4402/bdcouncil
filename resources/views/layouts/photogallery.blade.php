<!DOCTYPE html>
<html>
    <head>
        <title>Photo Gallery</title>
    </head>
</html>

@extends('welcome')

@section('mainpage')
    <div class="hero h-[20rem] relative" style="background-image: url({{ asset('assets/backgroundimage/ref3.jpg') }});">
        <div class="hero-overlay bg-black/20 "></div>
        <div class="absolute top-14 text-white">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold uppercase">@lang('public.navdrop3')</h1>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-20 mb-10">
        <div class="container max-w-6xl lg:px-0 px-5">
            <div class="grid md:grid-cols-2 gap-y-2 justify-center">
                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">
                </div>
                
                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="{{ asset('assets/backgroundimage/offceteam.jpg') }}" alt="i">
                </div>
            </div>
        </div>
    </div>
@endsection