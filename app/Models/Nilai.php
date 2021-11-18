<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    
   protected $table = "tblnilai";
   protected $fillable = ['NIM_id','matakuliah_id'];
}
