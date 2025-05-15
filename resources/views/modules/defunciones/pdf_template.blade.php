<!DOCTYPE html>
<html>
    <head>
        <title>Documento PDF</title>
        <style>
            body { font-family: Arial, sans-serif; }
            h1 { text-align: center; }
            .info { margin: 20px; }
            .section-title { margin-top: 20px; border-bottom: 1px solid #ccc; padding-bottom: 5px; }
            .data-row { margin-bottom: 8px; }
            .label { font-weight: bold; margin-right: 10px; }
        </style>
    </head>
    <body>

        <div style="font-family: 'Arial', sans-serif; max-width: 800px; margin: 0 auto; border: 1px solid #e1e1e1; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 25px;">

            
            <div style="border-bottom: 2px solid #2c3e50; padding-bottom: 15px; margin-bottom: 25px;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <h1 style="color: #2c3e50; margin: 0; font-size: 24px;">Certificado de Defunción</h1>
                        <h2 style="color: #7f8c8d; margin:  0; font-size: 14px;">Documento oficial - Registro Civil del Estado de Morelos</h2>
                    </div>
                </div>
            </div>
            
        <div class="info">
            <h2>Información del Fallecido</h2>
            <p>1.-Nombre: {{ $fallecido->nombre_fallecido ?? 'N/D' }}</p>
            <p>Apellido Paterno: {{ $fallecido->apellido_paterno ?? 'N/D' }}</p>
            <p>Apellido Materno: {{ $fallecido->apellido_materno ?? 'N/D' }}</p>
            <p>2.-Fecha de Nacimiento: {{ $fallecido->fecha_nacimiento ?? 'N/D' }}</p>
            <p>3.-Entidad de Nacimiento: {{ $fallecido->entidades->entidad_nacimiento_ ?? 'N/D' }}</p>
            <p>4.-Sexo: {{ $fallecido->sexo ?? 'N/D' }}</p>
            <p>5.-CURP: {{ $fallecido->CURP ?? 'N/D' }}</p>
        </div>
        <!--/////////////////////////////////////Origen Etnico////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Origen Étnico</h2>
            <div class="info">
                <p>6.-Se considera Afromexicano: {{ isset($fallecido->entidades->afromexicano) ? ($fallecido->afromexicano ? 'Sí' : 'No') : 'N/D' }}</p>
                <p>7.-Se considera como Indígena: {{ isset($fallecido->entidades->indigena) ? ($fallecido->indigena ? 'Sí' : 'No') : 'N/D' }}</p>
                <p>8.-Habla lengua Indigena :{{$fallecido->infoFallecido->lengua_indigena ?? 'N/D'}}</p>
                <p>9.-Nacionalidad: {{$fallecido->infoFallecido->nacionalidad ?? 'N/D'}}</p>
            </div>
        </div>

        <!--/////////////////////////////////////Datos edad cumplida ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">10.-Datos de Edad Cumplida</h2>
            <div class="info">
                <p>Años Cumplidos: {{ $fallecido->edad->edadCumplidaDetalle->años_cumplidos ?? '20' }}</p>
                <p>Meses: {{ $fallecido->edad->meses ?? 'N/D' }}</p>
                <p>Días: {{ $fallecido->edad->edadCumplidaDetalle->dias ?? 'N/D' }}</p>
                <p>Horas: {{ $fallecido->edad->edadCumplidaDetalle->horas ?? 'N/D' }}</p>
                <p>Minutos: {{ $fallecido->edad->edadCumplidaDetalle->minutos ?? 'N/D' }}</p>
            </div>
        </div>
        <!--/////////////////////////////////////Edad al Fallecer ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Edad al Fallecer</h2>
            <div class="info">
                <p>Folio Certificado Nacimiento: {{ $fallecido->edad->folio_certificado_naci ?? 'N/D' }}</p>
                <p>Peso al Nacimiento: {{ $fallecido->edad->peso_nacimiento ?? 'N/D' }}</p>
                <p>Semanas de Gestación: {{ $fallecido->edad->semanas_gestacion ?? 'N/D' }}</p>
            </div>
        </div>
        <div class="row">
            <h2 class="section-title">11.-Situación Conyugal</h2>
            <div class="info">
                <p>Estado Civil: {{ $fallecido->infoFallecido->situacion_conyugal ?? 'N/D'}}</p>
            </div>
        </div>
        <!--/////////////////////////////////////Residencia ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">12.-Residencia Habitual</h2>
            <div class="info">
                <p>Localidad: {{ $fallecido->residencia->localidad ?? 'N/D' }}</p>
                <p>Municipio: {{ $fallecido->residencia->municipio ?? 'N/D' }}</p>
                <p>Código Postal: {{ $fallecido->residencia->codigo_postal ?? 'N/D' }}</p>
                <p>Calle: {{ $fallecido->residencia->calle ?? 'N/D' }}</p>
                <p>Número Exterior: {{ $fallecido->residencia->numero_ext ?? 'N/D' }}</p>
                <p>Número Interior: {{ $fallecido->residencia->numero_int ?? 'N/D' }}</p>
                <p>Tipo de Asentamiento Humano: {{ $fallecido->residencia->tipo_asentamiento_humano ?? 'N/D' }}</p>
                <p>Nombre de Asentamiento Humano: {{ $fallecido->residencia->nombre_asentamiento_humano ?? 'N/D' }}</p>
                <p>País: {{ $fallecido->residencia->pais ?? 'N/D' }}</p>
            </div>
        </div>
        <!--///////////////////////////////////////Escolaridad //////////////////////////////////////////////-->

        <div class="row">
            <h2 class="section-title">Escolaridad</h2>
            <div class="info">
                    <p>13.-Escolaridad {{ $fallecido->infoFallecido->escolaridad ?? 'N/D' }}</p>
                    <p>13.1.-Escolaridad Completa :{{$fallecido->infoFallecido->escolaridad_completa ?? 'N/D'}}</p>
                    <p>¿Trabaja? {{$fallecido->infoFallecido->trabajador ?? 'N/D'}}</p>
                    <p>14.-Ocupación Habitual: {{$fallecido->infoFallecido->ocupacion_habitual ?? 'N/D'}}</p>
                    <p>15.-Afiliación a Servicios de Salud: {{$fallecido->infoFallecido->afiliacion_servicios_salud ?? 'N/D'}}</p>
                    <p>15.1.-Numero de Afiliación: {{$fallecido->infoFallecido->numero_afiliacion_social ?? 'N/D'}}</p>
            </div>
        </div>
        <!--/////////////////////////////////////Datos del informante ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Datos del Informante</h2>
            <div class="info">
                    <p>16.-Nombre del Informante: {{ $fallecido->informante->nombre_informante ?? 'N/d' }}</p>
                    <p>Primer Apellido: {{ $fallecido->informante->primer_apellido_informante ?? 'N/D' }}</p>
                    <p>Segundo Apellido: {{ $fallecido->informante->segundo_apellido_informante ?? 'N/D' }}</p>
                    <p>17.-Parentesco con el Fallecido: {{ $fallecido->informante->parentesco_con_fallecido ?? 'N/D' }}</p>
                    <p>18.-Firma Informante: {{$fallecido->informante->firma_informante ?? 'N/D'}}</p>
                    <p>19.- Sitio donde Ocurrio la defuncion: {{$fallecido->informante->sitio_defuncion ?? 'N/D'}}</p>
                    <p>19.1.-Nombre de la Unidad Medica: {{$fallecido->informante->nombre_unidad_medica ?? 'N/D'}}</p>
                    <p>19.2.- Clave de Establecimientos de Salud :<{{$fallecido->informante->clave_establecimientos_salud ?? 'N/D'}}/p>
            </div>
        </div>
        <!--/////////////////////////////////////Domicilio de Defuncion ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">20.-Domicilio de Defunción</h2>
            <div class="info">
                    <p>20.1.-Tipo de Vialidad: {{ $fallecido->domicilioDefuncion->tipo_vialidad_lugar_defuncion ?? 'N/D' }}</p>
                    <p>10.2.-Nombre de Vialidad: {{ $fallecido->domicilioDefuncion->nombre_vialidad_lugar_defuncion ?? 'N/D' }}</p>
                    <p>20.3.-Número Exterior: {{ $fallecido->domicilioDefuncion->num_exterior_lugar_defuncion ?? 'N/D' }}</p>
                    <p>20.4.-Número Interior: {{ $fallecido->domicilioDefuncion->num_interior_lugar_defuncion ?? 'N/D' }}</p>
                    <p>20.5.-Asentamiento Humano: {{ $fallecido->domicilioDefuncion->asentamiento_humano_lugar_defuncion ?? 'N/D' }}</p>
                    <p>20.6.-Nombre del Asentamiento: {{ $fallecido->domicilioDefuncion->nombre_asentamiento_lugar_defuncion ?? 'N/D' }}</p>
                    <p>20.7.-Código Postal: {{ $fallecido->domicilioDefuncion->codigoPostal_lugar_defuncion ?? 'N/D' }}</p>
                    <p>20.8.-Localidad: {{ $fallecido->domicilioDefuncion->lugar_defuncion_localidad ?? 'N/D' }}</p>
                    <p>20.9.-Municipio: {{ $fallecido->domicilioDefuncion->lugar_defuncion_municipio ?? 'N/D' }}</p>
                    <p>20.10.-Entidad Federativa: {{ $fallecido->domicilioDefuncion->entidadFederativa_lugar_defuncion ?? 'N/D' }}</p>
            </div>
        </div>

        <!--/////////////////////////////////////Detalles de la defuncion ////////////////////////////////////////////////// -->
            <h2 class="section-title">Detalles de la Defunción</h2>
            @if ($fallecido->detallesDefuncion)
            <table class="table table-bordered">
                <tbody>
                    <tr><th>21.-Fecha de Defunción</th><td>{{ $fallecido->detallesDefuncion->fecha_defuncion }}</td></tr>
                    <tr><th>Hora de Defunción</th><td>{{ $fallecido->detallesDefuncion->hora_defuncion }}</td></tr>
                    <tr><th>22.-Atención Médica Antes de Fallecer</th><td>{{ $fallecido->atencionMedica_antes_fallecer ? 'Sí' : 'No' }}</td></tr>
                    <tr><th>23.-Cirugía Reciente</th><td>{{ $fallecido->detallesDefuncion->cirugia_reciente ? 'Sí' : 'No' }}</td></tr>
                    @if ($fallecido->detallesDefuncion->cirugia_reciente)
                        <tr><th>23.1.-Fecha de Cirugía</th><td>{{ $fallecido->detallesDefuncion->fecha_cirugia}}</td></tr>
                        <tr><th>23.2Motivo de Cirugía</th><td>{{ $fallecido->detallesDefuncion->motivo_cirugia}}</td></tr>
                    @endif
                    <tr><th>24.-Defunción Violenta</th><td>{{ $fallecido->detallesDefuncion->defuncion_violenta}}</td></tr>
                    <tr><th>25.-Tipo de Defunción</th><td>{{ $fallecido->detallesDefuncion->tipo_defuncion}}</td></tr>
                </tbody>
            </table>
            @else
            <p>No se encontraron detalles de la defunción.</p>
            @endif
            <!--/////////////////////////////////////Causas de la defuncion ////////////////////////////////////////////////// -->
            <div class="row">
                <h2 class="section-title">26.-Causas de la Defunción</h2>
                <div class="info">
                    <p>Causa A: {{ $fallecido->causasDefuncion->causa_a ?? 'N/D' }}</p>
                    <p>Intervalo A: {{ $fallecido->causasDefuncion->intervalo_a ?? 'N/D' }}</p>
                    <p>Cadena de Afectaciones: {{ $fallecido->causasDefuncion->cadena_afectaciones ?? 'N/D' }}</p>
                    <p>Otras Condiciones: {{ $fallecido->causasDefuncion->otras_condiciones ?? 'N/D' }}</p>
                    <p>Código CIE: {{ $fallecido->causasDefuncion->codigo_cie ?? 'N/D' }}</p>
                </div>
            </div>
            
            
            <!--/////////////////////////////////////  Necropsia ////////////////////////////////////////////////// -->
            <div class="row">
                <h2 class="section-title">Necropsia</h2>
                <div class="info">
                    <p>27.-Se realizó Necropsia: {{ $fallecido->necropsiaDefuncion->necropsia ? 'Sí' : 'No' }}</p>
                    @if ($fallecido->necropsiaDefuncion->necropsia)
                        <p>27.1.-Hallazgos de la Necropsia: {{ $fallecido->necropsiaDefuncion->hallazgos_necropsia ?? 'N/D' }}</p>
                    @endif
                </div>
            </div>            
            
            <!--/////////////////////////////////////Informacion Adicional Mujer ////////////////////////////////////////////////// -->
            <div class="row">
                <h2 class="section-title">28.-Información Adicional (Mujeres)</h2>
                <div class="info">
                    <p>28.1.-Muerte durante el Embarazo, Parto o Puerperio: {{ $fallecido->defuncionMujer->muerte_embarazo ?? 'N/D' }}</p>
                    <p>28.2.-Causas Asociadas al Embarazo, Parto o Puerperio: {{ $fallecido->defuncionMujer->causas_embarazo ?? 'N/D' }}</p>
                    <p>28.3.-Complicaciones del Embarazo, Parto o Puerperio: {{ $fallecido->defuncionMujer->complicaciones_embarazo ?? 'N/D' }}</p>
                </div>
            </div>            
            
        <!--/////////////////////////////////////Detalles medicos de la defuncion ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Detalles Médicos de la Defunción</h2>
            <div class="info">
                <p>29.-Muerte Encefálica: {{ $fallecido->detallesMedicos->muerte_encefalica ? 'Sí' : 'No' }}</p>
                <p>29.1.-Donación de Órganos: {{ $fallecido->detallesMedicos->donacion_organos ? 'Sí' : 'No' }}</p>
                <p>30.-Causa Básica de la Defunción: {{ $fallecido->detallesMedicos->causa_basica ?? 'N/D' }}</p>
                <p>Código Adicional: {{ $fallecido->detallesMedicos->codigo_adicional ?? 'N/D' }}</p>
                <p>31.-¿La Defunción Ocurrió Durante el Desempeño de su Trabajo?: {{ $fallecido->detallesMedicos->desempeno_trabajo ?? 'N/D' }}</p>
        
                @if ($fallecido->detallesMedicos->defuncion_violenta)
                    <p>32.-Lugar Donde Ocurrió la Lesión: {{ $fallecido->detallesMedicos->lugar_lesion ?? 'N/D' }}</p>
                    <p>33.-¿Se levantó Acta por el Ministerio Público?: {{ $fallecido->detallesMedicos->acta_ministerio ?? 'N/D' }}</p>
                    <p>34.-Relación del Fallecido con el Presunto Agresor: {{ $fallecido->detallesMedicos->relacion_agresor ?? 'N/D' }}</p>
                    <p>35.-Descripción de la Lesión: {{ $fallecido->detallesMedicos->descripcion_lesion ?? 'N/D' }}</p>
                @endif
            </div>
        </div>
        
        <!--/////////////////////////////////////Domicilio donde Ocurrio la lesion ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">36.-Domicilio Donde Ocurrió la Lesión (Defunción Violenta)</h2>
            <div class="info">
                @if ($fallecido->detallesMedicos->defuncion_violenta)
                    <p>36.1.-Tipo de Vialidad: {{ $fallecido->domicilioLesion->tipo_vialidad_donde_ocurrio ?? 'N/D' }}</p>
                    <p>36.2.-Nombre de Vialidad: {{ $fallecido->domicilioLesion->nombre_vialidad ?? 'N/D' }}</p>
                    <p>36.3.-Número Exterior: {{ $fallecido->domicilioLesion->num_ext ?? 'N/D' }}</p>
                    <p>36.4.-Número Interior: {{ $fallecido->domicilioLesion->num_int ?? 'N/D' }}</p>
                    <p>36.5.-Tipo de Asentamiento: {{ $fallecido->domicilioLesion->tipo_asentamiento ?? 'N/D' }}</p>
                    <p>36.6.-Nombre del Asentamiento: {{ $fallecido->domicilioLesion->nombre_asentamiento ?? 'N/D' }}</p>
                    <p>36.7.-Código Postal: {{ $fallecido->domicilioLesion->ocurrio_lesion_codigo_postal ?? 'N/D' }}</p>
                    <p>36.-8Localidad: {{ $fallecido->domicilioLesion->ocurrio_lesion_localidad ?? 'N/D' }}</p>
                    <p>36.9.-Municipio: {{ $fallecido->domicilioLesion->ocurrio_lesion_municipio ?? 'N/D' }}</p>
                    <p>36.10.-Entidad Federativa: {{ $fallecido->domicilioLesion->entidad_federativa ?? 'N/D' }}</p>
                @else
                    <p>Esta sección aplica solo si la defunción fue violenta.</p>
                @endif
            </div>
        </div>
        
         <!--/////////////////////////////////////Datos del certificante ////////////////////////////////////////////////// -->
         <div class="row">
            <h2 class="section-title">Datos del Certificante</h2>
            <div class="info">
                <table class="table table-bordered">
                    <tr><th>37.-Certificada Por</th><td>{{ $fallecido->datosCertificante->certificada_por ?? 'n/d' }}</td></tr>
                    @if (($fallecido->datosCertificante->certificada_por ?? '') === 'Otro')
                        <tr><th>Otro Certificante</th><td>{{ $fallecido->datosCertificante->otro_certificada_por ?? 'n/d' }}</td></tr>
                    @endif
                    <tr><th>38.-Certificante</th><td>
                    <tr><th>Nombre</th><td>{{ $fallecido->datosCertificante->nombre_certificante ?? 'n/d' }}</td></tr>
                    <tr><th>Apellido Paterno</th><td>{{ $fallecido->datosCertificante->apellidoPaterno_certificante ?? 'n/d' }}</td></tr>
                    <tr><th>Apellido Materno</th><td>{{ $fallecido->datosCertificante->apellidoMaterno_certificante ?? 'n/d' }}</td></tr>
                    <tr><th>39.-¿Es Médico?</th><td>{{ ($fallecido->datosCertificante->certificante_sies_medico ?? false) ? 'Sí' : 'No' }}</td></tr>
                    <tr><th>40.-Firma</th><td>{{ $fallecido->datosCertificante->firma_certificante ?? 'n/d' }}</td></tr>
                </table>
            </div>
        </div>
        

         <!--/////////////////////////////////////Domicilio del certificante ////////////////////////////////////////////////// -->
         <div class="row">
            <h2 class="section-title">41.-Domicilio del Certificante</h2>
            <div class="info">
                <table class="table table-bordered">
                    <tr><th>41.1.-Tipo de Vialidad</th><td>{{ $fallecido->domicilioCertificante->tipo_vialidad_41 ?? 'n/d' }}</td></tr>
                    <tr><th>41.2.-Nombre de Vialidad</th><td>{{ $fallecido->domicilioCertificante->nombre_vialidad_41 ?? 'n/d' }}</td></tr>
                    <tr><th>41.3.-Número Exterior</th><td>{{ $fallecido->domicilioCertificante->num_ext_41 ?? 'n/d' }}</td></tr>
                    <tr><th>41.4.-Número Interior</th><td>{{ $fallecido->domicilioCertificante->num_int_41 ?? 'n/d' }}</td></tr>
                    <tr><th>41.5.-Tipo de Asentamiento</th><td>{{ $fallecido->domicilioCertificante->tipo_asentamiento_41 ?? 'n/d' }}</td></tr>
                    <tr><th>41.6.-Nombre del Asentamiento</th><td>{{ $fallecido->domicilioCertificante->nombre_asentamiento_41 ?? 'n/d' }}</td></tr>
                    <tr><th>41.7.-Código Postal</th><td>{{ $fallecido->domicilioCertificante->certificante_codigo_postal ?? 'n/d' }}</td></tr>
                    <tr><th>41.8.-Localidad</th><td>{{ $fallecido->domicilioCertificante->certificante_localidad ?? 'n/d' }}</td></tr>
                    <tr><th>41.9.-Municipio</th><td>{{ $fallecido->domicilioCertificante->certificante_municipio ?? 'n/d' }}</td></tr>
                    <tr><th>41.10.-Entidad Federativa</th><td>{{ $fallecido->domicilioCertificante->entidad_federativa_41 ?? 'n/d' }}</td></tr>
                    <tr><th>41.11.-Teléfono</th><td>{{ $fallecido->domicilioCertificante->telefono_41 ?? 'n/d' }}</td></tr>
                    <tr><th>42.-Fecha de Certificación</th><td>{{ $fallecido->domicilioCertificante->fecha_certificacion ?? 'n/d' }}</td></tr>
                </table>
            </div>
        </div>
        


         <!--/////////////////////////////////////Datos del registro civil ////////////////////////////////////////////////// -->
         <div class="row">
            <h2 class="section-title">43.-Datos del Registro Civil</h2>
            <div class="info">
                <table class="table table-bordered">
                    <tr><th>Número de Registro</th><td>{{ $fallecido->datosRegistroCivil->numero_registro ?? 'n/d' }}</td></tr>
                    <tr><th>Número de Libro</th><td>{{ $fallecido->datosRegistroCivil->numero_libro ?? 'n/d' }}</td></tr>
                    <tr><th>Número de Acta</th><td>{{ $fallecido->datosRegistroCivil->numero_acta ?? 'n/d' }}</td></tr>
                    <tr><th>44.-Localidad de Registro</th><td>{{ $fallecido->datosRegistroCivil->registro_localidad ?? 'n/d' }}</td></tr>
                    <tr><th>Municipio de Registro</th><td>{{ $fallecido->datosRegistroCivil->registro_municipio ?? 'n/d' }}</td></tr>
                    <tr><th>Entidad de Registro</th><td>{{ $fallecido->datosRegistroCivil->entidad_registro ?? 'n/d' }}</td></tr>
                    <tr><th>45.-Fecha de Registro</th><td>{{ $fallecido->datosRegistroCivil->fecha_de_registro ?? 'n/d' }}</td></tr>
                </table>
            </div>
        </div>


        <div style="margin-top: 40px; padding: 15px 0; background-color: #f5f5f5; font-family: Arial, sans-serif;">
            <div style="display: flex; align-items: center; justify-content: center;">
                <div style="width: 30px; height: 30px; background-color: #2c3e50; color: white; display: flex; align-items: center; justify-content: center; margin-right: 10px; font-weight: bold;">IV</div>
                <div style="text-align: center; font-size: 11px; color: #555;">
                    <strong>Registro Civil del Estado de Morelos</strong><br>
                    Av. Palacio de Gobierno S/N, Cuernavaca, Morelos<br>
                    Tel: 777 123 4567 | https://github.com/ianVifl
                </div>
            </div>
        </div>


        <div style="margin-top: 40px; border-top: 1px solid #ccc; padding-top: 10px; font-family: Arial, sans-serif; font-size: 10px; color: #555; text-align: center;">
            Documento emitido electrónicamente por el Registro Civil de Morelos<br>
            Fecha de emisión: 2025-05-12 | Este documento tiene validez oficial
        </div>
          
    </body>
</html>