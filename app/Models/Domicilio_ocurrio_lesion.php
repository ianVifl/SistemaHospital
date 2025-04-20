<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Domicilio_ocurrio_lesion extends Model
{
    protected $primaryKey = 'id_domicilio_lesion'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = 'domicilio_lesion'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}