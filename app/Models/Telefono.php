<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    public $fillable = ['NUM_TELEFONO','TIPO_TELEFONO','USR_REGISTRO'];
    // public function personas(){
    //     return $this->belongsTo(personas::class, 'id');
    // }
}
