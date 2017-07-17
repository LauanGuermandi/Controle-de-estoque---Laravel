@extends('templates.template')

@section('content')
	<h1>Produtos</h1>
	<table class="table table-hover table-bordered">
		@foreach($produtos as $p)
			<tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
				<td>{{$p->nome}}</td>
				<td>{{$p->valor}}</td>
				<td>{{$p->descricao}}</td>
				<td>{{$p->quantidade}}</td>
				<td><a href="/produtos/remover/{{$p->id}}" >Remover</a></td>
				<td><a href="/produtos/detalhes?id={{$p->id}}" >Visualizar</a></td>
			</tr>
		@endforeach

		@if(empty($produtos))
			<div class="alert alert-danger">
				Você não tem nenhum produto cadastrado.
			</div>
		@endif
	</table>
	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
		</div>
	@endif
@endsection