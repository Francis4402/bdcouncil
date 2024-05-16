<!DOCTYPE html>
<html>
    <head>
        <title>Leaders</title>
    </head>
</html>

@extends('welcome')

@section('mainpage')
    <div>
        <div class="hero h-[20rem] relative" style="background-image: url({{ asset('assets/backgroundimage/ref3.jpg') }});">
            <div class="hero-overlay bg-black/20 "></div>
            <div class="absolute top-14 text-white">
                <div class="max-w-2xl">
                    <h1 class="mb-5 text-5xl font-bold uppercase">@lang('public.navtext3')</h1>
                </div>
            </div>
        </div>

        @include('layouts.leadersimages')
    </div>
@endsection