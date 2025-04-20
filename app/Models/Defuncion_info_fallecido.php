<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Defuncion_info_fallecido extends Model
{
    protected $primaryKey = 'id_info_fallecido'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = 'info_fallecido'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}