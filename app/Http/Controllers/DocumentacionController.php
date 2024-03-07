<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentacionRequest;
use App\Models\CategoriaDocumentacion;
use App\Models\EstadoDocumentacion;
use App\Models\GlpiUsers;
use App\Models\TipoDocumentacion;
use Illuminate\Http\Request;
use App\Models\Documentacion;
use Illuminate\Support\Facades\DB;


class DocumentacionController extends Controller
{
    //index
    public function index() {
        return view('documentacion.index',[
            'documentacions'=> Documentacion::latest()->paginate(10)]);
    }
    //CREATE
    public function create()
    {
        $estado_documentacions = EstadoDocumentacion::all(); // Obtener todos los estados
        $glpi_users = GlpiUsers::all(); // Obtener todos los usuarios de GLPI
        $tipo_documentacions = TipoDocumentacion::all(); // Obtener todos las tipos
        $categoria_documentacions = CategoriaDocumentacion::all(); // Obtener todos las categorias
        return view('documentacion.create', compact('estado_documentacions','glpi_users','tipo_documentacions','categoria_documentacions'));
    }
    //edit
    public function edit(String $id){
        $documentacion = Documentacion::find($id);
        $estado_documentacions = EstadoDocumentacion::all();
        $glpi_users = GlpiUsers::all();
        $tipo_documentacions = TipoDocumentacion::all();
        $categoria_documentacions = CategoriaDocumentacion::all();
        return view('documentacion.edit', [
            'documentacion'=>\App\Models\Documentacion::findOrFail($id)
        ], compact('estado_documentacions','glpi_users','tipo_documentacions','categoria_documentacions', 'documentacion'));
    }
    //show
    public  function show(string $id){
        $documentacions = DB::table('documentacion as d')
            ->join('estado_documentacion as e', 'd.id_estado_documentacion', '=', 'e.id')
            ->join('glpi_users as gu', 'd.id_glpi_users', '=', 'gu.id')
            ->join('tipo_documentacion as t', 'd.id_tipo_documentacion', '=', 't.id')
            ->join('categoria_documentacion as c', 'd.id_categoria_documentacion', '=', 'c.id')
            ->select('d.id as documentacion_id', 'd.nombre as documentacion_nombre','d.descripcion as documentacion_descripcion','d.fecha_creacion as documentacion_fecha_creacion',
                'd.archivo as documentacion_archivo','e.nombre as estado_documentacion_nombre', 'gu.name as glpi_user_name','t.nombre as tipo_documentacion_nombre','c.nombre as categoria_documentacion_nombre')
            ->where('d.id', '=', $id)
            ->first();


        return view('documentacion.show', [
            'documentacion'=> Documentacion::findOrFail($id), 'documentacions'=>$documentacions]);

    }
    //STORE
    public function store(DocumentacionRequest $request){

        $documentacion = Documentacion::create($request->validated());
        return redirect()-> route('documentacions.show', [$documentacion->id])
            ->with('success', 'Documentacion creado Satisfactoriamente!');
    }
    //UPDATED
    public function update(DocumentacionRequest $request, string $id){
        //$data = $request->validate();
        //$ubicacion = \App\Models\Ubicacion::findOrFail($id);
        //$ubicacion-> nombre = $data['nombre'];
        //$ubicacion-> id_area = $data['id_area'];
        //$ubicacion-> descripcion = $data['descripcion'];
        //$ubicacion->save();
        $documentacion = Documentacion::findOrFail($id);
        $documentacion->update($request->validated());
        return redirect()-> route('documentacions.show', [$documentacion->id])
            ->with('success', 'Documentacion Actualizado Satisfactoriamente!');
    }
    //delete
    public function destroy(string $id){
        $documentacion = Documentacion::findOrFail($id);
        $documentacion->delete();
        return redirect()-> route('documentacions.index')
            ->with('success', 'Documentacion Borrado Satisfactoriamente');
    }
    //toggle-complete
    public function toggle(Documentacion $documentacion){
        $documentacion->toggleComplete();
        if ($documentacion->completado) {
            // Si la tarea está completada, redirige al índice.
            return redirect()->route('documentacions.index')->with('success', 'Documentacion Marcado Como Completado Satisfactoriamente!');
        } else {
            // Si la tarea no está completada, puedes elegir mantener al usuario en la misma página
            return back()->with('success', 'Documentacion Marcado como no completado.');
        }}
}
