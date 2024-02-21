<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasBenih extends Model
{
    use HasFactory;

    protected $table = "kelas_benihs";
    protected $fillable = ["kelas_benih"];
}
