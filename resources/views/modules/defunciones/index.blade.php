@extends('layouts.main')
@section('titulo ', $titulo)

@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Registros de Defunciones <i class="fa-solid fa-book-skull"></i></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route ('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Adminstrador de Defunciones</h5>
              <p>Administrar los registros de defuncion del hospital.</p>
              <a href="{{route ('defunciones.create')}}"  class="btn btn-primary ">
                 Agregar nueva Defuncion <i class="fa-solid fa-square-plus"></i></a>
              <hr>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Nombre del Fallecido</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                  
                  <tr>
                    <td>{{$item->nombre_fallecido}}</td>
                    <td>
                      <!--MODIFICAR-->
                        <a href="{{ route ("defunciones.edit",$item->id_fallecido)}}"class= "btn btn-info">
                          <i class="fa-solid fa-file-pen"></i></a>

                          <!--ELIMINAR-->
                        <a href="{{ route("defunciones.show", $item->id_fallecido) }}"class= "btn btn-danger">
                          <i class="fa-solid fa-trash-can"></i></a>
                       
                        <!--DESCRAGAR-->
                        <form action="{{ route('generate.pdf', $item->id_fallecido) }}" method="post" style="display: inline-block;">
                          @csrf
                          <button type="submit" class="btn btn-success">
                              <i class="fa-solid fa-download"></i>
                          </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  @endsection