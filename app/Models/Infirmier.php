<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infirmier extends Model
{
  
    use HasFactory;
    protected $table = "infirmiers";
    protected $fillable = ['Nom','Prenom','Adresse','numTelephone','Rotation','Salaire','Code'];

}
