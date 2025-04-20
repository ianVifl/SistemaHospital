<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Caracteriticas_defuncion extends Model
{
    protected $primaryKey = 'id_caracteristicas_defuncion'; // Asegúrate de que esta sea la clave primaria correcta
    protected $table = 'caracteristicas_defuncion';
    public $timestamps = false; // Si no tienes created_at y updated_at

    /**
     * Define the relationship with the Defuncion model.
     */
    public function defuncion(): BelongsTo
    {
        return $this->belongsTo(Defuncion::class, 'id_fallecido', 'id_fallecido');
    }
}