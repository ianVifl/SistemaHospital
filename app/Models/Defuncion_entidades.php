<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Defuncion_entidades extends Model
{
    protected $primaryKey = 'id_entidades'; 
    protected $table = '_entidades'; 
    public $timestamps = false;

    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}