<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_prodi','kode_prodi','fakultas_id'];

    public function fakultas(){
        return $this->belongsto(Fakultas::class,'fakultas_id');
    }

}
