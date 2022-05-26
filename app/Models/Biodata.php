<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    public static function getData(){
        $data = array(
            "alamat_gambar" => "img/saya.jpg",
            "deskripsi_singkat" => "Saya adalah mahasiswi Politeknik Negeri Malang, Jurusan Teknologi Informasi, Prodi D-IV Teknik Informatika. Saya belajar mengenai Pemrograman, Jaringan Komputer, Basis Data, dan banyak lainnya.",
            "nama" => "ONY NOVIANTI",
            "ttl" => "Malang, 26 November 2001",
            "alamat" => "Sumberpucung, Kab. Malang, Jawa Timur",
            "tahun_sd" => "2008-2014",
            "tahun_smp" => "2014-2017",
            "tahun_smk" => "2017-2020",
            "nama_sd" => "SDN Sumberpucung 07",
            "nama_smp" => "SMPN 2 Sumberpucung",
            "nama_smk" => "SMK Brantas Karangkates",
            "email" => "onynovianti26@gmail.com",
            "facebook" => "ony novianti",
            "instagram" => "onynovianti",
            "nomor_hp" => "088217762015"
        );
        return $data;
    }
}