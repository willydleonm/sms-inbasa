@extends('layouts.app')
@section('title', 'Notas')
@section('content')
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">		
		<nav class="navbar navbar-expand-lg bg-primary">
		  <div class="container">		    		    		    
		    <div class="collapse navbar-collapse">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="{{ route('docentes.notas.index') }}">Notas</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('docentes.notas.create') }}">Registrar Notas</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('detalle_nota.index') }}">Detalle Notas</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('detalle_nota.create') }}">Registrar Detalle Notas</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table id="datatable_table" class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>No</th>	
					<th>Total Bloque</th>					
					<th>Detalles</th>
					<th>Asignacion<th>
					<th>Creado</th>
					<th>Actualizado</th>
					<th>Eliminado</th>
					<th>Opciones</th>

				</thead>		
				@foreach($notas as $n)		
				<tr>
					<td>{{$n->total_bloque}}</td>
					<td>{{$n->detalles}}</td>
					<td>{{$n->asignacion_id}}</td>
					<td>{{$n->created_at}}</td>
					<td>{{$n->updated_at}}</td>
					<td>{{$n->deleted_at}}</td>
					<td>
						<a href="#">
							<button class="btn btn-info btn-sm" title="Ver">
								<i class="material-icons">visibility</i>
								Ver
							</button>
						</a>
						<a href="#">
							<button class="btn btn-primary btn-sm" title="Editar">
								<i class="material-icons">edit</i>
								Editar
							</button>
						</a>
						<a href="" data-target="#" data-toggle="modal">
							<button class="btn btn-danger btn-sm" title="Eliminar">
								<i class="material-icons">delete</i>
								Eliminar
							</button>
						</a>
					</td>
				</tr>	
				@endforeach						
			</table>
		</div>		
	</div>
</div>
@endsection