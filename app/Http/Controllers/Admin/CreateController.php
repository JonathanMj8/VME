<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\file;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreateController extends Controller
{
    public function __construct()
    {
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
        return view('admin.files.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //

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
            'file'=> 'required|image|max:3000',
            'Autor'=> 'required', 'string', 'max:255',
            'Titulo' =>'required', 'string', 'max:255',
            'Año'=> 'required', 'string', 'max:255',
            'Categoria'=> 'required', 'string', 'max:255',
        ]);

        $imagenes = $request->file('file')->store('public/imagenes');
        $url = Storage::url($imagenes);

        file::create([
            'url'=> $url,
            'Autor'=> $request['autor'], 
            'Titulo'=> $request['titulo'],
            'Año'=> $request['año'],
            'Categoria'=> $request['categoria'],
        ]);

        return redirect()->route('memorias.index');
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
