<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\About;
use DB;

class DashboardController extends Controller
{
    // Dashboard User
    public function index(){
        return view('dashboarduser',[
            "title" => "Dashboard - User",
            "data"  => User::all()
        ]);
    }

    // Dashboard Biodata
    public function dashboardbiodata(){
        return view('dashboardbiodata',[
            "title" => "Dashboard - Biodata",
            "data" => About::all()
        ]);
    }

    // Cari Biodata
    public function caribiodata(Request $request){
        return view('dashboardbiodata',[
            "title" => "Dashboard - Biodata",
            "data" => About::where('nama', 'LIKE', "%{$request->search}%")
            ->orWhere('alamat', 'LIKE', "%{$request->search}%")
            ->get()
        ]);
    }

    // Dashboard Provinsi
    public function dashboardprovinsi(){
        return view('dashboardprovinsi',[
            "title" => "Dashboard - Provinsi",
            "data" => DB::select('select * from provinsis')
        ]);
    }
}
