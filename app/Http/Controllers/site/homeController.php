<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class homeController extends Controller
{
    public function index(){
    	$cursos=Curso::paginate(1);
    	return view('home',compact('cursos'));
    }
}
