<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class MetodoPago extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $table = 'metodos_pago';
    protected $fillable = ['tipo'];
    protected $hidden = ['created_at', 'updated_at'];

    public function orden(): HasMany
    {
        return $this->hasMany(Orden::class);
    }
}

