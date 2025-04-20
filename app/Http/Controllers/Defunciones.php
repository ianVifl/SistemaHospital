<?php

namespace App\Http\Controllers;

use App\Models\Caracteriticas_defuncion;
use App\Models\Causas_defuncion;
use App\Models\Datos_del_certificante;
use App\Models\Datos_del_Registro_Civil;
use App\Models\Datos_Informante;
use App\Models\Defuncion;
use App\Models\Defuncion_corresponde_mujer;
use App\Models\Defuncion_datos_edad_cumplida;
use App\Models\Defuncion_entidades;
use App\Models\Defuncion_fallecido_edad;
use App\Models\Defuncion_info_fallecido;
use App\Models\Defuncion_residencia;
use App\Models\Detalles_medicos_defuncion;
use App\Models\Domicilio_certificante;
use App\Models\Domicilio_defuncion;
use App\Models\Domicilio_ocurrio_lesion;
use App\Models\Necropsia_defuncion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Defunciones extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo = 'Administrar Defunciones';
        $items = Defuncion::all();
        return view('modules.defunciones.index', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo = 'Crear categoria';
        return view ('modules.defunciones.create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Defuncion();
        //$item -> id_fallecido = Auth::user()->id;
        $item -> nombre_fallecido = $request->nombre_fallecido;//obtengo en nombre del campo y lo asigno al que conoce la bd
        $item -> apellido_paterno = $request->apellido_paterno;
        $item -> apellido_materno = $request->apellido_materno;
        $item -> fecha_nacimiento = $request->fecha_nacimiento;
        $item -> sexo = $request -> sexo;
        $item -> CURP = $request-> CURP;
        $item ->save();

    //============================RESIDENCIA======================================= 

        $id_fallecido = $item->id_fallecido;

        $item_entidades = new Defuncion_entidades();
        $item_entidades->id_fallecido = $id_fallecido;

        $item_entidades->entidad_nacimiento_=$request->entidad_nacimiento_;
        $item_entidades->afromexicano=$request->afromexicano;
        $item_entidades->indigena=$request->indigena;
        $item_entidades->save();

        //obtenemos llave foranea 
    //============================INFO FALLECIDO======================================= 

        $id_fallecido = $item->id_fallecido;

        $item_info_fallecido = new Defuncion_info_fallecido();
        $item_info_fallecido->id_fallecido=$id_fallecido;

        $item_info_fallecido->situacion_conyugal = $request->situacion_conyugal;
        $item_info_fallecido->escolaridad = $request->escolaridad;
        $item_info_fallecido->escolaridad_completa = $request->escolaridad_completa;
        $item_info_fallecido->trabajador = $request->trabajador;
        $item_info_fallecido->afiliacion_servicios_salud = $request->afiliacion_servicios_salud;
        $item_info_fallecido->numero_afiliacion_social = $request->numero_afiliacion_social;
        $item_info_fallecido->lengua_indigena = $request->lengua_indigena;
        $item_info_fallecido->nacionalidad= $request->nacionalidad;
        $item_info_fallecido->ocupacion_habitual = $request->ocupacion_habitual;
        $item_info_fallecido->save();

        //obtenemos llave foranea 
        $id_fallecido = $item->id_fallecido;


    //============================RESIDENCIA======================================= 
        $item_residencia = new Defuncion_residencia();
        $item_residencia ->id_fallecido = $id_fallecido;

        $item_residencia->localidad=$request->localidad;
        $item_residencia->municipio=$request->municipio;
        $item_residencia->codigo_postal= $request->codigo_postal;
        $item_residencia->calle= $request->calle;
        $item_residencia->numero_ext= $request->numero_ext;
        $item_residencia->numero_int= $request->numero_int;
        $item_residencia->tipo_asentamiento_humano= $request->tipo_asentamiento_humano;
        $item_residencia->nombre_asentamiento_humano= $request->nombre_asentamiento_humano;
        $item_residencia->pais = $request->pais;
        $item_residencia-> save();



     //==============================EDAD===============================
        $id_fallecido = $item->id_fallecido;

        $item_edad = new Defuncion_fallecido_edad();
        $item_edad->id_fallecido = $id_fallecido;

        $item_edad->folio_certificado_naci = $request ->folio_certificado_naci;
        $item_edad->peso_nacimiento= $request ->peso_nacimiento;
        $item_edad->semanas_gestacion = $request-> semanas_gestacion;
        $item_edad->save();

    //==============================DATOS EDAD===============================
        $id_edad_cumplida = $item-> id_edad_cumplida;

        $item_edad_cumplida = new Defuncion_datos_edad_cumplida();
        $item_edad_cumplida->id_edad_cumplida=$id_edad_cumplida; //llave foranea

        $item_edad_cumplida->minutos=$request->minutos;
        $item_edad_cumplida->horas = $request->horas;
        $item_edad_cumplida->dias=$request->dias;
        $item_edad_cumplida->meses= $request->meses;
        $item_edad_cumplida->años_cumplidos= $request ->años_cumplidos;
        $item_edad_cumplida->save();

    //==============================DATOS INFORMANTE===============================

        $id_fallecido = $item->id_fallecido;

        $item_informante = new Datos_Informante();
        $item_informante->id_fallecido = $id_fallecido;

        $item_informante->nombre_informante = $request->nombre_informante;
        $item_informante->primer_apellido_informante= $request->primer_apellido_informante;
        $item_informante->segundo_apellido_informante = $request->segundo_apellido_informante;
        $item_informante->parentesco_con_fallecido = $request->parentesco_con_fallecido;
        $item_informante->firma_informante = $request->firma_informante;
        $item_informante->sitio_defuncion = $request->sitio_defuncion;
        $item_informante->nombre_unidad_medica = $request->nombre_unidad_medica;
        $item_informante->clave_establecimientos_salud = $request->clave_establecimientos_salud;
        $item_informante->save();



    //==================================DOMICILIO DEFUNCION==================================
        $id_fallecido = $item->id_fallecido; // Obtenemos el ID del fallecido

        $item_domicilio = new Domicilio_defuncion();
        $item_domicilio->id_fallecido = $id_fallecido;
        
        $item_domicilio->tipo_vialidad_lugar_defuncion = $request->tipo_vialidad_lugar_defuncion;
        $item_domicilio->nombre_vialidad_lugar_defuncion = $request->nombre_vialidad_lugar_defuncion;
        $item_domicilio->num_exterior_lugar_defuncion = $request->num_exterior_lugar_defuncion;
        $item_domicilio->num_interior_lugar_defuncion = $request->num_interior_lugar_defuncion;
        $item_domicilio->asentamiento_humano_lugar_defuncion = $request->asentamiento_humano_lugar_defuncion;
        $item_domicilio->nombre_asentamiento_lugar_defuncion = $request->nombre_asentamiento_lugar_defuncion;
        $item_domicilio->codigoPostal_lugar_defuncion = $request->codigoPostal_lugar_defuncion;
        $item_domicilio->lugar_defuncion_localidad = $request->lugar_defuncion_localidad;
        $item_domicilio->lugar_defuncion_municipio = $request->lugar_defuncion_municipio;
        $item_domicilio->entidadFederativa_lugar_defuncion = $request->entidadFederativa_lugar_defuncion;
        $item_domicilio->save();


    //========================CARACTERISTICAS DEFUNCION========================
        $id_fallecido = $item->id_fallecido;

        $item_detalles = new Caracteriticas_defuncion();
        $item_detalles->id_fallecido = $id_fallecido;

        $item_detalles->fecha_defuncion = $request->fecha_defuncion;
        $item_detalles->hora_defuncion = $request->hora_defuncion;
        $item_detalles->atencionMedica_antes_fallecer = $request->atencionMedica_antes_fallecer;
        $item_detalles->cirugia_reciente = $request->cirugia_reciente;
        $item_detalles->fecha_cirugia = $request->fecha_cirugia;
        $item_detalles->motivo_cirugia = $request->motivo_cirugia;
        $item_detalles->defuncion_violenta = $request->defuncion_violenta;
        $item_detalles->tipo_defuncion = $request->tipo_defuncion;
        $item_detalles->save();


    //=====================CAUSAS DE LA DEFUNCION=======================
        $id_fallecido = $item->id_fallecido;

        $item_causas_defuncion= new Causas_defuncion();
        $item_causas_defuncion->id_fallecido = $id_fallecido;

        $item_causas_defuncion->causa_a = $request->causa_a;
        $item_causas_defuncion->intervalo_a = $request->intervalo_a;
        $item_causas_defuncion->cadena_afectaciones = $request->otras_condiciones;
        $item_causas_defuncion->otras_condiciones = $request->otras_condiciones;
        $item_causas_defuncion->codigo_cie = $request->codigo_cie;
        $item_causas_defuncion->save();



    //==========================NECROPSIA=======================
        $id_fallecido = $item->id_fallecido;

        $item_necropsia = new Necropsia_defuncion();
        $item_necropsia->id_fallecido = $id_fallecido;

        $item_necropsia->necropsia = $request->necropsia;
        $item_necropsia->hallazgos_necropsia = $request->hallazgos_necropsia;
        $item_necropsia->save();

    //=====================DEFUNCION CORRESPONDE MUJER=======================
        $id_fallecido = $item->id_fallecido;

        $item_defuncionCorresponde_mujer = new Defuncion_corresponde_mujer();
        $item_defuncionCorresponde_mujer->id_fallecido = $id_fallecido;

        $item_defuncionCorresponde_mujer->muerte_embarazo = $request->muerte_embarazo;
        $item_defuncionCorresponde_mujer->causas_embarazo = $request->causas_embarazo;
        $item_defuncionCorresponde_mujer->complicaciones_embarazo = $request->complicaciones_embarazo;

        $item_defuncionCorresponde_mujer->save();

    //=======================DETALLES MEDICOS DE LA DEFUNCION================
        $id_fallecido = $item->id_fallecido;

        $item_medicos = new Detalles_medicos_defuncion();
        $item_medicos->id_fallecido = $id_fallecido;

        $item_medicos->muerte_encefalica = $request->muerte_encefalica;
        $item_medicos->donacion_organos = $request->donacion_organos;
        $item_medicos->causa_basica = $request->causa_basica;
        $item_medicos->codigo_adicional = $request->codigo_adicional;
        $item_medicos->desempeno_trabajo = $request->desempeno_trabajo;
        $item_medicos->lugar_lesion = $request->lugar_lesion;
        $item_medicos->acta_ministerio = $request->acta_ministerio;
        $item_medicos->relacion_agresor = $request->relacion_agresor;
        $item_medicos->descripcion_lesion = $request->descripcion_lesion;
        $item_medicos->save();


    //=====================DOMICILIO DONDE OCURRIO LA LESION=================
        $id_fallecido = $item->id_fallecido;

        $item_domicilio_lesion = new Domicilio_ocurrio_lesion();
        $item_domicilio_lesion->id_fallecido = $id_fallecido;

        $item_domicilio_lesion->tipo_vialidad_donde_ocurrio = $request->tipo_vialidad_donde_ocurrio;
        $item_domicilio_lesion->nombre_vialidad = $request->nombre_vialidad;
        $item_domicilio_lesion->num_ext = $request->num_ext;
        $item_domicilio_lesion->num_int = $request->num_int;
        $item_domicilio_lesion->tipo_asentamiento = $request->tipo_asentamiento;
        $item_domicilio_lesion->nombre_asentamiento = $request->nombre_asentamiento;
        $item_domicilio_lesion->ocurrio_lesion_codigo_postal = $request->ocurrio_lesion_codigo_postal;
        $item_domicilio_lesion->ocurrio_lesion_localidad = $request->ocurrio_lesion_localidad;
        $item_domicilio_lesion->ocurrio_lesion_municipio = $request->ocurrio_lesion_municipio;
        $item_domicilio_lesion->entidad_federativa = $request->entidad_federativa;
        $item_domicilio_lesion->save();


    //=====================================DATOS DEL CERTIFICANTE===========================================
        $id_fallecido = $item->id_fallecido;

        $item_certificacion = new Datos_del_certificante();
        $item_certificacion->id_fallecido = $id_fallecido;
        
        $item_certificacion->certificada_por = $request->certificada_por;
        $item_certificacion->otro_certificada_por = $request->otro_certificada_por;
        $item_certificacion->nombre_certificante = $request->nombre_certificante;
        $item_certificacion->apellidoPaterno_certificante = $request->apellidoPaterno_certificante;
        $item_certificacion->apellidoMaterno_certificante = $request->apellidoMaterno_certificante;
        $item_certificacion->certificante_sies_medico = $request->certificante_sies_medico;
        $item_certificacion->firma_certificante = $request->firma_certificante;

        $item_certificacion->save();

    //===========================DOMICILIO Y TELEFONO DEL CERTIFICANTE===========================

        $id_fallecido = $item->id_fallecido;

        $item_domicilio_cert = new Domicilio_certificante();
        $item_domicilio_cert->id_fallecido = $id_fallecido;

        $item_domicilio_cert->tipo_vialidad_41 = $request->tipo_vialidad_41;
        $item_domicilio_cert->nombre_vialidad_41 = $request->nombre_vialidad_41;
        $item_domicilio_cert->num_ext_41 = $request->num_ext_41;
        $item_domicilio_cert->num_int_41 = $request->num_int_41;
        $item_domicilio_cert->tipo_asentamiento_41 = $request->tipo_asentamiento_41;
        $item_domicilio_cert->nombre_asentamiento_41 = $request->nombre_asentamiento_41;
        $item_domicilio_cert->certificante_codigo_postal = $request->certificante_codigo_postal;
        $item_domicilio_cert->certificante_localidad = $request->certificante_localidad;
        $item_domicilio_cert->certificante_municipio = $request->certificante_municipio;
        $item_domicilio_cert->entidad_federativa_41 = $request->entidad_federativa_41;
        $item_domicilio_cert->telefono_41 = $request->telefono_41;
        $item_domicilio_cert->fecha_certificacion = $request->fecha_certificacion;

        $item_domicilio_cert->save();

    //=======================DATOS REGISTRO CIVIL==================================
        $id_fallecido = $item->id_fallecido;

        $item_registro = new Datos_del_Registro_Civil();
        $item_registro->id_fallecido = $id_fallecido;

        $item_registro->numero_registro = $request->numero_registro;
        $item_registro->numero_libro = $request->numero_libro;
        $item_registro->numero_acta = $request->numero_acta;
        $item_registro->registro_localidad = $request->registro_localidad;
        $item_registro->registro_municipio = $request->registro_municipio;
        $item_registro->entidad_registro = $request->entidad_registro;
        $item_registro->fecha_de_registro = $request->fecha_de_registro;

        $item_registro->save();



        return to_route('defuncion-registro');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_fallecido)
    {
        $titulo= 'Eliminar registro';
        $item = Defuncion::find ($id_fallecido);
        return view('modules.defunciones.show', compact('item','titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_fallecido)
    {
        $titulo= "Editar Defuncion";
        $item = Defuncion::find($id_fallecido);
        return view('modules.defunciones.edit',compact('item','titulo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_fallecido)
    {
        $item = Defuncion::find($id_fallecido);
            $item->nombre_fallecido = $request->nombre_fallecido ?? $item->nombre_fallecido;
            $item->apellido_paterno = $request->apellido_paterno ?? $item->apellido_paterno;
            $item->apellido_materno = $request->apellido_materno ?? $item->apellido_materno;
            $item->fecha_nacimiento = $request->fecha_nacimiento ?? $item->fecha_nacimiento;
            $item->sexo = $request->sexo ?? $item->sexo;
            $item->CURP = $request->CURP ?? $item->CURP;
            $item->save();

        $item_entidades = Defuncion_entidades::where('id_fallecido', $id_fallecido)->first();
            if ($item_entidades) {
                // Actualizar datos en la tabla Defuncion_entidades
                $item_entidades->entidad_nacimiento_ = $request->entidad_nacimiento_ ?? $item_entidades->entidad_nacimiento_;
                $item_entidades->afromexicano = $request->afromexicano ?? $item_entidades->afromexicano;
                $item_entidades->indigena = $request->indigena ?? $item_entidades->indigena;
                $item_entidades->save();
            }

       $item_info_fallecido = Defuncion_info_fallecido::where('id_fallecido', $id_fallecido)->first();
            if ($item_info_fallecido) {
            $item_info_fallecido->situacion_conyugal = $request->situacion_conyugal ?? $item_info_fallecido->situacion_conyugal;
            $item_info_fallecido->escolaridad = $request->escolaridad ?? $item_info_fallecido->escolaridad;
            $item_info_fallecido->escolaridad_completa = $request->escolaridad_completa ?? $item_info_fallecido->escolaridad_completa;
            $item_info_fallecido->trabajador = $request->trabajador ?? $item_info_fallecido->trabajador;
            $item_info_fallecido->afiliacion_servicios_salud = $request->afiliacion_servicios_salud ?? $item_info_fallecido->afiliacion_servicios_salud;
            $item_info_fallecido->numero_afiliacion_social = $request->numero_afiliacion_social ?? $item_info_fallecido->numero_afiliacion_social;
            $item_info_fallecido->lengua_indigena = $request->lengua_indigena ?? $item_info_fallecido->lengua_indigena;
            $item_info_fallecido->nacionalidad = $request->nacionalidad ?? $item_info_fallecido->nacionalidad;
            $item_info_fallecido->ocupacion_habitual = $request->ocupacion_habitual ?? $item_info_fallecido->ocupacion_habitual;
            $item_info_fallecido->save();
            }
            
        $item_residencia = Defuncion_residencia::where('id_fallecido', $id_fallecido)->first();
            if ($item_residencia) {
            $item_residencia->localidad = $request->localidad ?? $item_residencia->localidad;
            $item_residencia->municipio = $request->municipio ?? $item_residencia->municipio;
            $item_residencia->codigo_postal = $request->codigo_postal ?? $item_residencia->codigo_postal;
            $item_residencia->calle = $request->calle ?? $item_residencia->calle;
            $item_residencia->numero_ext = $request->numero_ext ?? $item_residencia->numero_ext;
            $item_residencia->numero_int = $request->numero_int ?? $item_residencia->numero_int;
            $item_residencia->tipo_asentamiento_humano = $request->tipo_asentamiento_humano ?? $item_residencia->tipo_asentamiento_humano;
            $item_residencia->nombre_asentamiento_humano = $request->nombre_asentamiento_humano ?? $item_residencia->nombre_asentamiento_humano;
            $item_residencia->pais = $request->pais ?? $item_residencia->pais;
            $item_residencia->save();
            }

        $item_edad = Defuncion_fallecido_edad::where('id_fallecido', $id_fallecido)->first();
            if ($item_edad) {
                $item_edad->folio_certificado_naci = $request->folio_certificado_naci ?? $item_edad->folio_certificado_naci;
                $item_edad->peso_nacimiento = $request->peso_nacimiento ?? $item_edad->peso_nacimiento;
                $item_edad->semanas_gestacion = $request->semanas_gestacion ?? $item_edad->semanas_gestacion;
                $item_edad->save();
            }

        $item_edad_cumplida = Defuncion_datos_edad_cumplida::where('id_edad_cumplida')->first();
            if ($item_edad_cumplida) {
                $item_edad_cumplida->minutos = $request->minutos ?? $item_edad_cumplida->minutos;
                $item_edad_cumplida->horas = $request->horas ?? $item_edad_cumplida->horas;
                $item_edad_cumplida->dias = $request->dias ?? $item_edad_cumplida->dias;
                $item_edad_cumplida->meses = $request->meses ?? $item_edad_cumplida->meses;
                $item_edad_cumplida->años_cumplidos = $request->años_cumplidos ?? $item_edad_cumplida->años_cumplidos;
                $item_edad_cumplida->save();
            }

        $item_informante = Datos_Informante::where('id_fallecido', $id_fallecido)->first();
            if ($item_informante) {
                $item_informante->nombre_informante=$request->nombre_informante??$item_informante->nombre_informante;
                $item_informante->primer_apellido_informante=$request->primer_apellido_informante ??$item_informante->primer_apellido_informante;
                $item_informante->segundo_apellido_informante=$request->segundo_apellido_informante??$item_informante->segundo_apellido_informante;
                $item_informante->parentesco_con_fallecido=$request->parentesco_con_fallecido??$item_informante->parentesco_con_fallecido;
                $item_informante->firma_informante=$request->firma_informante??$item_informante->firma_informante;
                $item_informante->sitio_defuncion=$request->sitio_defuncion??$item_informante->sitio_defuncion;
                $item_informante->nombre_unidad_medica=$request->nombre_unidad_medica??$item_informante->nombre_unidad_medica;
                $item_informante->clave_establecimientos_salud=$request->clave_establecimientos_salud??$item_informante->clave_establecimientos_salud;
                $item_informante->save();
            } 


        $item_domicilio = Domicilio_defuncion::where('id_fallecido', $id_fallecido)->first();
            if ($item_domicilio) {
                $item_domicilio->tipo_vialidad_lugar_defuncion = $request->tipo_vialidad_lugar_defuncion ?? $item_domicilio->tipo_vialidad_lugar_defuncion;
                $item_domicilio->nombre_vialidad_lugar_defuncion = $request->nombre_vialidad_lugar_defuncion ?? $item_domicilio->nombre_vialidad_lugar_defuncion;
                $item_domicilio->num_exterior_lugar_defuncion = $request->num_exterior_lugar_defuncion ?? $item_domicilio->num_exterior_lugar_defuncion;
                $item_domicilio->num_interior_lugar_defuncion = $request->num_interior_lugar_defuncion ?? $item_domicilio->num_interior_lugar_defuncion;
                $item_domicilio->asentamiento_humano_lugar_defuncion = $request->asentamiento_humano_lugar_defuncion ?? $item_domicilio->asentamiento_humano_lugar_defuncion;
                $item_domicilio->nombre_asentamiento_lugar_defuncion = $request->nombre_asentamiento_lugar_defuncion ?? $item_domicilio->nombre_asentamiento_lugar_defuncion;
                $item_domicilio->codigoPostal_lugar_defuncion = $request->codigoPostal_lugar_defuncion ?? $item_domicilio->codigoPostal_lugar_defuncion;
                $item_domicilio->lugar_defuncion_localidad = $request->lugar_defuncion_localidad ?? $item_domicilio->lugar_defuncion_localidad;
                $item_domicilio->lugar_defuncion_municipio = $request->lugar_defuncion_municipio ?? $item_domicilio->lugar_defuncion_municipio;
                $item_domicilio->entidadFederativa_lugar_defuncion = $request->entidadFederativa_lugar_defuncion ?? $item_domicilio->entidadFederativa_lugar_defuncion;
                $item_domicilio->save();
            }

        $item_detalles = Caracteriticas_defuncion::where('id_fallecido', $id_fallecido)->first();
            if ($item_detalles) {
                $item_detalles->fecha_defuncion = $request->fecha_defuncion ?? $item_detalles->fecha_defuncion;
                $item_detalles->hora_defuncion = $request->hora_defuncion ?? $item_detalles->hora_defuncion;
                $item_detalles->atencionMedica_antes_fallecer = $request->atencionMedica_antes_fallecer ?? $item_detalles->atencionMedica_antes_fallecer;
                $item_detalles->cirugia_reciente = $request->cirugia_reciente ?? $item_detalles->cirugia_reciente;
                $item_detalles->fecha_cirugia = $request->fecha_cirugia ?? $item_detalles->fecha_cirugia;
                $item_detalles->motivo_cirugia = $request->motivo_cirugia ?? $item_detalles->motivo_cirugia;
                $item_detalles->defuncion_violenta = $request->defuncion_violenta ?? $item_detalles->defuncion_violenta;
                $item_detalles->tipo_defuncion = $request->tipo_defuncion ?? $item_detalles->tipo_defuncion;
                $item_detalles->save();
            }

        $item_causas_defuncion = Causas_defuncion::where('id_fallecido', $id_fallecido)->first();
            if ($item_causas_defuncion) {
                $item_causas_defuncion->causa_a = $request->causa_a ?? $item_causas_defuncion->causa_a;
                $item_causas_defuncion->intervalo_a = $request->intervalo_a ?? $item_causas_defuncion->intervalo_a;
                $item_causas_defuncion->cadena_afectaciones = $request->cadena_afectaciones ?? $item_causas_defuncion->cadena_afectaciones;
                $item_causas_defuncion->otras_condiciones = $request->otras_condiciones ?? $item_causas_defuncion->otras_condiciones;
                $item_causas_defuncion->codigo_cie = $request->codigo_cie ?? $item_causas_defuncion->codigo_cie;
                $item_causas_defuncion->save();
            }

         $item_necropsia = Necropsia_defuncion::where('id_fallecido', $id_fallecido)->first();
            if ($item_necropsia) {
                $item_necropsia->necropsia = $request->necropsia ?? $item_necropsia->necropsia;
                $item_necropsia->hallazgos_necropsia = $request->hallazgos_necropsia ?? $item_necropsia->hallazgos_necropsia;
                $item_necropsia->save();
            }

        $item_defuncionCorresponde_mujer = Defuncion_corresponde_mujer::where('id_fallecido', $id_fallecido)->first();
            if ($item_defuncionCorresponde_mujer) {
                $item_defuncionCorresponde_mujer->muerte_embarazo = $request->muerte_embarazo ?? $item_defuncionCorresponde_mujer->muerte_embarazo;
                $item_defuncionCorresponde_mujer->causas_embarazo = $request->causas_embarazo ?? $item_defuncionCorresponde_mujer->causas_embarazo;
                $item_defuncionCorresponde_mujer->complicaciones_embarazo = $request->complicaciones_embarazo ?? $item_defuncionCorresponde_mujer->complicaciones_embarazo;
                $item_defuncionCorresponde_mujer->save();
            }
        $item_medicos = Detalles_medicos_defuncion::where('id_fallecido', $id_fallecido)->first();
            if ($item_medicos) {
                $item_medicos->muerte_encefalica = $request->muerte_encefalica ?? $item_medicos->muerte_encefalica;
                $item_medicos->donacion_organos = $request->donacion_organos ?? $item_medicos->donacion_organos;
                $item_medicos->causa_basica = $request->causa_basica ?? $item_medicos->causa_basica;
                $item_medicos->codigo_adicional = $request->codigo_adicional ?? $item_medicos->codigo_adicional;
                $item_medicos->desempeno_trabajo = $request->desempeno_trabajo ?? $item_medicos->desempeno_trabajo;
                $item_medicos->lugar_lesion = $request->lugar_lesion ?? $item_medicos->lugar_lesion;
                $item_medicos->acta_ministerio = $request->acta_ministerio ?? $item_medicos->acta_ministerio;
                $item_medicos->relacion_agresor = $request->relacion_agresor ?? $item_medicos->relacion_agresor;
                $item_medicos->descripcion_lesion = $request->descripcion_lesion ?? $item_medicos->descripcion_lesion;
                $item_medicos->save();
            }

        $item_domicilio_lesion = Domicilio_ocurrio_lesion::where('id_fallecido', $id_fallecido)->first();
            if ($item_domicilio_lesion) {
                $item_domicilio_lesion->tipo_vialidad_donde_ocurrio = $request->tipo_vialidad_donde_ocurrio ?? $item_domicilio_lesion->tipo_vialidad_donde_ocurrio;
                $item_domicilio_lesion->nombre_vialidad = $request->nombre_vialidad ?? $item_domicilio_lesion->nombre_vialidad;
                $item_domicilio_lesion->num_ext = $request->num_ext ?? $item_domicilio_lesion->num_ext;
                $item_domicilio_lesion->num_int = $request->num_int ?? $item_domicilio_lesion->num_int;
                $item_domicilio_lesion->tipo_asentamiento = $request->tipo_asentamiento ?? $item_domicilio_lesion->tipo_asentamiento;
                $item_domicilio_lesion->nombre_asentamiento = $request->nombre_asentamiento ?? $item_domicilio_lesion->nombre_asentamiento;
                $item_domicilio_lesion->ocurrio_lesion_codigo_postal = $request->ocurrio_lesion_codigo_postal ?? $item_domicilio_lesion->ocurrio_lesion_codigo_postal;
                $item_domicilio_lesion->ocurrio_lesion_localidad = $request->ocurrio_lesion_localidad ?? $item_domicilio_lesion->ocurrio_lesion_localidad;
                $item_domicilio_lesion->ocurrio_lesion_municipio = $request->ocurrio_lesion_municipio ?? $item_domicilio_lesion->ocurrio_lesion_municipio;
                $item_domicilio_lesion->entidad_federativa = $request->entidad_federativa ?? $item_domicilio_lesion->entidad_federativa;
                $item_domicilio_lesion->save();
            }
        $item_certificacion = Datos_del_certificante::where('id_fallecido', $id_fallecido)->first();
            if ($item_certificacion) {
                $item_certificacion->certificada_por = $request->certificada_por ?? $item_certificacion->certificada_por;
                $item_certificacion->otro_certificada_por = $request->otro_certificada_por ?? $item_certificacion->otro_certificada_por;
                $item_certificacion->nombre_certificante = $request->nombre_certificante ?? $item_certificacion->nombre_certificante;
                $item_certificacion->apellidoPaterno_certificante = $request->apellidoPaterno_certificante ?? $item_certificacion->apellidoPaterno_certificante;
                $item_certificacion->apellidoMaterno_certificante = $request->apellidoMaterno_certificante ?? $item_certificacion->apellidoMaterno_certificante;
                $item_certificacion->certificante_sies_medico = $request->certificante_sies_medico ?? $item_certificacion->certificante_sies_medico;
                $item_certificacion->firma_certificante = $request->firma_certificante ?? $item_certificacion->firma_certificante;
                $item_certificacion->save();
            }

        $item_domicilio_cert = Domicilio_certificante::where('id_fallecido', $id_fallecido)->first();
            if ($item_domicilio_cert) {
                $item_domicilio_cert->tipo_vialidad_41 = $request->tipo_vialidad_41 ?? $item_domicilio_cert->tipo_vialidad_41;
                $item_domicilio_cert->nombre_vialidad_41 = $request->nombre_vialidad_41 ?? $item_domicilio_cert->nombre_vialidad_41;
                $item_domicilio_cert->num_ext_41 = $request->num_ext_41 ?? $item_domicilio_cert->num_ext_41;
                $item_domicilio_cert->num_int_41 = $request->num_int_41 ?? $item_domicilio_cert->num_int_41;
                $item_domicilio_cert->tipo_asentamiento_41 = $request->tipo_asentamiento_41 ?? $item_domicilio_cert->tipo_asentamiento_41;
                $item_domicilio_cert->nombre_asentamiento_41 = $request->nombre_asentamiento_41 ?? $item_domicilio_cert->nombre_asentamiento_41;
                $item_domicilio_cert->certificante_codigo_postal = $request->certificante_codigo_postal ?? $item_domicilio_cert->certificante_codigo_postal;
                $item_domicilio_cert->certificante_localidad = $request->certificante_localidad ?? $item_domicilio_cert->certificante_localidad;
                $item_domicilio_cert->certificante_municipio = $request->certificante_municipio ?? $item_domicilio_cert->certificante_municipio;
                $item_domicilio_cert->entidad_federativa_41 = $request->entidad_federativa_41 ?? $item_domicilio_cert->entidad_federativa_41;
                $item_domicilio_cert->telefono_41 = $request->telefono_41 ?? $item_domicilio_cert->telefono_41;
                $item_domicilio_cert->fecha_certificacion = $request->fecha_certificacion ?? $item_domicilio_cert->fecha_certificacion;
                $item_domicilio_cert->save();
            }

        $item_registro = Datos_del_Registro_Civil::where('id_fallecido', $id_fallecido)->first();
            if ($item_registro) {
                $item_registro->numero_registro = $request->numero_registro ?? $item_registro->numero_registro;
                $item_registro->numero_libro = $request->numero_libro ?? $item_registro->numero_libro;
                $item_registro->numero_acta = $request->numero_acta ?? $item_registro->numero_acta;
                $item_registro->registro_localidad = $request->registro_localidad ?? $item_registro->registro_localidad;
                $item_registro->registro_municipio = $request->registro_municipio ?? $item_registro->registro_municipio;
                $item_registro->entidad_registro = $request->entidad_registro ?? $item_registro->entidad_registro;
                $item_registro->fecha_de_registro = $request->fecha_de_registro ?? $item_registro->fecha_de_registro;
                $item_registro->save();
            }


        return to_route('defuncion-registro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_fallecido)
    {
        $item = Defuncion::find($id_fallecido);
        $item->delete();
        return to_route('defuncion-registro');
    }
}
