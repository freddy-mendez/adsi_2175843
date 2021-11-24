<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;

class LibroApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libros = Libro::all();
        return $libros;
        //return json_encode(['libros'=>$libros]);
        //return json_encode(['result'=>'OK', 'libros'=>$libros]);
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
        $libro = Libro::create($request->all());
        \Log::error($libro);
        return $libro;
        //return json_encode(['result'=>'OK', 'libro'=>$libro]);
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
        $libro = Libro::find($id);
        return json_encode(['result'=>'OK', 'libro'=>$libro]);
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
        $libro = Libro::find($id);
        $libro->fill($request->all());
        $libro->save();
        return json_encode(["result"=>"OK", "libro"=>$libro]);
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
        $libro = Libro::find($id);
        $libro->delete();
        return json_encode(['result'=>'OK', 'libro'=>$libro]);
    }
}
