<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyaluran extends Model
{
    use HasFactory;

    protected $table = "stoks";
    protected $fillable = ["varietas_id" , "tujuan" , "pasar" , "jumlah" , "catatan" ];
}
