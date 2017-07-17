@extends('templates.template')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar produto</div>
                	<div class="panel-body">

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
									<input class="form-control" value="{{old('nome')}}" type="text" name="nome"/>
								</div>
								<div class="form-group">
									<label>Descrição:</label>
									<input class="form-control" value="{{old('descricao')}}" type="text" name="descricao"/>
								</div>
								<div class="form-group">
									<label>Valor:</label>
									<input class="form-control" value="{{old('valor')}}" type="text" name="valor"/>
								</div>
								<div class="form-group">
									<label>Quantidade:</label>
									<input class="form-control" value="{{old('quantidade')}}" type="number" name="quantidade"/>
								</div>
								<div class="form-group">
									<input class="form-control btn-primary" type="submit" value="Adicionar"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection