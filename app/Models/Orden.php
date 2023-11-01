<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orden extends Model
{
    use HasFactory;

    protected $fillable = [
        'carrito_id',
        'metodo_pago_id',
        'fecha_creacion'
    ];

    protected $hidden = [
        'carrito_id',
        'metodo_pago_id',
        'created_at', 
        'updated_at'
    ];

    protected $with = [
        'carrito',
        'metodo_pago'
    ];

    public function carrito(): BelongsTo
    {
        return $this->belongsTo(Carrito::class);
    }

    public function metodo_pago(): BelongsTo
    {
        return $this->belongsTo(MetodoPago::class);
    }
}
