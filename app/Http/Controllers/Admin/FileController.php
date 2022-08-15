<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carreras;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $id_carreras=trim($request->get('buscarpor'));
        $itememorias= Carreras::where('Nombre','like',"%$id_carreras%")->paginate(10);

        $itememorias = DB::table('carreras')
               ->join('files', 'Carrera', '=', 'carreras.id_carreras')
               ->select('files.*','carreras.Nombre')
               ->get();
        return view('admin.files.index',compact('itememorias'));
    }
    public function create(Request $request){
        $memorias = Carreras::all();
        return view('admin.files.create',compact('memorias'));
    }

    public function store(Request $request)
    {
            $reg= new File;
            $reg->Titulo=$request->get('Titulo');
            $reg->Autor=$request->get('Autor');
            $reg->Año=$request->get('Año');
            $reg->Carrera=$request->get('Carrera');
            if ($request->hasFile('pdf')) {
                # code...
                $file = $request->file('pdf');
                $file->move(public_path().'/Memorias/',$file->getClientOriginalName());
                $reg->documento=$file->getClientOriginalName();
            }
            $reg->save();
            return redirect()->route('admin.files.index')
            ->with('success', 'File created successfully.');
    }
    public function edit($id)
    {   
        $memorias = File::find($id);
         return view('admin.files.edit', compact('memorias'));
    }
    public function update(Request $request, File $memorias)
    {
        //
        File::create([
            'Titulo'=> $request['titulo'],
            'Autor'=> $request['autor'], 
            'Año'=> $request['año'],
            'Carrera'=> $request['carrera'],
            'documento'=> $request['pdf'],
        ]); 
        $memorias->update($request->all());
        return redirect()->route('admin.files.index')
            ->with('success', 'File updated successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $memorias = File::find($id);
        return view('admin.files.show', compact('memorias'));
         
    }
}