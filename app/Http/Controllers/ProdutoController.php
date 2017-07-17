<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProdutosRequest;
use App\Produto;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

	public function __construct() {
		$this->middleware('auth-middleware', ['only' => ['adiciona', 'remover']]);
	}

	public function lista() {
		//$produtos = DB::select('select * from produtos;');

		$produtos = Produto::all();

		return view('produto.listagem')->with('produtos', $produtos);
	}

	public function detalhes() {

		$id = Request::input('id');

		//$id = Produto::find('id');

		$resposta = DB::select('select * from produtos where id=?', [$id]);

		if (!empty($resposta)) {
			return view('produto.detalhes')->with('p', $resposta[0]);
		}

	}

	public function novo() {
		return view('produto.novo');
	}

	public function adiciona(ProdutosRequest $request) {
		/*
			$nome = Request::input('nome');
			$valor = Request::input('valor');
			$descricao = Request::input('descricao');
			$quantidade = Request::input('quantidade');
		*/

		/*
			$dados = Request::all();
			$produto = new Produto($dados);
			$produto->save();
		*/

		Produto::create($request->all());

		return redirect()
			->action('ProdutoController@lista')
			->withInput(Request::only('nome'));
	}

	public function listaJson() {
		$produtos = Produto::all();
		return response()->json($produtos);
	}

	public function remover($id) {

		$produto = Produto::find($id);
		if (!empty($produto)) {
			$produto->delete();
			return redirect()->action('ProdutoController@lista');
		}
	}
}
