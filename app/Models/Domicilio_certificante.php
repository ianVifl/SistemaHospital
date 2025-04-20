<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Domicilio_certificante extends Model
{
    protected $primaryKey = 'id_domicilio_certificante'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = '_domicilio__telefono_certificante'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}