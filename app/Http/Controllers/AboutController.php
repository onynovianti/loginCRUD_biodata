<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Provinsi;
use DB;

class AboutController extends Controller
{
    // Tabel Abouts

    // Tampilan berisi biodata - Tab About
    public function index(){
        return view('about', [
            "title" => "About",
            'data' => About::first()
        ]);
    }

    // Tampilan Tambah Biodata
    public function create(){
        return view('createabout',[
            "title" => "Tambah Biodata",
            "data" => DB::select('select * from provinsis')
        ]);
    }

    // Simpan Data Biodata
    public function store(Request $request){
        $validatedData=$request->validate([
            'nama' => 'required',
            'deskripsi_singkat' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'tahun_sd' => 'required',
            'tahun_smp' => 'required',
            'tahun_smk' => 'required',
            'nama_sd' => 'required',
            'nama_smp' => 'required',
            'nama_smk' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'nomor_hp' => 'required',
            'domisili' => 'required'
        ]);
        About::create($validatedData); //untuk menyimpan data
        $request->session()->flash('success','Data Anda berhasil disimpan');
        return redirect("dashboardbiodata"); // untuk diarahkan kemana
    }
}
