<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentacionRequest;
use App\Models\CategoriaDocumentacion;
use App\Models\EstadoDocumentacion;
use App\Models\GlpiTickets;
use App\Models\GlpiUsers;
use App\Models\TipoDocumentacion;
use Illuminate\Http\Request;
use App\Models\Documentacion;
use Illuminate\Support\Facades\DB;


class DocumentacionController extends Controller
{
    //index
    public function index() {
        $id_glpi_users = GlpiUsers::all();
        $id_estado_documentacion = EstadoDocumentacion::all();
        $id_categoria_documentacion = CategoriaDocumentacion::all();
        $id_tipo_documentacion = TipoDocumentacion::all();
        return view('documentacion.index',[
            'documentacions'=> Documentacion::latest()->paginate(10),
            'id_glpi_users' => $id_glpi_users,
            'id_estado_documentacion' => $id_estado_documentacion,
            'id_categoria_documentacion' => $id_categoria_documentacion,
            'id_tipo_documentacion' => $id_tipo_documentacion,
            ]);

    }
    //CREATE
    public function create()
    {

        $id_glpi_users = GlpiUsers::all();
        $id_estado_documentacion = EstadoDocumentacion::all();
        $id_tipo_documentacion = TipoDocumentacion::all();
        $id_categoria_documentacion = CategoriaDocumentacion::all();


        return view('documentacion.create',[
            'id_glpi_users' => $id_glpi_users,
            'id_estado_documentacion' => $id_estado_documentacion,
            'id_tipo_documentacion' => $id_tipo_documentacion,
            'id_categoria_documentacion' => $id_categoria_documentacion,
        ]);
    }
    //edit
    public function edit(String $id){
        $id_glpi_users = GlpiUsers::all();
        $id_estado_documentacion = EstadoDocumentacion::all();
        $id_tipo_documentacion = EstadoDocumentacion::all();
        $id_categoria_documentacion = CategoriaDocumentacion::all();
        return view('documentacion.edit', [
            'documentacion'=>\App\Models\Documentacion::findOrFail($id),
            'id_glpi_users' => $id_glpi_users,
            'id_estado_documentacion' => $id_estado_documentacion,
            'id_tipo_documentacion' => $id_tipo_documentacion,
            'id_categoria_documentacion' => $id_categoria_documentacion,
        ]);
    }
    //show
    public  function show(Documentacion $documentacion){



        return view('documentacion.show', [
            'documentacion' => $documentacion]);

    }
    //STORE
    public function store(DocumentacionRequest $request)
    {
        $validatedData = $request->validated();
        $filenames = [];

        if ($request->hasFile('archivo')) {
            $files = $request->file('archivo');

            foreach ($files as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('documentacion/archivo'), $filename);
                $filenames[] = $filename;
            }

            // Guarda los nombres de archivo como una cadena separada por comas o como un array serializado
            $validatedData['archivo'] = implode(',', $filenames); // Como cadena separada por comas
            // O puedes guardar como JSON
            // $validatedData['archivo'] = json_encode($filenames);
        }

        $documentacion = Documentacion::create($validatedData);
        return redirect()->route('documentacions.index')->with('success', 'Documentación creada Satisfactoriamente!');
    }


    //UPDATED
    public function update(DocumentacionRequest $request, string $id){

        $validatedData = $request->validated();
        $filenames = [];

        if ($request->hasFile('archivo')) {
            $files = $request->file('archivo');

            foreach ($files as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('documentacion/archivo'), $filename);
                $filenames[] = $filename;
            }

            // Guarda los nombres de archivo como una cadena separada por comas o como un array serializado
            $validatedData['archivo'] = implode(',', $filenames); // Como cadena separada por comas
            // O puedes guardar como JSON
            // $validatedData['archivo'] = json_encode($filenames);
        }


        $documentacion = Documentacion::findOrFail($id);
        $documentacion->update($request->validated());
        return redirect()-> route('documentacions.index')
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
