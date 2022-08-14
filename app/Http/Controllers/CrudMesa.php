<?php

namespace App\Http\Controllers;

use App\Models\MesaModel;
use App\Models\RestauranteModel;
use Illuminate\Http\Request;

class CrudMesa extends Controller
{
    

    private $mesas;

    public function __construct()
    {
        $this->mesas = new MesaModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $login = $request->session()->get('login');
        if(!isset($login)) {
            return redirect()->back();
        }

        $idRestaurante = RestauranteModel::where("nomeRestaurante", $request->session()->get('login'))->first();

        $mesas = $this->mesas->where('idRestaurante', $idRestaurante->idRestaurante)->get();

        return view("crud-mesa", compact('mesas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idRestaurante = RestauranteModel::where("nomeRestaurante", $request->session()->get('login'))->first();

        $cadastro = $this->mesas->create([
            'quantAcento' => $request->quantAcento,
            'statusMesa' => $request->status,
            'numMesa' => $request->numMesa,
            'idRestaurante' => $idRestaurante->idRestaurante,
        ]);

        if($cadastro) {
            return redirect('crud-mesa')->with(["success" => True]);
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
        $cadastro = $this->mesas->where(['idMesa'=>$id])->update([
            'quantAcento' => $request->quantAcento,
            'statusMesa' => $request->status,
            'numMesa' => $request->numMesa,
            'idRestaurante' => 5
        ]);

        return redirect('crud-mesa')->with(["success" => True]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MesaModel::where('idMesa', $id)->delete();
        return redirect('crud-mesa');
    }
}
