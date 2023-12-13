<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'id_usuario',
        'fecha_registro',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }
}
