<!DOCTYPE html>
<html>
    <head>
        <title>Buyer</title>
    </head>
</html>

@extends('welcome')

@section('mainpage')
    <div class="hero h-[20rem] relative" style="background-image: url({{ asset('assets/backgroundimage/ref3.jpg') }});">
        <div class="hero-overlay bg-black/60 "></div>
        <div class="hero-content text-center text-white">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold uppercase">@lang('public.navdrop9')</h1>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-20 mb-10">
        <div class="container max-w-6xl lg:px-0 px-5">
            <div class="flex justify-between">

                <div>
                    
                </div>

                <div class="flex">
                    @include('mainpages.sidebanners')
                </div>
                
            </div>
        </div>
    </div>
@endsection