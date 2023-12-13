<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id_rol';


    protected $fillable = [
        'nombre_rol',
        'descripcion'
    ];

    public function users(){
        return $this->hasMany(User::class, 'id_rol', 'id_rol');
    }
}
