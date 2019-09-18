<?php

namespace Vitis\Http\Controllers;

use Illuminate\Http\Request;
use Vitis\Http\Requests;
use Vitis\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Blog::all()->toArray();
        return view('blog', compact('articulos'));
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
        $this -> validate($request, [
            'titulo'        => 'required',
            'descripcion'   => 'required',
            'img'           => 'required | image | max:5120'
        ]);

        $new_name = rand() . '.' . $request->file('img')->getClientOriginalExtension();
        
        $request->file('img')->move(public_path("imagenes\blog"), $new_name);

        $blog = new Blog([
            'titulo'        => $request->get('titulo'),
            'descripcion'   => $request->get('descripcion'),
            'img'           => 'imagenes/blog/' . $new_name
        ]);

        $blog->save();

        return redirect()->route('blogs.create')->with('success', 'Articulo agregado');
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
}
