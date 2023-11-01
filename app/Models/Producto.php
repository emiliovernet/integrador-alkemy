<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'precio',
        'imagen',
        'descripcion',
        'categoria_id',
        'habilitado',
    ];
    protected $hidden = [
        'categoria_id',
        'habilitado',
        'created_at', 
        'updated_at'
    ];

    protected $with = [
        'categoria'
    ];
    
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
    
    public function pedido(): HasMany
    {
        return $this->hasMany(Pedido::class);
    }

    public function stock(): HasMany
    {
        return $this->hasMany(Stock::class);
    }
    
}
