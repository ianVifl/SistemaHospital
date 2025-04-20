<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Defuncion_corresponde_mujer extends Model
{
    protected $primaryKey = 'id_defuncion_corresponde_mujer'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = 'defuncion_corresponde_mujer'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}