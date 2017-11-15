<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista(){

    	return (object)[
    		["nome"=>"Thiago","telefone"=>"49786437"],
    		["nome"=>"Alves","telefone"=>"965460167"]
    	];
    }
}
