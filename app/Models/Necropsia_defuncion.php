<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Necropsia_defuncion extends Model
{
    protected $primaryKey = 'id_necropsia_defuncion'; // ¡VERIFICA ESTE NOMBRE!
    protected $table = 'necropsia_defuncion'; // ¡VERIFICA ESTE NOMBRE!
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}