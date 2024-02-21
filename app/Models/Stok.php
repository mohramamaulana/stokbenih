<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $table = "stoks";
    protected $fillable = ["produsen_id" , "varietas_id" , "kelas_id" , "sumber" , "jumlah" , "catatan"];
}
