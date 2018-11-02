@extends('layouts.app')
@section('title', 'Asignacion')
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('asignacion.index') }}">Lista de asignaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('asignacion.create') }}">Nueva asignacion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
    <div class="container">
      <div class="row justify-content-center">
            <div class="card-body text-center">
      <form method="post" action="{{ route('asignacion.store') }}">
        <h3>Ingrese los Datos</h3>
        <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              {{ csrf_field() }}
              <label for="fecha_asignacion">Fecha de asignacion: </label>
              <input type="date" class="form-control" name="fecha_asignacion"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
            <!--
              <label for="nuevo_reingreso">Nuevo/Reingreso: </label>
              <input type="text" class="form-control" name="nuevo_reingreso"/>
            -->
            <label for="nuevo_reingreso">Seleccione nuevo/reingreso</label>
            <select class="form-control" name="nuevo_reingreso" id="nuevo_reingreso">
              <option value="1">Nuevo</option>
              <option value="2">Reingreso</option>
            </select>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="certificado">Certificado: </label>
              <input type="text" class="form-control" name="certificado"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="clave_estudiante">Clave del estudiante: </label>
              <input type="text" class="form-control" name="clave_estudiante"/>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="estudiante_id">Estudiante</label>
              <select class="form-control" name="estudiante_id" id="estudiante_id">
                  @foreach ($estudiantes as $estudiante)
                    <option value="{{ $estudiante['id'] }}">{{ $estudiante['p_nombre'] }} {{ $estudiante['s_nombre'] }} {{ $estudiante['p_apellido'] }} {{ $estudiante['s_apellido'] }}</option>
                  @endforeach
              </select>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="ciclo_id">Ciclo</label>
              <select class="form-control" name="ciclo_id" id="ciclo_id">
                  @foreach ($ciclos as $ciclo)
                    <option value="{{ $ciclo['id'] }}">{{ $ciclo['fecha_inicio'] }} - {{ $ciclo['fecha_fin'] }}</option>
                  @endforeach
              </select>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="grado_id">Grado</label>
              <select class="form-control" name="grado_id" id="grado_id">
                  @foreach ($grados as $grado)
                    <option value="{{ $grado['id'] }}">{{ $grado['grado'] }}</option>
                  @endforeach
              </select>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="form-group">
          <div class="form-group label-floating">
              <label for="seccion_id">Seccion</label>
              <select class="form-control" name="seccion_id" id="seccion_id">
                  @foreach ($secciones as $seccion)
                    <option value="{{ $seccion['id'] }}">{{ $seccion['seccion'] }} - {{ $seccion['grado_id'] }}</option>
                  @endforeach
              </select>
          </div>
          </div>
          </div>
          <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection
