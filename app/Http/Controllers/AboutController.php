<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return "Nama : Faradila Wahyu Wijayanti <br> NIM: 2031710158";
    }
}