<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocapark extends Model
{
   protected $table = 'traducciones';

   //omitiendo dos  atributos que genera en automatico larabel update_at , create_at que 
   // hacen referencia de cuando se creo y se actaulizo un registro

   public $timestamps = false;

   protected $fillable =['id_palabras','palabra','traduccion'];
}
