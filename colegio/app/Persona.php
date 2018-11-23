<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $fillable =[
    	'nombre',
        'apellido',
        'fecha_nacimiento',
    	'ci'
    ];
}
