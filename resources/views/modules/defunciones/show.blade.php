@extends('layouts.main')
@section('titulo ', $titulo)

@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Eliminar Registro</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">¿Estas seguro de elimiar este registro?</h5>


              <form action="{{route('defunciones.destroy', $item->id_fallecido)}}" method = "POST">
                @csrf
                @method('DELETE')
                        <label for="nombre_fallecido" class="form-label" >Nombre del Fallecido</label>
                        <input type="text" class="form-control" readonly name = "nombre_fallecido" id="nombre_fallecido" 
                        value="{{$item->nombre_fallecido}}">
              <button class="btn btn-danger mt-3">Eliminar</button>
              <a href="{{route ('defuncion-registro')}}" class="btn btn-primary mt-3">Cancelar </a>
            </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  @endsection