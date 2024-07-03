<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\jogadores;


class controellerPrincipal extends Controller
{
    public function retornarViewCadastro(){
        return view('telaCadastro');
    }
    public function retornarViewMenu(){
        return view('menu');
    }
    public function retornarViewVizualizar(){
        $valoraresDaTela =  jogadores::get();
        return view('telaVizualizacao')->with('valorTela',  $valoraresDaTela); 
    }
    public function deletaEVoltaParaVizualizar(){
        $idParaDeletar = $_GET['idDelete'];
        $itemParaDeletar = jogadores::find($idParaDeletar);
        $itemParaDeletar->delete();
        return redirect("/vizualizar");
    }
    public function telaFormDeAlterarComItem(){
        $idItem = $_GET['idAtualizar']; 
        $item = jogadores::find($idItem);
        return view('telaAlterar')->with('jogador', $item);
    }
    public function telaAlteraOItemEVoltaParaVizualizar(Request $req){
        $jogadorALterar = jogadores::find($req->id);

        $jogadorALterar->nomeJogador = $req->nomeJogador;
        $jogadorALterar->nacionalidadeJogador = $req->nascionalidadeJogador; 
        $jogadorALterar->numCamisaJogador = $req->numCamisaJogador; 
        $jogadorALterar->timeJogador = $req->timeJogador; 
        $jogadorALterar->numCartoesJogador = $req->cartoesVermelhosJogador; 
        $jogadorALterar->numLesoesJogador = $req->lesoesJogador; 
        $jogadorALterar->save();
        return redirect("/vizualizar");
    }
    public function cadastroRetornaTelaPrincipal(Request $req)
    {
        $jogador = new jogadores();
        
        $jogador->nomeJogador = $req->nomeJogador;
        $jogador->nacionalidadeJogador = $req->nacionalidadeJogador;
        $jogador->numCamisaJogador = $req->numCamisaJogador;
        $jogador->timeJogador = $req->timeJogador;
        $jogador->numCartoesJogador = $req->cartoesVermelhosJogador;
        $jogador->numLesoesJogador = $req->lesoesJogador;
        
        $jogador->save();
        return redirect("/");
    }
}
