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
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/1-2.jpg" loading="lazy" alt="i">
                </div>
                
                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/2-2.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/3-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/4-2.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/9-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/15-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/11-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/6-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/5-2.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/8-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/14.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/7-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/10-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/12-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/13-1.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/17.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/20.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/18.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/22.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/19.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/23.jpg" loading="lazy" alt="i">
                </div>

                <div class="bg-gray-200 p-4 w-fit border border-black/10">
                    <img src="https://buyerscouncil.org/wp-content/uploads/2024/02/21.jpg" loading="lazy" alt="i">
                </div>
            </div>
        </div>
    </div>
@endsection