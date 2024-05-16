<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class langcontroller extends Controller
{
    public function lang($lang) {
        App::setLocale($lang);
        Session::put("lang", $lang);
        return redirect()->back();
    }
}
