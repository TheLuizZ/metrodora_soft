<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
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
        $personas = Persona::all();
        return view('persona.index')->with('personas',$personas);
    }
    /////////////////////////////////////////////////////////////////////
    // public function Guardar(Request $request)
    // {
    //     //
    //     $request->validate([
    //         'IDENTIDAD'='required | numeric',
    //         'NOM_PERSONA'='required',
    //         'SEX_PERSONA'='required',
    //         'IND_CIVIL'='required',
    //         'EDAD_PERSONA'='required | numeric',
    //         'USR_REGISTRO'='required',
    //         'TIPO_PERSONA'='required',
    //     ])

    //     $persona = new persona
    //     $persona->IDENTIDAD = $request->IDENTIDAD;
    //     $persona->NOM_PERSONA = $request->NOM_PERSONA;
    //     $persona->SEX_PERSONA = $request->SEX_PERSONA;
    //     $persona->IND_CIVIL = $request->IND_CIVIL;
    //     $persona->EDAD_PERSONA = $request->EDAD_PERSONA;
    //     $persona->USR_REGISTRO = $request->USR_REGISTRO;
    //     $persona->TIPO_PERSONA = $request->TIPO_PERSONA;

    //     persona->save();
    //     return back()->with('success', '!Formulario validado exitosamente!');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('persona.create');
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
            'identidad'=>'required | numeric | digits_between:1,15',
            'nombre'=>'required | max:45',
            'sex'=>'required | in:M,F,m,f',
            'civil'=>'required | in:S,C,D,V,s,c,d,v',
            'edad'=>'required | numeric | digits_between:1,3',
            'usuario'=>'required | max:40',
            'tipo'=>'required | in:E,P,e,p'
        ]);

        $personas = new Persona();

        $personas->IDENTIDAD = $request->get('identidad');
        $personas->NOM_PERSONA = $request->get('nombre');
        $personas->SEX_PERSONA = $request->get('sex');
        $personas->IND_CIVIL = $request->get('civil');
        $personas->EDAD_PERSONA = $request->get('edad');
        $personas->USR_REGISTRO = $request->get('usuario');
        $personas->TIPO_PERSONA = $request->get('tipo');

        $personas->save();

        return redirect('/personas');
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
        $persona = Persona::find($id);  
        return view('persona.edit')->with('persona',$persona); 
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
            'identidad'=>'required | numeric | digits_between:1,15',
            'nombre'=>'required | max:45',
            'sex'=>'required | in:M,F,m,f',
            'civil'=>'required | in:S,C,D,V,s,c,d,v',
            'edad'=>'required | numeric | digits_between:1,3',
            'usuario'=>'required | max:40',
            'tipo'=>'required | in:E,P,e,p'
        ]);

        $persona = Persona::find($id);

        $persona->IDENTIDAD = $request->get('identidad');
        $persona->NOM_PERSONA = $request->get('nombre');
        $persona->SEX_PERSONA = $request->get('sex');
        $persona->IND_CIVIL = $request->get('civil');
        $persona->EDAD_PERSONA = $request->get('edad');
        $persona->USR_REGISTRO = $request->get('usuario');
        $persona->TIPO_PERSONA = $request->get('tipo');

        $persona->save();

        return redirect('/personas');
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
        $persona = Persona::find($id);
        $persona->delete();
        return redirect('/personas');
    }
}
