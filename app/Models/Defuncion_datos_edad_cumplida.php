<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Defuncion_datos_edad_cumplida extends Model
{
    protected $primaryKey = 'id_hora'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = 'datos_edad_cumplida'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function edad(): BelongsTo // Relación con Defuncion_fallecido_edad
    {
        return $this->belongsTo(Defuncion_fallecido_edad::class, 'id_edad_cumplida', 'id_edad_cumplida');
    }
}