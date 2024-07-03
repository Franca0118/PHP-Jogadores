<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controellerPrincipal;


Route::get('/', [controellerPrincipal::class, 'retornarViewMenu']);
Route::get('/cadastro', [controellerPrincipal::class, 'retornarViewCadastro']);
Route::post('/telaCriarBACK', [controellerPrincipal::class, 'cadastroRetornaTelaPrincipal']);



Route::get('/delete', [controellerPrincipal::class, 'deletaEVoltaParaVizualizar']);
Route::get('/vizualizar', [controellerPrincipal::class, 'retornarViewVizualizar']);

Route::get('/atualizarFRONT', [controellerPrincipal::class, 'telaFormDeAlterarComItem']);
Route::post('/atualizarBACK', [controellerPrincipal::class, 'telaAlteraOItemEVoltaParaVizualizar']);