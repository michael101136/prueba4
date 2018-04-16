<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
	protected $table = 'mensajes';
    protected $fillable = ['nombre','email','telefono','dni','asunto','mensaje','paise_id']; //proteje de la signacion masiva de datos

}
