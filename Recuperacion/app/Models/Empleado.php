<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable =['id', 'num_hijos','telephone'];

    public function departamento(){
        return $this->belongsTo('App\Models\Departamento');
    }

    public function habilidads(){
        return $this->belongsToMany('App\Models\Habilidad');
    }

    public function hijos(){
        return $this->hasMany('App\Models\Hijo');
    }
}
