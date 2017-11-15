@extends('layout.site')
@section('titulo','Contatos')


@section('conteudo')

	<h3>essa é a view index contato</h3>

	@foreach($contatos as $contato)

	<p>{{ $contato->nome }}</p>
	<p>{{ $contato->telefone }}</p>


	@endforeach

@endsection	

