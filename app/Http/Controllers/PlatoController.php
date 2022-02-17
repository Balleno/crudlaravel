<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['platos'] = Plato::paginate(8); //Mostramos 8 elementos
        return view('plato.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPlato = request()->except('_token'); //recogemos todos los datos menos el token, que no lo necesitamos para la base de datos
        
        if($request->hasFile('foto')) {
            $datosPlato['foto']=$request->file('foto')->store('uploads', 'public');
        }
        
        Plato::insert($datosPlato);
        return redirect('plato')->with('message', 'Plato agregado exitosamente'); //reenviamos al menú de platos con feedback al usuario
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function show(Plato $plato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plato = Plato::findOrFail($id);
        return view('plato.edit', compact('plato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPlato = request()->except('_token', '_method');

        if($request->hasFile('foto')) {
            $plato = Plato::findOrFail($id);
            Storage::delete('public/'. $plato->foto); //Borramos la foto existente antes de meter la nueva.
            $datosPlato['foto']=$request->file('foto')->store('uploads', 'public');
        }


        Plato::where('id', '=', $id)->update($datosPlato);

        $plato = Plato::findOrFail($id);
        return view('plato.edit', compact('plato'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plato = Plato::findOrFail($id);
        if(Storage::delete('public/' . $plato->foto)){
            Plato::destroy($id);
            
        }

        
        return redirect('plato')->with('message', 'plato eliminado con éxito'); //reenviamos a la página de platos dando feedback al usuario
    }
}
