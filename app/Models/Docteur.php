<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Docteur extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "docteurs";
    protected $fillable = ['Nom','Prenom','Adresse','numTelephone','Specialite'];
}