<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable =['id','npm','nama','tempat_lahir','tanggal_lahir','alamat','prodi_id','url_foto','timestamps'];
}