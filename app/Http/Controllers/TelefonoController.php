<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefono;

class TelefonoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $telefonos = Telefono::all();
        return view('telefono.index')->with('telefonos',$telefonos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('telefono.create');
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
        $request->validate([
            'numero'=>'required | numeric | digits_between:1,9',
            'tipo'=>'required | in:C,T,P,c,t,p',
            'usuario'=>'required | max:40'
        ]);

        $telefonos = new Telefono();

        $telefonos->NUM_TELEFONO = $request->get('numero');
        $telefonos->TIPO_TELEFONO = $request->get('tipo');
        $telefonos->USR_REGISTRO = $request->get('usuario');

        $telefonos->save();

        return redirect('/telefonos');
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
        $telefono = Telefono::find($id);  
        return view('telefono.edit')->with('telefono',$telefono); 
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
        $request->validate([
            'numero'=>'required | numeric | digits_between:1,9',
            'tipo'=>'required | in:C,T,P,c,t,p',
            'usuario'=>'required | max:40'
        ]);

        $telefono = Telefono::find($id);

        $telefono->NUM_TELEFONO = $request->get('numero');
        $telefono->TIPO_TELEFONO = $request->get('tipo');
        $telefono->USR_REGISTRO	 = $request->get('usuario');

        $telefono->save();

        return redirect('/telefonos');
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
        $telefono = Telefono::find($id);
        $telefono->delete();
        return redirect('/telefonos');
    }
}
