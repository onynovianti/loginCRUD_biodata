<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    // Memanggil Semua Tampilan
    
    // HOME
    public function index(){
        return view('home',[
            "title" => "Home"
        ]);
    }

    // BIODATA (ABOUT)
    public function about(){
        return view('about', [
            "title" => "About",
            'data' => Biodata::getData()
        ]);
    }

    // Komentar
    public function komentar(){
        return view('komentar',[
            "title" => "Komentar"
        ]);
    }
    
}