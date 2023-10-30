<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Pedido extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['carrito_id', 'producto_id', 'cantidad', 'importe'];

    public function carrito(): BelongsTo
    {
        return $this->belongsTo(Carrito::class);
    }

    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }

    public function ordenes(): HasMany
    {
        return $this->hasMany(Orden::class);
    }
}
