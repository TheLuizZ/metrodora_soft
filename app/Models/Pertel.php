<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertel extends Model
{
    use HasFactory;
    public $fillable = ['IDENTIDAD','NOM_PERSONA','SEX_PERSONA','IND_CIVIL','EDAD_PERSONA','USR_REGISTRO','TIPO_PERSONA','NUM_TELEFONO','TIPO_TELEFONO'];
}
