<?php

namespace Palmeras\Http\Controllers;

use Palmeras\articulo;

use Illuminate\Http\Request;


class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=articulo::all();
        return view('articulos.index',compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes',$name);
        }
        $articulo= new articulo();
        $articulo->tipo=$request->input('tipo');
        $articulo->valor=$request->input('valor');
        $articulo->ci_cliente=$request->input('ci_cliente');
        $articulo->descripcion=$request->input('descripcion');
        $articulo->fecha_hoy=$request->input('fecha_hoy');
        $articulo->fecha_lim=$request->input('fecha_lim');
        $articulo->foto =$name;
        $articulo->save();
        return redirect()->route('articulos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(articulo $articulo)
    {
        return view('articulos.show',compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo $articulo)
    {
       return view('articulos.edit',compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articulo $articulo)
    {
        $articulo->fill($request->all());
        $articulo->save();
        return redirect()->route('articulos.show',[$articulo])->with('status','articulo actuaizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulo $articulo)
    {
        $file_path=public_path().'/imagenes/'.$articulo->foto;
        \File::delete($file_path);
        $articulo->delete();
        return redirect()->route('articulos.index')->with('status','articulo eliminado');
    }
}
