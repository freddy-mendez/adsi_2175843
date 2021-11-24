<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computador;

class ComputadorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $computadores = Computador::all();
        return json_encode(['result'=>'OK', 'computadores'=>$computadores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $computador = Computador::create($request->all());
        return json_encode(['result'=>'OK', 'computador'=>$computador]);
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
        $computador = Computador::find($id);
        return json_encode(['result'=>'OK', 'computador'=>$computador]);
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
        $computador = Computador::find($id);
        $computador->fill($request->all());
        $computador->save();
        return json_encode(["resultado"=>"OK", "computador"=>$computador]);
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
        $computador = Computador::find($id);
        $computador->delete();
        return json_encode(['result'=>'OK', 'computador'=>$computador]);
    }
}
