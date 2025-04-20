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
        <h1>Información del Fallecido</h1>
        <div class="info">
            <p>Nombre: {{ $fallecido->nombre ?? 'N/D' }}</p>
            <p>Apellido Paterno: {{ $fallecido->apellido_paterno ?? 'N/D' }}</p>
            <p>Apellido Materno: {{ $fallecido->apellido_materno ?? 'N/D' }}</p>
            <p>Fecha de Nacimiento: {{ $fallecido->fecha_nacimiento ?? 'N/D' }}</p>
            <p>Sexo: {{ $fallecido->sexo ?? 'N/D' }}</p>
            <p>CURP: {{ $fallecido->CURP ?? 'N/D' }}</p>
        </div>

        <div class="row">
            <h2 class="section-title">Información de Entidades</h2>
            <div class="info">
                <p>Entidad de Nacimiento: {{ $fallecido->entidad_nacimiento_ ?? 'N/D' }}</p>
                <p>Afromexicano: {{ isset($fallecido->afromexicano) ? ($fallecido->afromexicano ? 'Sí' : 'No') : 'N/D' }}</p>
                <p>Indígena: {{ isset($fallecido->indigena) ? ($fallecido->indigena ? 'Sí' : 'No') : 'N/D' }}</p>
            </div>
        </div>

        <div class="row">
            <h2 class="section-title">Información de Residencia</h2>
            <div class="info">
                <p>Localidad: {{ $fallecido->localidad ?? 'N/D' }}</p>
                <p>Municipio: {{ $fallecido->municipio ?? 'N/D' }}</p>
                <p>Código Postal: {{ $fallecido->codigo_postal ?? 'N/D' }}</p>
                <p>Calle: {{ $fallecido->calle ?? 'N/D' }}</p>
                <p>Número Exterior: {{ $fallecido->numero_ext ?? 'N/D' }}</p>
                <p>Número Interior: {{ $fallecido->numero_int ?? 'N/D' }}</p>
                <p>Tipo de Asentamiento Humano: {{ $fallecido->tipo_asentamiento_humano ?? 'N/D' }}</p>
                <p>Nombre de Asentamiento Humano: {{ $fallecido->nombre_asentamiento_humano ?? 'N/D' }}</p>
                <p>País: {{ $fallecido->pais ?? 'N/D' }}</p>
            </div>
        </div>

        <div class="row">
            <h2 class="section-title">Información de Edad al Fallecer</h2>
            <div class="info">
                <p>Folio Certificado Nacimiento: {{ $fallecido->folio_certificado_naci ?? 'N/D' }}</p>
                <p>Peso al Nacimiento: {{ $fallecido->peso_nacimiento ?? 'N/D' }}</p>
                <p>Semanas de Gestación: {{ $fallecido->semanas_gestacion ?? 'N/D' }}</p>
            </div>
        </div>

        <div class="row">
            <h2 class="section-title">Datos de Edad Cumplida</h2>
            <div class="info">
                <p>Años Cumplidos: {{ $fallecido->años_cumplidos ?? 'N/D' }}</p>
                <p>Meses: {{ $fallecido->meses ?? 'N/D' }}</p>
                <p>Días: {{ $fallecido->dias ?? 'N/D' }}</p>
                <p>Horas: {{ $fallecido->horas ?? 'N/D' }}</p>
                <p>Minutos: {{ $fallecido->minutos ?? 'N/D' }}</p>
            </div>
        </div>

        <div class="row">
            <h2 class="section-title">Datos del Informante</h2>
            <div class="info">
                @if($fallecido->nombre_informante)
                    <p>Nombre del Informante: {{ $fallecido->nombre_informante ?? 'N/D' }}</p>
                    <p>Primer Apellido: {{ $fallecido->primer_apellido_informante ?? 'N/D' }}</p>
                    <p>Segundo Apellido: {{ $fallecido->segundo_apellido_informante ?? 'N/D' }}</p>
                    <p>Parentesco con el Fallecido: {{ $fallecido->parentesco_con_fallecido ?? 'N/D' }}</p>
                @else
                    <p>No se encontraron datos del informante.</p>
                @endif
            </div>
        </div>


<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="row">
    <h2 class="section-title">Domicilio de Defunción</h2>
    <div class="info">
        @if ($fallecido->domicilioDefuncion)
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
        @else
            <p>No se encontró información del domicilio de defunción.</p>
        @endif
    </div>
</div>



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

            <h2 class="section-title">Causas de la Defunción</h2>
            @if (isset($data['causasDefuncion']))
            <table class="table table-bordered">
                <tbody>
                    <tr><th>Causa A</th><td>{{ $data['causasDefuncion']['causa_a'] }}</td></tr>
                    <tr><th>Intervalo A</th><td>{{ $data['causasDefuncion']['intervalo_a'] }}</td></tr>
                    <tr><th>Cadena de Afectaciones</th><td>{{ $data['causasDefuncion']['cadena_afectaciones'] }}</td></tr>
                    <tr><th>Otras Condiciones</th><td>{{ $data['causasDefuncion']['otras_condiciones'] }}</td></tr>
                    <tr><th>Código CIE</th><td>{{ $data['causasDefuncion']['codigo_cie'] }}</td></tr>
                </tbody>
            </table>
            @else
            <p>No se encontraron causas de la defunción.</p>
            @endif
            

            <h2 class="section-title">Necropsia</h2>
            @if (isset($data['necropsiaDefuncion']))
            <table class="table table-bordered">
                <tbody>
                    <tr><th>Se realizó Necropsia</th><td>{{ $data['necropsiaDefuncion']['necropsia'] ? 'Sí' : 'No' }}</td></tr>
                    @if ($data['necropsiaDefuncion']['necropsia'])
                        <tr><th>Hallazgos de la Necropsia</th><td>{{ $data['necropsiaDefuncion']['hallazgos_necropsia'] }}</td></tr>
                    @endif
                </tbody>
            </table>
            @else
            <p>No se encontró información sobre la necropsia.</p>
            @endif
            

            <h2 class="section-title">Información Adicional (Mujeres)</h2>
            @if (isset($data['defuncionMujer']))
            <table class="table table-bordered">
                <tbody>
                    <tr><th>Muerte durante el Embarazo, Parto o Puerperio</th><td>{{ $data['defuncionMujer']['muerte_embarazo'] }}</td></tr>
                    <tr><th>Causas Asociadas al Embarazo, Parto o Puerperio</th><td>{{ $data['defuncionMujer']['causas_embarazo'] }}</td></tr>
                    <tr><th>Complicaciones del Embarazo, Parto o Puerperio</th><td>{{ $data['defuncionMujer']['complicaciones_embarazo'] }}</td></tr>
                </tbody>
            </table>
            @else
            <p>Esta sección aplica solo si el fallecido es mujer.</p>
            @endif
            

        <div class="row">
            <h2 class="section-title">Detalles Médicos de la Defunción</h2>
            <div class="info">
                @if (isset($data['detallesMedicos']))
                    <p>Muerte Encefálica: {{ $data['detallesMedicos']['muerte_encefalica'] ? 'Sí' : 'No' }}</p>
                    <p>Donación de Órganos: {{ $data['detallesMedicos']['donacion_organos'] ? 'Sí' : 'No' }}</p>
                    <p>Causa Básica de la Defunción: {{ $data['detallesMedicos']['causa_basica'] }}</p>
                    <p>Código Adicional: {{ $data['detallesMedicos']['codigo_adicional'] }}</p>
                    <p>¿La Defunción Ocurrió Durante el Desempeño de su Trabajo?: {{ $data['detallesMedicos']['desempeno_trabajo'] }}</p>
                    @if ($data['detallesMedicos']['defuncion_violenta'])
                        <p>Lugar Donde Ocurrió la Lesión: {{ $data['detallesMedicos']['lugar_lesion'] }}</p>
                        <p>¿Se levantó Acta por el Ministerio Público?: {{ $data['detallesMedicos']['acta_ministerio'] }}</p>
                        <p>Relación del Fallecido con el Presunto Agresor: {{ $data['detallesMedicos']['relacion_agresor'] }}</p>
                        <p>Descripción de la Lesión: {{ $data['detallesMedicos']['descripcion_lesion'] }}</p>
                    @endif
                @else
                    <p>No se encontraron detalles médicos de la defunción.</p>
                @endif
            </div>
        </div>

        <div class="row">
            <h2 class="section-title">Domicilio Donde Ocurrió la Lesión (Defunción Violenta)</h2>
            <div class="info">
                @if (isset($data['domicilioLesion']) && isset($data['detallesMedicos']) && $data['detallesMedicos']['defuncion_violenta'])
                    <p>Tipo de Vialidad: {{ $data['domicilioLesion']['tipo_vialidad_donde_ocurrio'] }}</p>
                    <p>Nombre de Vialidad: {{ $data['domicilioLesion']['nombre_vialidad'] }}</p>
                    <p>Número Exterior: {{ $data['domicilioLesion']['num_ext'] }}</p>
                    <p>Número Interior: {{ $data['domicilioLesion']['num_int'] }}</p>
                    <p>Tipo de Asentamiento: {{ $data['domicilioLesion']['tipo_asentamiento'] }}</p>
                    <p>Nombre del Asentamiento: {{ $data['domicilioLesion']['nombre_asentamiento'] }}</p>
                    <p>Código Postal: {{ $data['domicilioLesion']['ocurrio_lesion_codigo_postal'] }}</p>
                    <p>Localidad: {{ $data['domicilioLesion']['ocurrio_lesion_localidad'] }}</p>
                    <p>Municipio: {{ $data['domicilioLesion']['ocurrio_lesion_municipio'] }}</p>
                    <p>Entidad Federativa: {{ $data['domicilioLesion']['entidad_federativa'] }}</p>
                @elseif (!isset($data['detallesMedicos']) || !$data['detallesMedicos']['defuncion_violenta'])
                    <p>Esta sección aplica solo si la defunción fue violenta.</p>
                @else
                    <p>No se encontró información del domicilio donde ocurrió la lesión.</p>
                @endif
            </div>
        </div>

        <div class="row">
            <h2 class="section-title">Datos del Certificante</h2>
            <div class="info">
                @if (isset($data['datosCertificante']))
                    <p>Certificada Por: {{ $data['datosCertificante']['certificada_por'] }}</p>
                    @if ($data['datosCertificante']['certificada_por'] === 'Otro')
                        <p>Otro Certificante: {{ $data['datosCertificante']['otro_certificada_por'] }}</p>
                    @endif
                    <p>Nombre del Certificante: {{ $data['datosCertificante']['nombre_certificante'] }}</p>
                    <p>Apellido Paterno del Certificante: {{ $data['datosCertificante']['apellidoPaterno_certificante'] }}</p>
                    <p>Apellido Materno del Certificante: {{ $data['datosCertificante']['apellidoMaterno_certificante'] }}</p>
                    <p>¿El Certificante es Médico?: {{ $data['datosCertificante']['certificante_sies_medico'] ? 'Sí' : 'No' }}</p>
                    <p>Firma del Certificante: {{ $data['datosCertificante']['firma_certificante'] }}</p>
                @else
                    <p>No se encontraron datos del certificante.</p>
                @endif
            </div>
        </div>

        <div class="row">
            <h2 class="section-title">Domicilio del Certificante</h2>
            <div class="info">
                @if (isset($data['domicilioCertificante']))
                    <p>Tipo de Vialidad: {{ $data['domicilioCertificante']['tipo_vialidad_41'] }}</p>
                    <p>Nombre de Vialidad: {{ $data['domicilioCertificante']['nombre_vialidad_41'] }}</p>
                    <p>Número Exterior: {{ $data['domicilioCertificante']['num_ext_41'] }}</p>
                    <p>Número Interior: {{ $data['domicilioCertificante']['num_int_41'] }}</p>
                    <p>Tipo de Asentamiento: {{ $data['domicilioCertificante']['tipo_asentamiento_41'] }}</p>
                    <p>Nombre del Asentamiento: {{ $data['domicilioCertificante']['nombre_asentamiento_41'] }}</p>
                    <p>Código Postal: {{ $data['domicilioCertificante']['certificante_codigo_postal'] }}</p>
                    <p>Localidad: {{ $data['domicilioCertificante']['certificante_localidad'] }}</p>
                    <p>Municipio: {{ $data['domicilioCertificante']['certificante_municipio'] }}</p>
                    <p>Entidad Federativa: {{ $data['domicilioCertificante']['entidad_federativa_41'] }}</p>
                    <p>Teléfono: {{ $data['domicilioCertificante']['telefono_41'] }}</p>
                    <p>Fecha de Certificación: {{ $data['domicilioCertificante']['fecha_certificacion'] }}</p>
                @else
                    <p>No se encontró información del domicilio del certificante.</p>
                @endif
            </div>
        </div>

        <div class="row">
            <h2 class="section-title">Datos del Registro Civil</h2>
            <div class="info">
                @if (isset($data['datosRegistroCivil']))
                    <p>Número de Registro: {{ $data['datosRegistroCivil']['numero_registro'] }}</p>
                    <p>Número de Libro: {{ $data['datosRegistroCivil']['numero_libro'] }}</p>
                    <p>Número de Acta: {{ $data['datosRegistroCivil']['numero_acta'] }}</p>
                    <p>Localidad de Registro: {{ $data['datosRegistroCivil']['registro_localidad'] }}</p>
                    <p>Municipio de Registro: {{ $data['datosRegistroCivil']['registro_municipio'] }}</p>
                    <p>Entidad de Registro: {{ $data['datosRegistroCivil']['entidad_registro'] }}</p>
                    <p>Fecha de Registro: {{ $data['datosRegistroCivil']['fecha_de_registro'] }}</p>
                @else
                    <p>No se encontraron datos del Registro Civil.</p>
                @endif
            </div>
        </div>  
    </body>
</html>