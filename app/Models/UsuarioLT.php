<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioLT extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = [
        'nombre',
        'email',
        'contrasena',
        'telefono',
        'domicilio',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
