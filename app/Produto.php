<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
	protected $table = 'produtos';
	protected $timestamp = false;
	protected $fillable = array('nome', 'descricao', 'valor', 'quantidade');
	protected $guarded = ['id'];
}
