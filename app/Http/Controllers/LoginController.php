<?php

namespace App\Http\Controllers;

use App\Models\RestauranteModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    private $restaurantes;

    public function __construct()
    {
        $this->restaurantes = new RestauranteModel();
    }
    
    public function indexLogin(Request $request) {
        $login = $request->session()->get("login");
        if(isset($login)) {
            return redirect('index');
        }

        return view('login');
    }

    public function indexRegistro(Request $request)
    {
        return view("registrar");
    }

    public function registrar(Request $request)
    {
        $senha = $request->senha;
        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $cad = $this->restaurantes->create([
            "nomeRestaurante" => $request->nome,
            "telRestaurante" => $request->telefone,
            "ruaRestaurante" => "rua doida",
            "numRestaurante" => "10",
            "bairroRestaurante" => "aqui memo",
            "cidadeRestaurante" => "piraporinha",
            "cepRestaurante" => $request->cep,
            "senhaRestaurante" => $senha
        ]);

        if($cad) {
            return redirect()->back();
        }
    }

    public function autenticar(Request $request) {
        $restaurante = $this->restaurantes->where('nomeRestaurante', '=', $request->login)->first();

        if($restaurante) {
            if(password_verify($request->senha, $restaurante->senhaRestaurante)) {
                $request->session()->put('login', $request->login);
                return redirect("index");
            }
        }

        return redirect()->back()->withErrors('Login inválido!');
    }

    public function logout(Request $request) {
        $request->session()->flush();

        return redirect('/');
    }
}
