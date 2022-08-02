<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    // use SoftDeletes;

    // protected $table = ['karyawans'];   

    protected $fillable = ['nik', 'nama', 'no_hp', 'alamat'];

    public function penilaians()
    {
        return $this->hasMany(Penilaian::class, 'karyawans_id', 'id');
    }


}
