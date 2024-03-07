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
    public function index() {
        return view('tarea.index',[
            'tareas'=> Tarea::latest()->paginate(10)]);
    }

    public function index1() {
        return view('index',[
            'tareas'=> Tarea::latest()->paginate(10)]);
    }
    //CREATE
    public function create()
    {
        $glpi_tickets = GlpiTickets::all(); // Obtener todos los usuarios de GLPI
        $glpi_users = GlpiUsers::all(); // Obtener todos los usuarios de GLPI
        return view('tarea.create', compact('glpi_users','glpi_tickets'));
    }
    //edit
    public function edit(String $id){
        $tarea = Tarea::find($id);
        $glpi_users = GlpiUsers::all();
        $glpi_tickets = GlpiTickets::all();
        return view('tarea.edit', [
            'tarea'=>\App\Models\Tarea::findOrFail($id)
        ], compact('glpi_users', 'tarea','glpi_tickets'));
    }
    //show
    public  function show(string $id){
        $tareas = DB::table('tarea as t')
            ->join('glpi_users as g', 't.id_glpi_users', '=', 'g.id')
            ->join('glpi_tickets as gt', 't.id_glpi_tickets', '=', 'gt.id')
            ->select('t.id as tarea_id', 't.nombre as tarea_nombre','t.descripcion as tarea_descripcion','t.fecha_asignacion as tarea_fecha_asignacion','t.fecha_aproximada as tarea_fecha_aproximada',
                't.fecha_terminado as tarea_fecha_terminado','t.observacion as tarea_observacion', 'g.name as glpi_user_name','gt.name as glpi_ticket_name', 'gt.id as glpi_ticket_id')
            ->where('t.id', '=', $id)
            ->first();


        return view('tarea.show', [
            'tarea'=> Tarea::findOrFail($id), 'tareas'=>$tareas]);

    }
    //STORE
    public function store(TareaRequest $request){

        $tarea = Tarea::create($request->validated());
        return redirect()-> route('tareas.show', [$tarea->id])
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
        return redirect()-> route('tareas.show', [$tarea->id])
            ->with('success', 'Tarea update Successfully!');
    }
    //delete
    public function destroy(string $id){
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect()-> route('tareas.index')
            ->with('success', 'Tarea Deleted Successfully');
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
