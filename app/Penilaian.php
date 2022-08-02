<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penilaian extends Model
{
    // use SoftDeletes;

    // protected $table = ['penilaian'];   

    protected $fillable = ['karyawans_id', 'kriterias_id', 'bulan', 'tahun'];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriterias_id', 'id');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawans_id', 'id');
    }
}
