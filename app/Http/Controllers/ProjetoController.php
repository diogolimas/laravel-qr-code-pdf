<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function verProjeto($id){
        dd($id);
    }

    public function create(){
        return view('projetoCadastrar');
    }
    public function store(Request $request){
        
    }
}
