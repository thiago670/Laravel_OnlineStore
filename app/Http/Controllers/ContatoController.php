<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){
    	
		$contatos=[
			(object)["nome"=>'maria',"telefone"=>'49786437'],
			(object)["nome"=>'jose',"telefone"=>'965460167']
		];
    	$contato = new Contato();
        dd($contato->lista());

        return view('contato.index',compact('contatos'));
    }
    public function criar(Request $req){
    	dd($req->All());
    }
}
