<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routes extends Controller
{
    public function blog() {
        return view('layouts.blog');
    }

    public function buyers() {
        return view('layouts.buyers');
    }

    public function contactus() {
        return view('layouts.contact-us');
    }

    public function factory() {
        return view('layouts.factory');
    }

    public function fairexhibition() {
        return view('layouts.fair-exhibition');
    }

    public function leaders() {
        return view('layouts.leaders');
    }

    public function ouractivities() {
        return view('layouts.our-activites');
    }

    public function ourpanelist() {
        return view('layouts.ourpanelist');
    }

    public function photogallery() {
        return view('layouts.photogallery');
    }

    public function traininganddev() {
        return view('layouts.training-development');
    }

    public function whoareyou(){
        return view('layouts.who-we-are-page');
    }

    public function newsevent() {
        return view('layouts.newsevent');
    }
}
