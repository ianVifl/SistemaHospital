<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detalles_medicos_defuncion extends Model
{
    protected $primaryKey = 'id_detalles_medicos_defuncion'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = 'detalles_medicos_defuncion'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}