<?php

namespace App\Http\Controllers;

use App\Http\Requests\TareaRequest;
use App\Models\GlpiTickets;
use App\Models\GlpiUsers;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TareaController extends Controller
{
    public function index(Request $request) {
        $query = Tarea::query();

        // Filtrado por búsqueda general
        if ($searchTerm = $request->input('search')) {
            $query->where(function($query) use ($searchTerm) {
                $query->where('nombre', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('descripcion', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('estado', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('prioridad', 'LIKE', "%{$searchTerm}%");
                // Agrega aquí más campos si es necesario
            });
        }

        $tareas = $query->latest()->paginate(10);
        $id_glpi_users = GlpiUsers::all();
        $id_glpi_tickets = GlpiTickets::all();

        return view('tarea.index', compact('tareas', 'id_glpi_users', 'id_glpi_tickets'));
    }






    public function index1() {
        return view('index',[
            'tareas'=> Tarea::latest()->paginate(10)]);
    }
    //CREATE
    public function create()
    {
        $id_glpi_users = GlpiUsers::all();
        $id_glpi_tickets = GlpiTickets::all();
        return view('tarea.create',

        [
            'id_glpi_users' => $id_glpi_users,
            'id_glpi_tickets' => $id_glpi_tickets,
        ]);
    }
    //edit
    public function edit(String $id){
        $id_glpi_users = GlpiUsers::all();
        $id_glpi_tickets = GlpiTickets::all();

        return view('tarea.edit', [
            'tarea'=>\App\Models\Tarea::findOrFail($id),
            'id_glpi_users' => $id_glpi_users,
            'id_glpi_tickets' => $id_glpi_tickets,
        ]);
    }
    //show
    public  function show(Tarea $tarea){



        return view('tarea.show', [
            'tarea'=> $tarea]);

    }
    //STORE
    public function store(TareaRequest $request){

        $tarea = Tarea::create($request->validated());
        return redirect()-> route('tareas.index',)
            ->with('success', 'Tarea create Successfully!');
    }
    //UPDATED
    public function update(TareaRequest $request, string $id){
        //$data = $request->validate();
        //$ubicacion = \App\Models\Ubicacion::findOrFail($id);
        //$ubicacion-> nombre = $data['nombre'];
        //$ubicacion-> id_area = $data['id_area'];
        //$ubicacion-> descripcion = $data['descripcion'];
        //$ubicacion->save();
        $tarea = Tarea::findOrFail($id);
        $tarea->update($request->validated());
        return redirect()-> route('tareas.index')
            ->with('success', 'Tarea update Successfully!');
    }
    //delete
    public function destroy(string $id){
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect()-> route('tareas.index')
            ->with('success', 'Tarea Borrado con Exito');
    }
    //toggle-complete
    public function toggle(Tarea $tarea){
        $tarea->toggleComplete();
        if ($tarea->completado) {
            // Si la tarea está completada, redirige al índice.
            return redirect()->route('tareas.index')->with('success', 'Tarea marked as completed successfully!');
        } else {
            // Si la tarea no está completada, puedes elegir mantener al usuario en la misma página
            return back()->with('success', 'Tarea marked as not completed.');
        }}
}
