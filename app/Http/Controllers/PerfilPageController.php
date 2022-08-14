<?php

namespace App\Http\Controllers;

use App\Models\RestauranteModel;
use Illuminate\Http\Request;

class PerfilPageController extends Controller
{
    public function index(Request $request) {
        $login = $request->session()->get('login');
        if(!isset($login)) {
            return redirect()->back();
        }

        $info = RestauranteModel::where('nomeRestaurante', $login)->first();
        dd($info);
        return view('perfil-page', compact('info'));
    }
}
