<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;
    protected $fillable =['id','desc'];

    public function empleados(){
        return $this->belongsToMany('App\Models\Empleado');
    }
}
