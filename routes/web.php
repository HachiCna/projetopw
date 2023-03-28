<?php
use App\models\Agendamentos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $dados= new agendamentos;
    $dados-> Nome ="Rodrigo Alves";
    $dados-> Telefone ="(11)98522-9966";
    $dados-> Origem ="Whatsapp";
    $dados-> Data_Contato ="2023-03-28";
    $dados-> Observacao ="Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10";
    $dados-> save();
    return view('welcome');
});
?>