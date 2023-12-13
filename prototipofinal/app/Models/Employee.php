<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'roles';


    protected $fillable = [
        'id_usuario',
        'cargo',
        'direccion_residencia',
        'ingreso_basico',
        'fecha_ingreso',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }
    
}
