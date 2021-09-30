<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelompokPgw extends Model
{
    use HasFactory;
    public $primaryKey = 'id_kelompok_pgw';
    protected $fillable =[
        'nama_kelompok'
    ];
}
