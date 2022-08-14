<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $login = $request->session()->get('login');
        if(!isset($login)) {
            return redirect()->back();
        }

        return view('index', compact('login'));
    }
}
