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
        <h1>Certificado de Defunción</h1>
        <div class="info">
            <h2>Información del Fallecido</h2>
            <p>Nombre: {{ $fallecido->nombre_fallecido ?? 'N/D' }}</p>
            <p>Apellido Paterno: {{ $fallecido->apellido_paterno ?? 'N/D' }}</p>
            <p>Apellido Materno: {{ $fallecido->apellido_materno ?? 'N/D' }}</p>
            <p>Fecha de Nacimiento: {{ $fallecido->fecha_nacimiento ?? 'N/D' }}</p>
            <p>Sexo: {{ $fallecido->sexo ?? 'N/D' }}</p>
            <p>CURP: {{ $fallecido->CURP ?? 'N/D' }}</p>
        </div>
        <!--/////////////////////////////////////Origen Etnico////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Origen Étnico</h2>
            <div class="info">
                <p>Entidad de Nacimiento: {{ $fallecido->entidades->entidad_nacimiento_ ?? 'N/D' }}</p>
                <p>Afromexicano: {{ isset($fallecido->entidades->afromexicano) ? ($fallecido->afromexicano ? 'Sí' : 'No') : 'N/D' }}</p>
                <p>Indígena: {{ isset($fallecido->entidades->indigena) ? ($fallecido->indigena ? 'Sí' : 'No') : 'N/D' }}</p>
                <p>9.-Nacionalidad: {{$fallecido->infoFallecido->nacionalidad ?? 'N/D'}}</p>
            </div>
        </div>

        <!--/////////////////////////////////////Datos edad cumplida ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Datos de Edad Cumplida</h2>
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
            <h2 class="section-title">Situación Conyugal</h2>
            <div class="info">
                <p>Estado Civil: {{ $fallecido->infoFallecido->situacion_conyugal ?? 'N/D'}}</p>
            </div>
        </div>
        <!--/////////////////////////////////////Residencia ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Residencia</h2>
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
                    <p>Escolaridad {{ $fallecido->infoFallecido->escolaridad ?? 'N/D' }}</p>
                    <p>Escolaridad Completa :{{$fallecido->infoFallecido->escolaridad_completa ?? 'N/D'}}</p>
                    <p>¿Trabaja? {{$fallecido->infoFallecido->trabajador ?? 'N/D'}}</p>
                    <p>Afiliación a Servicios de Salud: {{$fallecido->infoFallecido->afiliacion_servicios_salud ?? 'N/D'}}</p>
                    <p>Numero de Afiliación: {{$fallecido->infoFallecido->numero_afiliacion_social ?? 'N/D'}}</p>
                    <p>Ocupación Habitual: {{$fallecido->infoFallecido->ocupacion_habitual ?? 'N/D'}}</p>
            </div>
        </div>
        <!--/////////////////////////////////////Datos del informante ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Datos del Informante</h2>
            <div class="info">
                    <p>Nombre del Informante: {{ $fallecido->informante->nombre_informante ?? 'N/d' }}</p>
                    <p>Primer Apellido: {{ $fallecido->informante->primer_apellido_informante ?? 'N/D' }}</p>
                    <p>Segundo Apellido: {{ $fallecido->informante->segundo_apellido_informante ?? 'N/D' }}</p>
                    <p>Parentesco con el Fallecido: {{ $fallecido->informante->parentesco_con_fallecido ?? 'N/D' }}</p>
                    <p>Firma Informante: {{$fallecido->informante->firma_informante ?? 'N/D'}}</p>
                    <p>19.- Sitio donde Ocurrio la defuncion: {{$fallecido->informante->sitio_defuncion ?? 'N/D'}}</p>
                    <p>19.1.-Nombre de la Unidad Medica: {{$fallecido->informante->nombre_unidad_medica ?? 'N/D'}}</p>
                    <p>19.2.- Clave de Establecimientos de Salud :<{{$fallecido->informante->clave_establecimientos_salud ?? 'N/D'}}/p>
            </div>
        </div>
        <!--/////////////////////////////////////Domicilio de Defuncion ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Domicilio de Defunción</h2>
            <div class="info">
                    <p>Tipo de Vialidad: {{ $fallecido->domicilioDefuncion->tipo_vialidad_lugar_defuncion ?? 'N/D' }}</p>
                    <p>Nombre de Vialidad: {{ $fallecido->domicilioDefuncion->nombre_vialidad_lugar_defuncion ?? 'N/D' }}</p>
                    <p>Número Exterior: {{ $fallecido->domicilioDefuncion->num_exterior_lugar_defuncion ?? 'N/D' }}</p>
                    <p>Número Interior: {{ $fallecido->domicilioDefuncion->num_interior_lugar_defuncion ?? 'N/D' }}</p>
                    <p>Asentamiento Humano: {{ $fallecido->domicilioDefuncion->asentamiento_humano_lugar_defuncion ?? 'N/D' }}</p>
                    <p>Nombre del Asentamiento: {{ $fallecido->domicilioDefuncion->nombre_asentamiento_lugar_defuncion ?? 'N/D' }}</p>
                    <p>Código Postal: {{ $fallecido->domicilioDefuncion->codigoPostal_lugar_defuncion ?? 'N/D' }}</p>
                    <p>Localidad: {{ $fallecido->domicilioDefuncion->lugar_defuncion_localidad ?? 'N/D' }}</p>
                    <p>Municipio: {{ $fallecido->domicilioDefuncion->lugar_defuncion_municipio ?? 'N/D' }}</p>
                    <p>Entidad Federativa: {{ $fallecido->domicilioDefuncion->entidadFederativa_lugar_defuncion ?? 'N/D' }}</p>
            </div>
        </div>

        <!--/////////////////////////////////////Detalles de la defuncion ////////////////////////////////////////////////// -->
            <h2 class="section-title">Detalles de la Defunción</h2>
            @if ($fallecido->detallesDefuncion)
            <table class="table table-bordered">
                <tbody>
                    <tr><th>Fecha de Defunción</th><td>{{ $fallecido->detallesDefuncion->fecha_defuncion }}</td></tr>
                    <tr><th>Hora de Defunción</th><td>{{ $fallecido->detallesDefuncion->hora_defuncion }}</td></tr>
                    <tr><th>Atención Médica Antes de Fallecer</th><td>{{ $fallecido->atencionMedica_antes_fallecer ? 'Sí' : 'No' }}</td></tr>
                    <tr><th>Cirugía Reciente</th><td>{{ $fallecido->detallesDefuncion->cirugia_reciente ? 'Sí' : 'No' }}</td></tr>
                    @if ($fallecido->detallesDefuncion->cirugia_reciente)
                        <tr><th>Fecha de Cirugía</th><td>{{ $fallecido->detallesDefuncion->fecha_cirugia}}</td></tr>
                        <tr><th>Motivo de Cirugía</th><td>{{ $fallecido->detallesDefuncion->motivo_cirugia}}</td></tr>
                    @endif
                    <tr><th>Defunción Violenta</th><td>{{ $fallecido->detallesDefuncion->defuncion_violenta}}</td></tr>
                    <tr><th>Tipo de Defunción</th><td>{{ $fallecido->detallesDefuncion->tipo_defuncion}}</td></tr>
                </tbody>
            </table>
            @else
            <p>No se encontraron detalles de la defunción.</p>
            @endif
            <!--/////////////////////////////////////Causas de la defuncion ////////////////////////////////////////////////// -->
            <div class="row">
                <h2 class="section-title">Causas de la Defunción</h2>
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
                    <p>Se realizó Necropsia: {{ $fallecido->necropsiaDefuncion->necropsia ? 'Sí' : 'No' }}</p>
                    @if ($fallecido->necropsiaDefuncion->necropsia)
                        <p>Hallazgos de la Necropsia: {{ $fallecido->necropsiaDefuncion->hallazgos_necropsia ?? 'N/D' }}</p>
                    @endif
                </div>
            </div>            
            
            <!--/////////////////////////////////////Informacion Adicional Mujer ////////////////////////////////////////////////// -->
            <div class="row">
                <h2 class="section-title">Información Adicional (Mujeres)</h2>
                <div class="info">
                    <p>Muerte durante el Embarazo, Parto o Puerperio: {{ $fallecido->defuncionMujer->muerte_embarazo ?? 'N/D' }}</p>
                    <p>Causas Asociadas al Embarazo, Parto o Puerperio: {{ $fallecido->defuncionMujer->causas_embarazo ?? 'N/D' }}</p>
                    <p>Complicaciones del Embarazo, Parto o Puerperio: {{ $fallecido->defuncionMujer->complicaciones_embarazo ?? 'N/D' }}</p>
                </div>
            </div>            
            
        <!--/////////////////////////////////////Detalles medicos de la defuncion ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Detalles Médicos de la Defunción</h2>
            <div class="info">
                <p>Muerte Encefálica: {{ $fallecido->detallesMedicos->muerte_encefalica ? 'Sí' : 'No' }}</p>
                <p>Donación de Órganos: {{ $fallecido->detallesMedicos->donacion_organos ? 'Sí' : 'No' }}</p>
                <p>Causa Básica de la Defunción: {{ $fallecido->detallesMedicos->causa_basica ?? 'N/D' }}</p>
                <p>Código Adicional: {{ $fallecido->detallesMedicos->codigo_adicional ?? 'N/D' }}</p>
                <p>¿La Defunción Ocurrió Durante el Desempeño de su Trabajo?: {{ $fallecido->detallesMedicos->desempeno_trabajo ?? 'N/D' }}</p>
        
                @if ($fallecido->detallesMedicos->defuncion_violenta)
                    <p>Lugar Donde Ocurrió la Lesión: {{ $fallecido->detallesMedicos->lugar_lesion ?? 'N/D' }}</p>
                    <p>¿Se levantó Acta por el Ministerio Público?: {{ $fallecido->detallesMedicos->acta_ministerio ?? 'N/D' }}</p>
                    <p>Relación del Fallecido con el Presunto Agresor: {{ $fallecido->detallesMedicos->relacion_agresor ?? 'N/D' }}</p>
                    <p>Descripción de la Lesión: {{ $fallecido->detallesMedicos->descripcion_lesion ?? 'N/D' }}</p>
                @endif
            </div>
        </div>
        
        <!--/////////////////////////////////////Domicilio donde Ocurrio la lesion ////////////////////////////////////////////////// -->
        <div class="row">
            <h2 class="section-title">Domicilio Donde Ocurrió la Lesión (Defunción Violenta)</h2>
            <div class="info">
                @if ($fallecido->detallesMedicos->defuncion_violenta)
                    <p>Tipo de Vialidad: {{ $fallecido->domicilioLesion->tipo_vialidad_donde_ocurrio ?? 'N/D' }}</p>
                    <p>Nombre de Vialidad: {{ $fallecido->domicilioLesion->nombre_vialidad ?? 'N/D' }}</p>
                    <p>Número Exterior: {{ $fallecido->domicilioLesion->num_ext ?? 'N/D' }}</p>
                    <p>Número Interior: {{ $fallecido->domicilioLesion->num_int ?? 'N/D' }}</p>
                    <p>Tipo de Asentamiento: {{ $fallecido->domicilioLesion->tipo_asentamiento ?? 'N/D' }}</p>
                    <p>Nombre del Asentamiento: {{ $fallecido->domicilioLesion->nombre_asentamiento ?? 'N/D' }}</p>
                    <p>Código Postal: {{ $fallecido->domicilioLesion->ocurrio_lesion_codigo_postal ?? 'N/D' }}</p>
                    <p>Localidad: {{ $fallecido->domicilioLesion->ocurrio_lesion_localidad ?? 'N/D' }}</p>
                    <p>Municipio: {{ $fallecido->domicilioLesion->ocurrio_lesion_municipio ?? 'N/D' }}</p>
                    <p>Entidad Federativa: {{ $fallecido->domicilioLesion->entidad_federativa ?? 'N/D' }}</p>
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
                    <tr><th>Certificada Por</th><td>{{ $fallecido->datosCertificante->certificada_por ?? 'n/d' }}</td></tr>
                    @if (($fallecido->datosCertificante->certificada_por ?? '') === 'Otro')
                        <tr><th>Otro Certificante</th><td>{{ $fallecido->datosCertificante->otro_certificada_por ?? 'n/d' }}</td></tr>
                    @endif
                    <tr><th>Nombre</th><td>{{ $fallecido->datosCertificante->nombre_certificante ?? 'n/d' }}</td></tr>
                    <tr><th>Apellido Paterno</th><td>{{ $fallecido->datosCertificante->apellidoPaterno_certificante ?? 'n/d' }}</td></tr>
                    <tr><th>Apellido Materno</th><td>{{ $fallecido->datosCertificante->apellidoMaterno_certificante ?? 'n/d' }}</td></tr>
                    <tr><th>¿Es Médico?</th><td>{{ ($fallecido->datosCertificante->certificante_sies_medico ?? false) ? 'Sí' : 'No' }}</td></tr>
                    <tr><th>Firma</th><td>{{ $fallecido->datosCertificante->firma_certificante ?? 'n/d' }}</td></tr>
                </table>
            </div>
        </div>
        

         <!--/////////////////////////////////////Domicilio del certificante ////////////////////////////////////////////////// -->
         <div class="row">
            <h2 class="section-title">Domicilio del Certificante</h2>
            <div class="info">
                <table class="table table-bordered">
                    <tr><th>Tipo de Vialidad</th><td>{{ $fallecido->domicilioCertificante->tipo_vialidad_41 ?? 'n/d' }}</td></tr>
                    <tr><th>Nombre de Vialidad</th><td>{{ $fallecido->domicilioCertificante->nombre_vialidad_41 ?? 'n/d' }}</td></tr>
                    <tr><th>Número Exterior</th><td>{{ $fallecido->domicilioCertificante->num_ext_41 ?? 'n/d' }}</td></tr>
                    <tr><th>Número Interior</th><td>{{ $fallecido->domicilioCertificante->num_int_41 ?? 'n/d' }}</td></tr>
                    <tr><th>Tipo de Asentamiento</th><td>{{ $fallecido->domicilioCertificante->tipo_asentamiento_41 ?? 'n/d' }}</td></tr>
                    <tr><th>Nombre del Asentamiento</th><td>{{ $fallecido->domicilioCertificante->nombre_asentamiento_41 ?? 'n/d' }}</td></tr>
                    <tr><th>Código Postal</th><td>{{ $fallecido->domicilioCertificante->certificante_codigo_postal ?? 'n/d' }}</td></tr>
                    <tr><th>Localidad</th><td>{{ $fallecido->domicilioCertificante->certificante_localidad ?? 'n/d' }}</td></tr>
                    <tr><th>Municipio</th><td>{{ $fallecido->domicilioCertificante->certificante_municipio ?? 'n/d' }}</td></tr>
                    <tr><th>Entidad Federativa</th><td>{{ $fallecido->domicilioCertificante->entidad_federativa_41 ?? 'n/d' }}</td></tr>
                    <tr><th>Teléfono</th><td>{{ $fallecido->domicilioCertificante->telefono_41 ?? 'n/d' }}</td></tr>
                    <tr><th>Fecha de Certificación</th><td>{{ $fallecido->domicilioCertificante->fecha_certificacion ?? 'n/d' }}</td></tr>
                </table>
            </div>
        </div>
        


         <!--/////////////////////////////////////Datos del registro civil ////////////////////////////////////////////////// -->
         <div class="row">
            <h2 class="section-title">Datos del Registro Civil</h2>
            <div class="info">
                <table class="table table-bordered">
                    <tr><th>Número de Registro</th><td>{{ $fallecido->datosRegistroCivil->numero_registro ?? 'n/d' }}</td></tr>
                    <tr><th>Número de Libro</th><td>{{ $fallecido->datosRegistroCivil->numero_libro ?? 'n/d' }}</td></tr>
                    <tr><th>Número de Acta</th><td>{{ $fallecido->datosRegistroCivil->numero_acta ?? 'n/d' }}</td></tr>
                    <tr><th>Localidad de Registro</th><td>{{ $fallecido->datosRegistroCivil->registro_localidad ?? 'n/d' }}</td></tr>
                    <tr><th>Municipio de Registro</th><td>{{ $fallecido->datosRegistroCivil->registro_municipio ?? 'n/d' }}</td></tr>
                    <tr><th>Entidad de Registro</th><td>{{ $fallecido->datosRegistroCivil->entidad_registro ?? 'n/d' }}</td></tr>
                    <tr><th>Fecha de Registro</th><td>{{ $fallecido->datosRegistroCivil->fecha_de_registro ?? 'n/d' }}</td></tr>
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