<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi_singkat',
        'ttl',
        'alamat',
        'tahun_sd',
        'tahun_smp',
        'tahun_smk',
        'nama_sd',
        'nama_smp',
        'nama_smk',
        'email',
        'facebook',
        'instagram',
        'nomor_hp',
        'domisili'
    ];

    public function provinsi(){
        return $this->belongsTo('App\Models\Provinsi', 'id');
    }
}
