<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Carrito extends Model
{
    use HasFactory;

    
    public $timestamps = false;
    protected $fillable = ['usuario_id', 'importe', 'fecha_creacion', 'finalizado'];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class);
    }
    public function ordenes(): HasMany
    {
        return $this->hasMany(Orden::class);
    }
}
