<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $fillable = ['jumlah_penjualan', 'kategori', 'keterangan'];

    public function penilaians()
    {
        return $this->hasMany(Penilaian::class, 'kriterias_id', 'id');
    }

}
