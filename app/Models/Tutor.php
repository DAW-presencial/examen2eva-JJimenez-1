<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    public $fillable = ['empresa', 'tipus_document', 'dni', 'nom_tutor', 'primer_llinatge', 'segon_llinatge', 'pais_dni', 'provincia', 'municipi', 'estat', 'telefon', 'email'];

}
