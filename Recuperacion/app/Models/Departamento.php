<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable  = ['id','name','budget'];

    public function centros(){
        return $this->hasMany('App\Models\Centro');
    }

    public function empleados(){
        return $this->hasMany('App\Models\Empleado');
    }
}
