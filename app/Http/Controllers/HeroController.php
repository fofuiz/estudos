<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\hero;

class HeroController extends Controller {

    public function index($ativo)
    {

		$heros = hero::where('ativo', $ativo)->orderBy('id', 'asc')->take(3)->get();
		return $heros;


    	/*
		DB::table('hero')->insert([
		    ['nome' => 'Josepilha', 'ativo' => 1],
		    ['nome' => 'Hiramuki', 'ativo' => 1],
		    ['nome' => 'gato-banana', 'ativo' => 0],
		    ['nome' => 'Bandida', 'ativo' => 2],
		    ['nome' => 'Coxa', 'ativo' => 2]
		]);
		*/
		/*
		$id = DB::table('hero')->insertGetId(
    		['nome' => 'Fofinha', 'ativo' => 1]
		);
		*/
		/*
		DB::table('hero')
            ->where('id', 9)
            ->update(['nome' => 'fofura']);
        */
		//DB::table('hero')->increment('ativo', 3); //Inutil, faz update em tudo
		//DB::table('hero')->increment('ativo', 1, ['nome' => 'Fofura']); //Não faz conforme se observa, incrementa e muda todos os nomes para Fofura

		//DB::table('hero')->increment('ativo', 1, ['nome' => 'Fofura']);

		

        //$tabhero = DB::select('select nome from hero where ativo=?', [$ativo]);     
		//$tabhero = DB::table('hero')->select('id as chave','nome', 'ativo as status')->get();

        //$tabhero = DB::table('hero')->where('nome', 'WolveHira')->first(); // Manda a linha e os campos como stdClass
		//$tabhero = DB::table('hero')->where('nome', 'Josefineira')->value('nome');
		//$tabhero = DB::table('hero')->pluck('nome','id');

		//$tabhero = DB::table('hero')->count();
		//$tabhero = DB::table('hero')->min('id');

		//$tabhero = DB::table('hero')->where('ativo', 1)->avg('id');

		//var_dump($tabhero);
		//die;

        //return view('Hero', ['tabhero' => $tabhero]);
    }

}
?>
