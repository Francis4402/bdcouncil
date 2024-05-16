@extends('welcome')

@section('mainpage')

    <div>
       @include('mainpages.herobanner')
       @include('mainpages.introducing')
       @include('mainpages.leadersimages')
       @include('mainpages.recentactivities')
       @include('layouts.blogposts')
       @include('layouts.newseventposts')
    </div>

@endsection