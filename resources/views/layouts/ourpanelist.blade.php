<!DOCTYPE html>
<html>
    <head>
        <title>Our Panelist</title>
    </head>
</html>

@extends('welcome')

@section('mainpage')
    <div>
        <div class="hero h-[20rem]" style="background-image: url({{ asset('assets/backgroundimage/ref3.jpg') }});">
            <div class="hero-overlay bg-black/60 "></div>
            <div class="hero-content text-center text-white">
                <div class="max-w-2xl">
                    <h1 class="mb-5 text-5xl font-bold uppercase">@lang('public.navtext2')</h1>
                </div>
            </div>
        </div>

        @include('layouts.leadersimages')
    </div>
@endsection