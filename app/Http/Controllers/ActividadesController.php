<?php

namespace Vitis\Http\Controllers;

use Illuminate\Http\Request;
use Vitis\Http\Requests;
use Vitis\Actividades;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividades::all()->toArray();
        return view('admin', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin');
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
        $actividad = Actividades::find($id);
        $actividad->titulo = $request->get('titulo');
        $actividad->fecha = $request->get('fecha');
        
        if ($request->file('img') != null) {
            $name = $request->img->getClientOriginalName();
            $request->file('img')->move(public_path("imagenes"), $name);
            $actividad->img = 'imagenes/' . $name;
        }

        $actividad->save();

        return redirect('admin')->with('updateActOk', 'Actividades actualizadas con exito');
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
    }

    public function getActividades(){
        $actividades = Actividades::all()->toArray();
        return view('actividades', compact('actividades'));
    }
}
