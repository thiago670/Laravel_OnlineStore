@extends('layout.site')
@section('titulo','Cursos')


@section('conteudo')
	<div class="container">
		<h3>Adicionar Curso</h3>
		<div class="row">
			<form action="{{ route('admin.cursos.salvar') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

				@include('admin.cursos._form')

				<button class="btn deep-orange">Salvar</button>

			</form>
		</div>
	</div>
@endsection	