<?php

namespace App\Http\Controllers;

use App\Personas;
use App\models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['personas']=Personas::all();
        return view('index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosPersona = request()->all();
        $datosPersona = request()->except('_token');
        if ($request->hasFile('foto')) {
            $datosPersona['foto'] = $request->file('foto')->store('uploads','public');
        }
        Personas::insert($datosPersona);
        //return response()->json($datosPersona);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Personas::findOrFail($id);
        return view('edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPersona = request()->except('_token','_method');
        if ($request->hasFile('foto')) {
            $Persona = Personas::find($id);
            Storage::delete('public/'.$Persona->foto);
            $datosPersona['foto'] = $request->file('foto')->store('uploads','public');
        }
        Personas::where('id','=',$id)->update($datosPersona);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Persona = Personas::find($id);
        if (Storage::delete('public/'.$Persona->foto)) {
            Personas::destroy($id);
        }
        
        
       // return response()->json($id);
       return redirect('/');
    }
}
