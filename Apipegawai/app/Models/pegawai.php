<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    public $primaryKey = 'id_kelompok_pgw';
    protected $fillable =[
        'nama','nip','alamat','telp','foto','id_kelompok_pgw','status'
    ];
}
