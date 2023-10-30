<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['producto_id', 'cantidad'];

    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
