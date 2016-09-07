<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerdigotoController extends Controller {

    public function gravagato($gato)
    {
        session(['gato' => $gato]);
        return 'Gravado o gato:'.$gato;
    }

    public function vergato()
    {
        $gato = session('gato', 'Não achei nenhum gato');
        return 'Gato:'.$gato;
    }

	public function index_01()
	{
		return "Olá PerdiGoto!";
	}

	public function index_02()
	{
		$dados = ['ola'=>'Perdigato'];
		return $dados;
	}
}
