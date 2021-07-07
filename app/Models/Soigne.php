<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soigne extends Model
{
    use HasFactory;
    protected $table = "soigne";
    protected $fillable = ['id','id_Docteurs','created_at','updated_at'];
}
