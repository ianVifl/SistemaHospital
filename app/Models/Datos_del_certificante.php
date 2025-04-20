<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Datos_del_certificante extends Model
{
    protected $primaryKey = 'id_datos_del_certificante'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = 'datos_del_certificante'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}