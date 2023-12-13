<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'id_usuario',
        'fecha_registro',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_cliente', 'id_cliente');
    }
}
