<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nama : Faradila Wahyu Wijayanti Z P <br> NIM: 2031710158";
    }
    public function articles($id){
        return "Halaman article dengan Id'$id'";
    }
}
