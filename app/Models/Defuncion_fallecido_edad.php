<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Defuncion_fallecido_edad extends Model
{
    protected $primaryKey = 'id_edad_cumplida'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = 'fallecido_edad'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }

    public function edadCumplidaDetalle(): HasOne // Relación con Defuncion_datos_edad_cumplida
    {
        return $this->hasOne(Defuncion_datos_edad_cumplida::class, 'id_edad_cumplida', 'id_edad_cumplida');
    }
}