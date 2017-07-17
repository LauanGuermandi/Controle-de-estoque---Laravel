@extends('templates.template')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>
                <div class="panel-body">
					@if(!empty($produtos))
						<table class="table table-hover table-bordered">
							<thead class="inverse bg-primary">
								<tr>
									<th>Nome</th>
									<th>Valor</th>
									<th>Descrição</th>
									<th>Quantidade</th>
								</tr>
							</thead>
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
							</table>

							<h4>
								<span class="label label-danger pull-right">
									*Um ou menos itens no estoque!
								</span>
							</h4>
						@else
							<spam class="alert alert-danger">Não há produtos cadastrados</spam>
						@endif
					@if(old('nome'))
						<br><br>
						<div class="alert alert-success">
							<strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection