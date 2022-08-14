<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Http\Request;

class CrudUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $objUsuario;

    public function __construct()
    {
        $this->objUsuario = new UsuarioModel();
    }

    public function index()
    {
        $usuarios = $this->objUsuario->all();

        return view("crud-usuario", compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cadastrar-usuario");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cpf = $request->cpfUsuario;
        $cpf = preg_replace('/\D/','',$cpf);

        $fone = $request->celUsuario;
        $fone = preg_replace('/\D/','',$fone);

        $cadastro = $this->objUsuario->create([
            'nomeUsuario' => $request->nomeUsuario,
            'cpfUsuario' => $cpf,
            'celUsuario' => $fone,
            'emailUsuario' => $request->emailUsuario,
            'senhaUsuario' => $request->senhaUsuario
        ]);

        if($cadastro) {
            return redirect('crud-usuario')->with(["success" => True]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
