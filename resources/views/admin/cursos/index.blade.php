@extends('layout.site')
@section('titulo','Cursos')


@section('conteudo')
	<div class="container">
		<h3>Lista de Cursos</h3>
		<div class="row">
			<table class="highlight">
				<thead>
					<tr>
						<td>ID</td>
						<td>Título</td>
						<td>Descrição</td>
						<td>Imagem</td>
						<td>Publicado</td>
						<td>Ação</td>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{$registro->id}}</td>
							<td>{{$registro->titulo}}</td>
							<td>{{$registro->descricao}}</td>
							<td><img height="50" src="{{asset($registro->imagem)}}" alt="{{$registro->id}}"></td>
							<td>{{$registro->publicado}}</td>
							<td class="btn orange"><a href="{{ route('admin.cursos.editar',$registro->id) }}">Editar</a></td>
							<td class="btn red"><a href="{{ route('admin.cursos.deletar',$registro->id) }}">Deletar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a class="btn blue" href="{{ route('admin.cursos.adicionar') }} ">Adicionar</a>
		</div>
	</div>
@endsection	