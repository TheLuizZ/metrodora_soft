<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertel;

 class PertelController extends Controller
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
                return View('pertel/index');
            }

            public function storeprocedure()
    {   
    
    }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
                //
                return view('pertel.create');
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
                    'numero'=>'required | numeric | digits_between:1,9',
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

                $telefonos = new Telefono();

                $telefonos->NUM_TELEFONO = $request->get('numero');
                $telefonos->TIPO_TELEFONO = $request->get('tipo');
        
                $telefonos->save();
                        
                return redirect('/dashboard');
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
                
            }
        
            /**
             * Remove the specified resource from storage.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
                
            }
        }
