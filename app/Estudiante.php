<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    protected $fillable = [
        'p_nombre', 
        's_nombre', 
        't_nombre',
        'p_apellido', 
        's_apellido', 
        'genero',
        'codigo', 
        'fecha_nac', 
        'direccion', 
        'foto', 
        'estado', 
        'usuario_id', 
    ];

    //Variables para el estado del estudiante
    const ACTIVO=1;
    const INACTIVO=2;
    const RETIRADO=3;
    const SUSPENDIDO=4;

    public function encargados(){//Muchos estudiantes pueden tener a muchos encargados
        return $this->belongsToMany(Encargado::class, 'encargado_estudiante', 'estudiante_id', 'encaargado_id');
    }

    public function usuario(){//Un estudiante tiene asigando un solo usuario
        return $this->belongsTo(User::class);
    }

    public function asignaciones(){//Un estudiante puede tener muchas asignaciones
        return $this->hasMany(Asignacion::class);
    }
    
    public function detalle_notas(){//Un estudiante tiene muchos detalles de notas (nota por aspecto)
        return $this->hasMany(DetalleNota::class);
    }

    public function asistencias(){//Un estudiante va a tener varias asistencias (de varios cursos y ciclos escolares)
        return $this->hasMany(Asistencia::class);
    }
    
}
