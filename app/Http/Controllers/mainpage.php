<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainpage extends Controller
{
    public function render() {
        return view('indexpage.index');
    }
}
