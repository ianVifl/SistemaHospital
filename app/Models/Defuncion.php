<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Defuncion extends Model
{
    protected $primaryKey = 'id_fallecido';
    protected $table = 'fallecido';
    public $timestamps = false;

    public function entidades(): HasOne
    {
        return $this->hasOne(Defuncion_entidades::class, 'id_fallecido', 'id_fallecido');
    }

    public function infoFallecido(): HasOne
    {
        return $this->hasOne(Defuncion_info_fallecido::class, 'id_fallecido', 'id_fallecido');
    }

    public function residencia(): HasOne
    {
        return $this->hasOne(Defuncion_residencia::class, 'id_fallecido', 'id_fallecido');
    }

    public function edad(): HasOne
    {
        return $this->hasOne(Defuncion_fallecido_edad::class, 'id_fallecido', 'id_fallecido');
    }

    // Nota: Usa el mismo nombre (singular) en el modelo y en la vista para "informante"
    public function informante(): HasOne
    {
        return $this->hasOne(Datos_Informante::class, 'id_fallecido', 'id_fallecido');
    }

    public function domicilioDefuncion(): HasOne
    {
        return $this->hasOne(Domicilio_defuncion::class, 'id_fallecido', 'id_fallecido');
    }

    public function detallesDefuncion(): HasOne
    {
        return $this->hasOne(Caracteriticas_defuncion::class, 'id_fallecido', 'id_fallecido');
    }

    public function causasDefuncion(): HasOne
    {
        return $this->hasOne(Causas_defuncion::class, 'id_fallecido', 'id_fallecido');
    }

    public function necropsiaDefuncion(): HasOne
    {
        return $this->hasOne(Necropsia_defuncion::class, 'id_fallecido', 'id_fallecido');
    }

    public function defuncionMujer(): HasOne
    {
        return $this->hasOne(Defuncion_corresponde_mujer::class, 'id_fallecido', 'id_fallecido');
    }

    public function detallesMedicos(): HasOne
    {
        return $this->hasOne(Detalles_medicos_defuncion::class, 'id_fallecido', 'id_fallecido');
    }

    public function domicilioLesion(): HasOne
    {
        return $this->hasOne(Domicilio_ocurrio_lesion::class, 'id_fallecido', 'id_fallecido');
    }

    public function datosCertificante(): HasOne
    {
        return $this->hasOne(Datos_del_certificante::class, 'id_fallecido', 'id_fallecido');
    }

    public function domicilioCertificante(): HasOne
    {
        return $this->hasOne(Domicilio_certificante::class, 'id_fallecido', 'id_fallecido');
    }

    public function datosRegistroCivil(): HasOne
    {
        return $this->hasOne(Datos_del_Registro_Civil::class, 'id_fallecido', 'id_fallecido');
    }
}
