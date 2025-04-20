@extends('layouts.main')
@section('titulo ', $titulo)

@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Registro de Defuncion <i class="fa-solid fa-book-skull"></i></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route ('defuncion-registro')}}">Registros</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Llena los campos con los datos del fallecido</h5>


              <form action="{{route('defunciones.store')}}" method = "POST">
                @csrf
              <fieldset class="mb-4">
                <legend>1.NOMBRE DE LA (DEL) FALLECID(A)/O </legend>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="nombre_fallecido" class="form-label" >Nombre(s)</label>
                        <input type="text" class="form-control" required name = "nombre_fallecido" id="nombre_fallecido">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="apellido_paterno" class="form-label">Primer Apellido</label>
                        <input type="text" class="form-control" required name = "apellido_paterno" id="apellido_paterno">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="apellido_materno" class="form-label">Segundo Apellido</label>
                        <input type="text" class="form-control" required name ="apellido_materno" id="apellido_materno">
                    </div>


                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="fecha_nacimiento" class="form-label">2.Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" required name ="fecha_nacimiento">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="sexo" class="form-label">3.Sexo</label>
                            <select class="form-select" id="sexo" required name ="sexo">
                                <option value="hombre">Hombre</option>
                                <option value="mujer">Mujer</option>
                                <option value="se ignora">Se ignora</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                     <label for="entidad_nacimiento_" class="form-label">4.Entidad de Nacimiento</label>
                     <input type="text" class="form-control" id="entidad_nacimiento_" required name = "entidad_nacimiento_">
                 </div> 
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <label for="CURP" class="form-label">5.CURP</label>
                              <input type="text" class="form-control" id="CURP" required name ="CURP">
                          </div>


            <!--=======================ORIGEN ETNICO================================ -->
                      
            <fieldset class="mb-4">
                <hr>
              <legend>Origen Étnico</legend>
              <div class="row">
                  <div class="col-md-4 mb-3">
                      <label for="afromexicano" class="form-label">6.¿Se le reconocía como afromexicano?</label>
                      <select class="form-select" id="afromexicano" required name = "afromexicano">
                          <option value="1">Sí</option>
                          <option value="0">No</option>
                          <option value="3">Se ignora</option>
                      </select>
                  </div>
                  <div class="col-md-4 mb-3">
                      <label for="indigena" class="form-label">7.¿Se considera como indígena?</label>
                      <select class="form-select" id="indigena" required name = "indigena">
                          <option value="1">Sí</option>
                          <option value="0">No</option>
                          <option value="3">Se ignora</option>
                      </select>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="lengua_indigena" class="form-label">8.¿Hablaba alguna lengua indígena?</label>
                    <select class="form-select" id="lengua_indigena" required name ="lengua_indigena">
                        <option value="1">Sí</option>
                        <option value="2">No</option>
                        <option value="3">Se ignora</option>
                    </select>
                    <input type="text" class="form-control mt-2" id="lengua_indigena" placeholder="Especifique" style="display: none;">
                </div>
                  
              </div>
          </fieldset>

          <div class="col-md-4 mb-3">
            <label for="nacionalidad" class="form-label">9.Nacionalidad</label>
            <select class="form-select" id="nacionalidad" required name="nacionalidad">
                <option value="mexicana">Mexicana</option>
                <option value="se ignora">Se ignora</option>
                <option value="otra">Otra</option>
            </select>
            <input type="text" class="form-control mt-2" id="nacionalidad" placeholder="Especifique" style="display: none;">
        </div>
        <!--=====================================EDAD CUMPLIDA===================================== -->
        <fieldset class="mb-4">
            <hr>
            <legend>Edad</legend>
            <div class="row">
                
                <div class="col-md-8 mb-3">
                    <label class="form-label">10.Edad Cumplida</label>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="minutos" placeholder="Minutos"  name="minutos">
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="horas" placeholder="Horas"  name="horas">
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="dias" placeholder="Días"  name="dias">
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="meses" placeholder="Meses"  name="meses">
                        </div>
                        <div class="col-md-3 mt-2">
                            <input type="number" class="form-control" id="años_cumplidos" placeholder="Años"  name="años_cumplidos">
                        </div>
                        <div class="col-md-3 mt-2">
                            <select class="form-select" id="edadSeIgnora">
                                <option value="no">No</option>
                                <option value="si">Se ignora</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="mb-4">
            <hr>
            <legend>Para menores de 28 días de nacido</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="folio_certificado_naci" class="form-label">Folio del Certificado de Nacimiento</label>
                    <input type="text" class="form-control" id="folio_certificado_naci"  name="folio_certificado_naci">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="semanasGestacion" class="form-label">Semanas de Gestación</label>
                    <input type="number" class="form-control" id="semanas_gestacion" name="semanas_gestacion">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="peso_nacimiento" class="form-label">Peso al Nacer (gramos)</label>
                    <input type="number" class="form-control" id="peso_nacimiento"  name="peso_nacimiento">
                </div>
            </div>
        </fieldset>

        <!--=======================SITUACION CONYUGAL================================ -->
          <fieldset class="mb-4">
            <hr>
            <legend>11.Situación Conyugal</legend>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="situacion_conyugal" class="form-label">Situación Conyugal</label>
                    <select class="form-select" id="situacion_conyugal" required name = "situacion_conyugal">
                        <option value="soltera/o">Soltera/o</option>
                        <option value="union libre">En unión libre</option>
                        <option value="casada/o">Casada/o</option>
                        <option value="separada/o">Separada/o</option>
                        <option value="divorciada/o">Divorciada/o</option>
                        <option value="viuda/o">Viuda/o</option>
                        <option value="se ignora">Se ignora</option>
                    </select>
                </div>
            </div>
        </fieldset>
         <!--===========================RESIDENCIA ========================= -->
    <fieldset class="mb-4">
        <hr>
        <legend>12.Residencia Habitual</legend>
        <div class="row">
           <!-- <div class="col-md-4 mb-3">
                <label for="tipoVialidad" class="form-label">Tipo de Vialidad</label>
                <input type="text" class="form-control" id="" required name="">
            </div>-->
            <div class="col-md-4 mb-3">
                <label for="calle" class="form-label">Nombre de la Vialidad</label>
                <input type="text" class="form-control" id="calle" required name="calle">
            </div>
            <div class="col-md-4 mb-3">
                <label for="numero_ext" class="form-label">Número Exterior</label>
                <input type="text" class="form-control" id="numero_ext" required name="numero_ext">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="numero_int" class="form-label">Número Interior</label>
                <input type="text" class="form-control" id="numero_int" required name="numero_int">
            </div>
            <div class="col-md-4 mb-3">
                <label for="tipo_asentamiento_humano" class="form-label">Tipo de Asentamiento Humano</label>
                <input type="text" class="form-control" id="tipo_asentamiento_humano" required name="tipo_asentamiento_humano">
            </div>
            <div class="col-md-4 mb-3">
                <label for="nombre_asentamiento_humano" class="form-label">Nombre del Asentamiento Humano</label>
                <input type="text" class="form-control" id="nombre_asentamiento_humano" required name="nombre_asentamiento_humano">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="codigo_postal" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal"  name="codigo_postal">
            </div>
            <div class="col-md-4 mb-3">
                <label for="localidad" class="form-label">Localidad</label>
                <input type="text" class="form-control" id="localidad"  name="localidad">
            </div>
            <div class="col-md-4 mb-3">
                <label for="municipio" class="form-label">Municipio o Alcaldía</label>
                <input type="text" class="form-control" id="municipio"  name="municipio">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="pais" class="form-label">Entidad Federativa o País</label>
                <input type="text" class="form-control" id="pais" required name="pais">
            </div>
        </div>
    </fieldset>


        <!--===========================ESCOLARIDAD ========================= -->
    <fieldset class="mb-4">
        <hr>
          <legend>13.Escolaridad</legend>
          <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="escolaridad" class="form-label">Escolaridad</label>
                  <select class="form-select" id="escolaridad" required name = "escolaridad">
                      <option value="ninguna">Ninguna</option>
                      <option value="preescolar">Preescolar</option>
                      <option value="primaria">Primaria</option>
                      <option value="secundaria">Secundaria</option>
                      <option value="bachillerato">Bachillerato o Preparatoria</option>
                      <option value="profesional">Profesional</option>
                      <option value="posgrado">Posgrado</option>
                      <option value="se ignora">Se ignora</option>
                  </select>
              </div>
              <div class="col-md-6 mb-3">
                  <label for="escolaridad_completa" class="form-label">13.1 La escolaridad seleccionada es:</label>
                  <select class="form-select" id="escolaridad_completa" required name="escolaridad_completa">
                      <option value="1">Completa</option>
                      <option value="0">Incompleta</option>
                  </select>
              </div>
          </div>
      </fieldset>

      <fieldset class="mb-4">
        <hr>
        <legend>Ocupación y Afiliación a Servicios de Salud</legend>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="ocupacion_habitual" class="form-label">14.Ocupación Habitual</label>
                <input type="text" class="form-control" id="ocupacion_habitual" required name="ocupacion_habitual">
            </div>
            <div class="col-md-6 mb-3">
                <label for="trabajador" class="form-label">¿Trabaja?</label>
                <select class="form-select" id="trabajador" required name="trabajador">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="afiliacion_servicios_salud" class="form-label">15.Afiliación a Servicios de Salud</label>
                <select class="form-select" id="afiliacion_servicios_salud" required name ="afiliacion_servicios_salud">
                    <option value="ninguna">Ninguna</option>
                    <option value="isste">ISSTE</option>
                    <option value="sedena">SEDENA</option>
                    <option value="imss bienestar">IMSS Bienestar</option>
                    <option value="issfam">ISSFAM</option>
                    <option value="imss">IMSS</option>
                    <option value="pemex">PEMEX</option>
                    <option value="semar">SEMAR</option>
                    <option value="otra">Otra</option>
                    <option value="se ignora">Se ignora</option>
                </select>
                <input type="text" class="form-control mt-2" id="afiliacion_servicios_salud" placeholder="Especifique" 
                style="display: none;">
            </div>

            <div class="col-md-6 mb-3">
                <label for="numero_afiliacion_social" class="form-label">15.1 Número de Seguridad Social</label>
                <input type="text" class="form-control" id="numero_afiliacion_social" required name="numero_afiliacion_social">
            </div>
        </div>
    </fieldset>
    <!--=======================================DATOS EL INFORMANTE=========================================== -->
    <fieldset class="mb-4">
            <hr>
            <legend>Datos del Informante.</legend>
        <div class="row"> <!-- hace que se alinien horizontalmente los elementos -->
            <div class="col-md-4 mb-3">
                <label for="nombre_informante" class="form-label">16. Nombre(s)</label>
                <input type="text" class="form-control" id="nombre_informante" required name="nombre_informante">
            </div>
            <div class="col-md-4 mb-3">
                <label for="primer_apellido_informante" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="primer_apellido_informante" name="primer_apellido_informante">
            </div>
            <div class="col-md-4 mb-3">
                <label for="segundo_apellido_informante" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" id="segundo_apellido_informante"  name="segundo_apellido_informante">
            </div>
        </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="parentesco_con_fallecido" class="form-label">17.Parentesco con la(el) fallecida/o</label>
        <input type="text" class="form-control" id="parentesco_con_fallecido" required name="parentesco_con_fallecido">
        </div>

        <div class="col-md-4 mb-3">
            <label for="firma_informante" class="form-label">18.Firma de la (del) informante (nombre)</label>
            <input type="text" class="form-control" id="firma_informante" required name="firma_informante">
        </div>

        <div class="col-md-4 mb-3">
            <label for="sitio_defuncion" class="form-label">19. Sitio donde sucedio la defuncion</label>
            <select class="form-select" id="sitio_defuncion" required name ="sitio_defuncion">
                <option value="SECRETARIA_DE_SALUD">SECRETARIA DE SALUD</option>
                <option value="ISSSTE">ISSSTE</option>
                <option value="IMMS_BIENESTAR">IMMS BIENESTAR</option>
                <option value="IMMS">IMMS</option>
                <option value="PEMEX">PEMEX</option>
                <option value="SEDENA">SEDENA</option>
                <option value="SEMAR">SEMAR</option>
                <option value="OTRA_UNIDAD_MEDICA_PUBLICA">Otra Unidad Medica Publica </option>
                <option value="UNIDAD_MEDICA_PRIVADA">Otra Unidad Medica Privada</option>
                <option value="VIA_PUBLICA">Via publica</option>
                <option value="HOGAR">Hogar</option>
                <option value="OTRO_LUGAR">Otro lugar</option>
                <option value="SE_IGNORA">Se ignora</option>
            </select>
        </div>

        <div class="row">
        <div class="col-md-4 mb-3">
            <label for="nombre_unidad_medica" class="form-label">19.1 Nombre de la unidad medica</label>
            <input type="text" class="form-control" id="nombre_unidad_medica" required name="nombre_unidad_medica">
        </div>
        <div class="col-md-5 mb-3">
            <label for="clave_establecimientos_salud" class="form-label">19.2 Clave Única de Establecimientos de Salud (CLUES)</label>
            <input type="text" class="form-control" id="clave_establecimientos_salud" required name="clave_establecimientos_salud">
        </div>
        </div>
    </fieldset>
     <!--=======================================DOMICILIO DONDE CUCEDIO LA DEFUNCION=========================================== -->
    <fieldset class="mb-4">
        <hr>
        <legend> 20. Domicilio Donde Sucedio La Defunción </legend>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="tipo_vialidad_lugar_defuncion" class="form-label">20.1 Tipo de Vialidad </label>
                <input type="text" class="form-control" id="tipo_vialidad_lugar_defuncion"  name="tipo_vialidad_lugar_defuncion">
            </div>
            <div class="col-md-5 mb-3">
                <label for="nombre_vialidad_lugar_defuncion" class="form-label">20.2 Nombre de la vidalidad</label>
                <input type="text" class="form-control" id="nombre_vialidad_lugar_defuncion"  name="nombre_vialidad_lugar_defuncion">
            </div>
            <div class="col-md-5 mb-3">
                <label for="num_exterior_lugar_defuncion" class="form-label">20.3 Número Exterior</label>
                <input type="number" class="form-control" id="num_exterior_lugar_defuncion"  name="num_exterior_lugar_defuncion">
            </div>
            <div class="col-md-5 mb-3">
                <label for="num_interior_lugar_defuncion" class="form-label">20.2 Número Interior</label>
                <input type="number" class="form-control" id="num_interior_lugar_defuncion"  name="num_interior_lugar_defuncion">
            </div>
            <div class="col-md-5 mb-3">
                <label for="asentamiento_humano_lugar_defuncion" class="form-label">20.5 Tipo de Asentamiento Humano</label>
                <input type="text" class="form-control" id="asentamiento_humano_lugar_defuncion"  name="asentamiento_humano_lugar_defuncion">
            </div>
            <div class="col-md-5 mb-3">
                <label for="nombre_asentamiento_lugar_defuncion" class="form-label">20.6 Nombre Asentamiento Humano </label>
                <input type="text" class="form-control" id="nombre_asentamiento_lugar_defuncion"  name="nombre_asentamiento_lugar_defuncion">
            </div>
            <div class="col-md-5 mb-3">
                <label for="codigoPostal_lugar_defuncion" class="form-label">20.7 Código Postal</label>
                <input type="text" class="form-control" id="codigoPostal_lugar_defuncion"  name="codigoPostal_lugar_defuncion">
            </div>
            <div class="col-md-5 mb-3">
                <label for="lugar_defuncion_localidad" class="form-label">20.8 Localidad</label>
                <input type="text" class="form-control" id="lugar_defuncion_localidad"  name="lugar_defuncion_localidad">
            </div>
            <div class="col-md-5 mb-3">
                <label for="lugar_defuncion_municipio" class="form-label">20.9 Municipio o Alcaldía</label>
                <input type="text" class="form-control" id="lugar_defuncion_municipio"  name="lugar_defuncion_municipio">
            </div>
            <div class="col-md-5 mb-3">
                <label for="entidadFederativa_lugar_defuncion" class="form-label">20.10 Entidad Federativa</label>
                <input type="text" class="form-control" id="entidadFederativa_lugar_defuncion"  name="entidadFederativa_lugar_defuncion">
            </div>
        </div>

    </fieldset>
    <!--=======================================  CARACTERISTICAS DEFUNCION =========================================== -->
    <fieldset class="mb-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="fechaHora_defuncion" class="form-label">21. Fecha y Hora de la Defunción </label>
                <input type="date" class="form-control" id="fecha_defuncion"  name="fecha_defuncion">
                <input type="time" class="form-control" id="hora_defuncion"  name="hora_defuncion" step="1">
            </div>
            <div class="col-md-4 mb-3">
                <label for="atencionMedica_antes_fallecer" class="form-label">22. ¿Tuvo atencion medica durante la enfermedad o lesion antes de la muerte? </label>
                <select class="form-select" id="atencionMedica_antes_fallecer"  name ="atencionMedica_antes_fallecer">
                    <option value="SI">Si</option>
                    <option value="NO">No</option>
                    <option value="SE_IGNORA">Se ignora</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="cirugia_reciente" class="form-label">23. ¿Se realizó una cirugía en las últimas 4 semanas?</label>
                <select class="form-select" id="cirugia_reciente"  name ="cirugia_reciente">
                    <option value="SI">Si</option>
                    <option value="NO">No</option>
                    <option value="SE_IGNORA">Se ignora</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="fecha_cirugia" class="form-label">23.1 Fecha de la cirugía</label>
                <input type="date" class="form-control" id="fecha_cirugia"  name="fecha_cirugia">
            </div>
            <div class="col-md-4 mb-3">
                <label for="motivo_cirugia" class="form-label">23.2 Motivo de cirugía</label>
                <input type="text" class="form-control" id="motivo_cirugia"  name="motivo_cirugia">
            </div>
            <div class="col-md-4 mb-3">
                <label for="defuncion_violenta" class="form-label">24. ¿Fue Defuncion Accidental o Violenta? </label>
                <select class="form-select" id="defuncion_violenta"  name ="defuncion_violenta">
                    <option value="SI">Si</option>
                    <option value="NO">No</option>
                    <option value="SE_IGNORA">Se ignora</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="tipo_defuncion" class="form-label">25. Tipo De Defunción</label>
                <select class="form-select"  id="tipo_defuncion"  name="tipo_defuncion">
                    <option value="enfermedad">Enfermedad</option>
                    <option value="accidente">Accidente</option>
                    <option value="agresion">Agresión</option>
                    <option value="lesion_autoinfligida">Lesiones autoinfligidas intencionalmente</option>
                    <option value="intervencion_legal">Intervención legal</option>
                    <option value="ignora">Se ignora</option>
                </select>
            </div>
        </div>
    </fieldset>

    <!--=======================================   Causas de la Defunción   =========================================== -->
    <fieldset class="mb-4">
        <hr>
        <legend>26. Causas de la Defunción</legend>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">PARTE I - Causas en orden cronológico (de la más reciente a la más antigua)</label>
                <div class="row mb-2">
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="causa_a" placeholder="a) Enfermedad o condición que causó directamente la defunción">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="intervalo_a"  required placeholder="Intervalo aproximado">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"> </label>
                    <textarea class="form-control" name="otras_condiciones" rows="3" 
                    placeholder="Reporte la cadena de afectaciones o eventos en debido orden (si aplica).Anote la causa básica en la ultima línea utilizada. "></textarea>
                </div>
                
            </div>
        
            <div class="mb-3">
                <label class="form-label">PARTE II - Otras condiciones significativas</label>
                <textarea class="form-control" name="otras_condiciones" rows="3"></textarea>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Código CIE</label>
                    <input type="text" class="form-control" name="codigo_cie">
                </div>
            </div>
            </div>
        </div>
    </fieldset>


    <!--=======================================   NECROPSIA -SI/NO  =========================================== -->
    <fieldset class="mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="necropsia" class="form-label">27. ¿Se practicó necropsia?</label>
                    <select class="form-select" id="necropsia" required name="necropsia">
                        <option value="SI">Sí</option>
                        <option value="NO">No</option>
                        <option value="SE_IGNORA">Se ignora</option>
                    </select>
                </div>
    
                <div class="col-md-4 mb-3">
                    <label for="hallazgos_necropsia" class="form-label">27.1 ¿Los hallazgos se utilizaron en la certificación?</label>
                    <select class="form-select" id="hallazgos_necropsia" name="hallazgos_necropsia">
                        <option value="SI">Sí</option>
                        <option value="NO">No</option>
                    </select>
                </div>
            </div>        
        </div>
            
        <!--=======================================   Sección específica para mujeres de 10 a 54 años  =========================================== -->
        <div class="card-body">
            <div class="row">
                <hr>
                <legend> <br/>28. SI LA DEFUNCIÓN CORRESPONDE A UNA MUJER DE 10 A 54 AÑOS<br/><br/> </legend>
                <div class="col-md-4 mb-3">
                    <label for="muerte_embarazo" class="form-label">28.1 Especifique si la muerte ocurrió durante:</label>
                    <select class="form-select" id="muerte_embarazo" name="muerte_embarazo">
                        <option value="EMBARAZO">El embarazo</option>
                        <option value="PARTO">El parto</option>
                        <option value="PUERPERIO">El puerperio</option>
                        <option value="PUERPERIO">43 días a 11 meses después del parto o aborto</option>
                        <option value="NO_EMBARAZADA">No estuvo embarazada en los últimos 11 meses</option>
                    </select>
                </div>
    
                <div class="col-md-4 mb-3">
                    <label for="causas_embarazo" class="form-label">28.2 ¿Las causas fueron complicaciones del embarazo, parto o puerperio?</label>
                    <select class="form-select" id="causas_embarazo" name="causas_embarazo">
                        <option value="SI">Sí</option>
                        <option value="NO">No</option>
                        <option value="SE_IGNORA">Se ignora</option>
                    </select>
                </div>
    
                <div class="col-md-4 mb-3">
                    <label for="complicaciones_embarazo" class="form-label">28.3 ¿Las causas anotadas complicaron el embarazo, parto o puerperio?</label>
                    <select class="form-select" id="complicaciones_embarazo" name="complicaciones_embarazo">
                        <option value="SI">Sí</option>
                        <option value="NO">No</option>
                    </select>
                </div>

                 <!--=======================================   Detalles Medicos de Defunción  =========================================== -->
                <hr>
                <legend>Detalles Medicos de Defunción</legend>
                <div class="col-md-4 mb-3">
                    <label for="muerte_encefalica" class="form-label">29. ¿La(o) fallecida(o) presentó muerte encefálica?</label>
                    <select class="form-select" id="muerte_encefalica" name="muerte_encefalica">
                        <option value="SI">Sí</option>
                        <option value="NO">No</option>
                    </select>
                </div>
    
                <div class="col-md-4 mb-3">
                    <label for="donacion_organos" class="form-label">29.1 ¿Fue donado/a de órganos?</label>
                    <select class="form-select" id="donacion_organos" name="donacion_organos">
                        <option value="SI">Sí</option>
                        <option value="NO">No</option>
                        <option value="SE_IGNORA">Se ignora</option>
                    </select>
                </div>
            </div>    
        </div>


        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="causa_basica" class="form-label">30. Causa básica de defunción</label>
                    <input type="text" class="form-control" id="causa_basica" name="causa_basica">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="codigo_adicional" class="form-label">30.1 Código adicional</label>
                    <input type="text" class="form-control" id="codigo_adicional" name="codigo_adicional">
                </div>
    
                <div class="col-md-4 mb-3">
                    <label for="desempeno_trabajo" class="form-label">31. ¿Ocurrió en el desempeño de su trabajo?</label>
                    <select class="form-select" id="desempeno_trabajo" name="desempeno_trabajo">
                        <option value="SI">Sí</option>
                        <option value="NO">No</option>
                        <option value="SE_IGNORA">Se ignora</option>
                    </select>
                </div>
    
                <div class="col-md-4 mb-3">
                    <label for="lugar_lesion" class="form-label">32. Lugar donde ocurrió la lesión (accidental o violenta)</label>
                    <select class="form-select" id="lugar_lesion" name="lugar_lesion">
                        <option value="VIVIENDA_PARTICULAR">Vivienda particular</option>
                        <option value="VIVIENDA_COLECTIVA">Vivienda colectiva (asilo, orfanato, etc.)</option>
                        <option value="CALLE">Calle o carretera (vía pública)</option>
                        <option value="ESCUELA">Escuela u oficina pública</option>
                        <option value="AREA_DEPORTIVA">Área deportiva</option>
                        <option value="AREA_COMERCIAL">Área comercial o de servicio</option>
                        <option value="AREA_INDUSTRIAL">Área industrial (taller, fábrica u obra)</option>
                        <option value="GRANJA">Granja (rancho o parcela)</option>
                        <option value="OTRO">Otro</option>
                        <option value="SE_IGNORA">Se ignora</option>
                    </select>
                </div>
    
                <div class="col-md-4 mb-3">
                    <label for="acta_ministerio" class="form-label">33. La defuncion fue registrada en el Ministerio Público con el acta número</label>
                    <input type="text" class="form-control" id="acta_ministerio" name="acta_ministerio">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="relacion_agresor" class="form-label">34. Relación del presunto agresor con la(o) fallecida(o)</label>
                    <input type="text" class="form-control" id="relacion_agresor" name="relacion_agresor">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="descripcion_lesion" class="form-label">35. Describa brevemente la situación , circunstancia o motivos en que se produjo la lesión 
                        (accidental , violenta o si es intoxicacion, especifique el agente tóxico):
                    </label>
                    <input type="text" class="form-control" id="descripcion_lesion" name="descripcion_lesion">
                </div>
            </div>
        </div>
        
        <!--=====================================DOMICILIO DONDE OCURRIO LA LESIÓN ======================================== -->
        <div class="card-body">
            <div class="row">
                <hr>
                <legend>36. Domicilio donde ocurrió la lesión (accidental o violenta)</legend>
                <div class="col-md-4 mb-3">
                    <label for="tipo_vialidad_donde_ocurrio" class="form-label">36.1 Tipo de Vialidad</label>
                    <input type="text" class="form-control" id="tipo_vialidad_donde_ocurrio" name="tipo_vialidad_donde_ocurrio">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="nombre_vialidad" class="form-label">36.2 Nombre de la vialidad</label>
                    <input type="text" class="form-control" id="nombre_vialidad" name="nombre_vialidad">
                </div>
                
                <div class="col-md-2 mb-3">
                    <label for="num_ext" class="form-label">36.3 Núm. Ext.</label>
                    <input type="text" class="form-control" id="num_ext" name="num_ext">
                </div>
                
                <div class="col-md-2 mb-3">
                    <label for="num_int" class="form-label">36.4 Núm. Int.</label>
                    <input type="text" class="form-control" id="num_int" name="num_int">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="tipo_asentamiento" class="form-label">36.5 Tipo de asentamiento humano</label>
                    <input type="text" class="form-control" id="tipo_asentamiento" name="tipo_asentamiento">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="nombre_asentamiento" class="form-label">36.6 Nombre del asentamiento humano</label>
                    <input type="text" class="form-control" id="nombre_asentamiento" name="nombre_asentamiento">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="ocurrio_lesion_codigo_postal" class="form-label">36.7 Código Postal</label>
                    <input type="text" class="form-control" id="ocurrio_lesion_codigo_postal" name="ocurrio_lesion_codigo_postal">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="ocurrio_lesion_localidad" class="form-label">36.8 Localidad</label>
                    <input type="text" class="form-control" id="ocurrio_lesion_localidad" name="ocurrio_lesion_localidad">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="ocurrio_lesion_municipio" class="form-label">36.9 Municipio o Alcaldía</label>
                    <input type="text" class="form-control" id="ocurrio_lesion_municipio" name="ocurrio_lesion_municipio">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="entidad_federativa" class="form-label">36.10 Entidad federativa</label>
                    <input type="text" class="form-control" id="entidad_federativa" name="entidad_federativa">
                </div>

            </div>
        </div>
        <hr>


        <!--=====================================DATOS DEL CERTIFICANTE ======================================== -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="certificada_por" class="form-label">37. CERTIFICADA POR </label>
                    <select  class="form-select" name="certificada_por" id="certificada_por">
                        <option value="Medico_Tratante">1.- Medica/o tratante</option>
                        <option value="Medica_Legista">2.- Médica/o legista</option>
                        <option value="Otro_medico">Otra/o Médica/o</option>
                        <option value="Persona_autorizada_secretaria_salud"></option>
                        <option value="Autoridad_civil">Autoridad Civil</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="otro_certificada_por" class="form-label">Otro (Especifique) </label>
                    <input type="text" class="form-control" id="otro_certificada_por" name="otro_certificada_por">
                </div>
            </div>
            <hr>
        </div>
        
        <div class="card-body">
            <div class="row">
                <legend>38. Datos del Certificante</legend>
                <div class="col-md-4 mb-3">
                    <label for="nombre_certificante">Nombre (s)</label>
                    <input type="text" class="form-control" id="nombre_certificante" name="nombre_certificante">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="apellidoPaterno_certificante">Primer Apellido</label>
                    <input type="text" class="form-control" id="apellidoPaterno_certificante" name="apellidoPaterno_certificante">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="apellidoMaterno_certificante">Segundo Apellido</label>
                    <input type="text" class="form-control" id="apellidoMaterno_certificante" name="apellidoMaterno_certificante">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="certificante_sies_medico">39. Si la (el) Certificante es Médica/o</label>
                    <input type="text" class="form-control" id="certificante_sies_medico" name="certificante_sies_medico">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="firma_certificante">40. Firma de la (del) Certificante (nombre)</label>
                    <input type="text" class="form-control" id="firma_certificante" name="firma_certificante">
                </div>
            </div>
        </div>

<!--=====================================DOMICILIO Y TELEFONO ======================================== -->
        <div class="card-body">
            <div class="row">
                <hr>
                <legend>41. Domicilio y Telefono del Certificante</legend>
                <div class="col-md-4 mb-3">
                    <label for="tipo_vialidad_41" class="form-label">41.1 Tipo de vialidad</label>
                    <input type="text" class="form-control" id="tipo_vialidad_41" name="tipo_vialidad_41">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="nombre_vialidad_41" class="form-label">41.2 Nombre de la vialidad</label>
                    <input type="text" class="form-control" id="nombre_vialidad_41" name="nombre_vialidad_41">
                </div>
                
                <div class="col-md-2 mb-3">
                    <label for="num_ext_41" class="form-label">41.3 Núm. Ext.</label>
                    <input type="text" class="form-control" id="num_ext_41" name="num_ext_41">
                </div>
                
                <div class="col-md-2 mb-3">
                    <label for="num_int_41" class="form-label">41.4 Núm. Int.</label>
                    <input type="text" class="form-control" id="num_int_41" name="num_int_41">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="tipo_asentamiento_41" class="form-label">41.5 Tipo de asentamiento humano</label>
                    <input type="text" class="form-control" id="tipo_asentamiento_41" name="tipo_asentamiento_41">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="nombre_asentamiento_41" class="form-label">41.6 Nombre del asentamiento humano</label>
                    <input type="text" class="form-control" id="nombre_asentamiento_41" name="nombre_asentamiento_41">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="certificante_codigo_postal" class="form-label">41.7 Código Postal</label>
                    <input type="text" class="form-control" id="certificante_codigo_postal" name="certificante_codigo_postal">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="certificante_localidad" class="form-label">41.8 Localidad</label>
                    <input type="text" class="form-control" id="certificante_localidad" name="certificante_localidad">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="certificante_municipio" class="form-label">41.9 Municipio o Alcaldía</label>
                    <input type="text" class="form-control" id="certificante_municipio" name="certificante_municipio">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="entidad_federativa_41" class="form-label">41.10 Entidad federativa</label>
                    <input type="text" class="form-control" id="entidad_federativa_41" name="entidad_federativa_41">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="telefono_41" class="form-label">41.11 Teléfono</label>
                    <input type="tel" class="form-control" id="telefono_41" name="telefono_41">
                </div>
                <hr>
                <!--=======================FECHA DE CERTIFICACION =================================== -->
                <div class="col-md-12 mb-3">
                    <h5 class="form-label">42. FECHA DE CERTIFICACIÓN</h5>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="fecha_certificacion" class="form-label">42. FECHA DE CERTIFICACIÓN</label>
                    <input type="date" class="form-control" id="fecha_certificacion" name="fecha_certificacion">
                </div>
                <hr>
            </div>
        </div>


        <!--=====================================Datos del Registro Civil====================================== -->
        <div class="card-body">
            <div class="row">
                <legend>Datos del Registro Civil</legend>
                <div class="col-md-12 mb-3">
                    <h5 class="form-label">43. LA DEFUNCIÓN FUE INSCRITA EN LA OFICIALÍA O JUZGADO</h5>
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="numero_registro" class="form-label">Núm.</label>
                    <input type="text" class="form-control" id="numero_registro" name="numero_registro">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="numero_libro" class="form-label">Núm. Libro</label>
                    <input type="text" class="form-control" id="numero_libro" name="numero_libro">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="numero_acta" class="form-label">Núm. Acta</label>
                    <input type="text" class="form-control" id="numero_acta" name="numero_acta">
                </div>
                
                <div class="col-md-12 mb-3">
                    <h5 class="form-label">44. LUGAR DE REGISTRO</h5>
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="registro_localidad" class="form-label">44.1 Localidad</label>
                    <input type="text" class="form-control" id="registro_localidad" name="registro_localidad">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="registro_municipio" class="form-label">44.2 Municipio o Alcaldía</label>
                    <input type="text" class="form-control" id="registro_municipio" name="registro_municipio">
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="entidad_registro" class="form-label">44.3 Entidad federativa</label>
                    <input type="text" class="form-control" id="entidad_registro" name="entidad_registro">
                </div>
                
                <div class="col-md-12 mb-3">
                    <h5 class="form-label">45. FECHA DE REGISTRO</h5>
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="fecha_de_registro" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="fecha_de_registro" name="fecha_de_registro">
                </div>
                <div class="col-md-12 mb-3 alert alert-info">
                    <small><strong>ATENCIÓN:</strong> EL PERSONAL DEL REGISTRO CIVIL DEBE REMITIR ESTE ORIGINAL A LA SECRETARÍA DE SALUD</small>
                </div>
            </div>
        </div>

    </fieldset>

</div>
            </fieldset>
              <button class="btn btn-primary mt-3">Guardar</button>
              <a href="{{route ('defuncion-registro')}}" class="btn btn-danger mt-3">Cancelar</a>
            </form>
            </div>
          </div>
      </div>
    </section>

  </main>
  @endsection