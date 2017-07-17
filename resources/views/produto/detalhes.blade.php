@extends('templates.template')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detalhes do produto: {{$p->nome}}</div>
                <div class="panel-body">
					<ul>
						<li>
							<b>Valor:</b> R$ {{$p->valor}}
						</li>
						<li>
							<b>Descrição: </b>{{$p->descricao}}
						</li>
						<li>
							<b>Quantidade em estoque: </b>{{$p->quantidade}}
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection