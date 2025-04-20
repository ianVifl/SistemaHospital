<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Datos_del_Registro_Civil extends Model
{
    protected $primaryKey = 'id_registro_civil'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = '_datos_del__registro_civil'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}