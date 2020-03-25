<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use LaravelQRCode\Facades\QRCode;
use PDF;

class ProjetoController extends Controller
{
    public function verProjeto($codigo){
        $projeto = DB::table('projeto')->where('codigo', $codigo)->first();
        
        return view('verIndividualProjeto', compact('projeto'));
    }
    public function gerarQrCode($id_projeto){
        $codigo_publico  = DB::table('projeto')
                    ->select('codigo')
                    ->where('id_projeto', $id_projeto)->first();

                    
        $img = QRCode::url('10.0.0.106:8000/projeto/'.$codigo_publico->codigo.'/visualizar')
        ->setSize(8)
        ->setMargin(2)
        ->png();
        
     return $img;    
                  /*QRCode::url('10.0.0.106:8000//projeto/'.$codigo_publico.'/visualizar')
                  ->setSize(8)
                  ->setMargin(2)
                  ->png();*/ 
    }

    public function irParaPaginaQrCode($id_projeto){
        return view('QrCodeProjeto', compact('id_projeto'));

    }



    public function index(){
        $projetos = DB::table('projeto')->select('*')->get();
        $projetos = $projetos->all();
        return view('listProjetos', compact('projetos'));
    }

    public function create(){
        return view('projetoCadastrar');
    }
    public function store(Request $request){
        
        DB::table('projeto')->insert(
            [
                'titulo'=>$request->titulo, 
                'resumo'=>$request->resumo,
                'codigo' => uniqid()
            ]);
        return redirect('/')->with('success', 'Projeto cadastrado!');
        
    }


    //certificação

    public function emitirCertificado(Request $request){
        $projeto = DB::table('projeto')->where('codigo', $request->codigo)->first();

        
        
        $pdf = PDF::loadView('pdf', compact('projeto'));
        
        return $pdf->setPaper('a4', 'landscape')->stream('certificado.pdf');

    }
}
