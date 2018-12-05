<?php

namespace Palmeras\Http\Controllers;

use Palmeras\cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes=cliente::all();
        return view('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
       $cliente= new cliente();
       $cliente->ci = $request->input('carnet');
       $cliente->nombres = $request->input('nombres');
       $cliente->apellidos = $request->input('apellidos');
       $cliente->direccion = $request->input('direccion');
       $cliente->telefono = $request->input('telefono');
       $cliente->foto =$name;
       $cliente->slug = $request->input('slug');
       $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
       // $cliente = cliente::where('slug','=',$slug)->firstOrFail();
        return view('clientes.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
       //return $cliente;
       $cliente->fill($request->all());
        $cliente->save();
       return redirect()->route('clientes.show',[$cliente])->with('status','cliente actuaizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
    //$file_path=public_path().'/imagenes/'.$cliente->foto;
    //    \File::delete($file_path);
        $cliente=cliente::where('slug','=',$slug)->delete();
        //$cliente->delete();
        return redirect()->route('clientes.index')->with('status','cliente eliminado');
      // return $cliente;
    }
}
