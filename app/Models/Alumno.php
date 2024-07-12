<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    // Nombre de la tabla
    protected $table = 'alumnos';
    
    protected $fillable = [
        'cAluNombre',
        'cAluCurso',
        'nAluNota1',
        'nAluNota2',
        'nAluPromedio',
        'cAluCondicion',
        'dAluFecRegistro',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->nAluPromedio = ($model->nAluNota1+ $model->nAluNota2) / 2;
            $model->cAluCondicion = $model->nAluPromedio >= 11 ? 'Aprobado' : 'Desaprobado';
        });
    }
}
