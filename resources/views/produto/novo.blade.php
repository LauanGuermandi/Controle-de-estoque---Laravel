@extends('templates.template')

@section('content')
	<h1>Adicionar novo produto</h1>
	@if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</div>
	@endif
	<form action="/produtos/adiciona" method="POST">
		<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>

		<div class="form-group">
			<div class="form-group">
				<label>Nome:</label>
				<input class="form-control" type="text" name="nome"/>
			</div>
			<div class="form-group">
				<label>Descrição:</label>
				<input class="form-control" type="text" name="descricao"/>
			</div>
			<div class="form-group">
				<label>Valor:</label>
				<input class="form-control" type="text" name="valor"/>
			</div>
			<div class="form-group">
				<label>Quantidade:</label>
				<input class="form-control" type="number" name="quantidade"/>
			</div>
			<div class="form-group">
				<input class="form-control btn-primary" type="submit" value="Adicionar"/>
			</div>

		</div>

	</form>
@endsection