<?php

namespace App\Http\Controllers\Coche;
use \Illuminate\Support\Facades\Session;
use \Prettus\Validator\Exceptions\ValidatorException;
use \App\Http\Requests\CreateCocheRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

use App\Entities\Coche\Coche;

class CocheController extends Controller
{

    //Proteger Controlador con Authenticate
    public function __construct()
	{
		$this->middleware('auth');
	} 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Metodo Consultar todos los coches
    public function index()
    {
        $coches = Coche::all();
        return view('coche.coche-list', [
            'coches' => $coches,
		]);
    }

    //metodo Crear nuevo coche
    public function create(){
        return view('coche.coche-create', [
	    	'coches' => [],
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Metodo crear un coche
    public function store(CreateCocheRequest $request)
    {
        try {
            $coche = Coche::create([
            'marca_coche' => $request->input('marca_coche'),
            'modelo' => $request->input('modelo'),
            'color' => $request->input('color'),
            'kilometraje' => $request->input('kilometraje'),
            'combustible' => $request->input('combustible'),
            'tipo_cambio' => $request->input('tipo_cambio'),
            'precio' => $request->input('precio'),
        ]);
        Session::flash('create', 'El Registro fue Creado');
        return redirect('/');

        }catch (ValidatorException $e) {

            return response()->json([
                'error' => true,
                'message' => $e->getMessageBag()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Metodo Consultar un coche por id
    public function show($id)
    {   
        $coches = Coche::find($id);
        return view('coche.coche-edit', [
            'coches' => $coches,
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Metodo Actualizar coche por id
    public function update(CreateCocheRequest $request, $id)
    {
        try {
            $coche = Coche::find($id);
            $coche->update(
                [
                    'marca_coche' => $request->input('marca_coche'),
                    'modelo' => $request->input('modelo'),
                    'color' => $request->input('color'),
                    'kilometraje' => $request->input('kilometraje'),
                    'combustible' => $request->input('combustible'),
                    'tipo_cambio' => $request->input('tipo_cambio'),
                    'precio' => $request->input('precio'),
                ]
            );

            $coche->save();
        Session::flash('update', 'El Registro fue Modificado');
        return redirect('/');

        }catch (ValidatorException $e) {

            return response()->json([
                'error' => true,
                'message' => $e->getMessageBag()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Metodo Eliminar un coche por id
    public function destroy($id)
    {   
        Coche::destroy($id);
        Session::flash('delete', 'El Registro fue Eliminado');
        return redirect('/');

    }
}
