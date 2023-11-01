<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'producto_id',
        'cantidad'
    ];

    protected $hidden = [
        'producto_id',
        'created_at', 
        'updated_at'
    ];

    protected $with = [
        'producto'
    ];



    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
