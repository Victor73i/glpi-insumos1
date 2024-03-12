<?php

namespace App\Http\Controllers;

use App\Models\EquipoIt;
use App\Models\EstadoLog;
use App\Models\GlpiLocations;
use App\Models\GlpiTickets;
use App\Models\GlpiUsers;
use App\Models\LogEquipoIt;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Area;
use App\Models\Categoria_insumo;
use App\Models\Documentacion;
use App\Models\Equipo_computo;
use App\Models\Estado_equipo_computo;
use App\Models\Estado_insumo;
use App\Models\Estado_log;
use App\Models\Estado_mantenimiento_equipo;
use App\Models\Insumo_mantenimiento_equipo;
use App\Models\Insumo;
use App\Models\Ip_equipo_computo;
use App\Models\Log;
use App\Models\Mantenimiento_equipo;
use App\Models\Rol_usuario;
use App\Models\Tipo_documentacion;
use App\Models\Tipo_equipo_computo;
use App\Models\Tipo_mantenimiento_equipo;
use App\Models\Ubicacion;
use App\Models\Usuario;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\AreaRequest;
use App\Http\Requests\Categoria_insumoRequest;
use App\Http\Requests\DocumentacionRequest;
use App\Http\Requests\Equipo_computoRequest;
use App\Http\Requests\Estado_equipo_computoRequest;
use App\Http\Requests\Estado_insumoRequest;
use App\Http\Requests\Estado_logRequest;
use App\Http\Requests\Estado_mantenimiento_equipoRequest;
use App\Http\Requests\InsumoRequest;
use App\Http\Requests\Insumo_mantenimiento_equipoRequest;
use App\Http\Requests\Ip_equipo_computoRequest;
use App\Http\Requests\LogRequest;
use App\Http\Requests\Mantenimiento_equipoRequest;
use App\Http\Requests\Rol_usuarioRequest;
use App\Http\Requests\Tipo_documentacionRequest;
use App\Http\Requests\Tipo_equipo_computoRequest;
use App\Http\Requests\Tipo_mantenimiento_equipoRequest;
use App\Http\Requests\UbicacionRequest;
use App\Http\Requests\UsuarioRequest;
class LogController extends Controller
{

    //index
    public function index() {
        return view('log.index',[
            'logs'=> Log::latest()->paginate(10)]);
    }
    public function index1() {
        return view('apps-projects-list',[
            'logs'=> Log::latest()->paginate(10)]);
    }
    //create
    public function create() {
        $equiposIt = EquipoIt::all();
        $id_glpi_users = GlpiUsers::all();
        $id_glpi_locations = GlpiLocations::all();
        $id_glpi_tickets = GlpiTickets::all();
        $id_estado_logs = EstadoLog::all();

        return view('log.create', [
            'equipos_it' => $equiposIt,
            'id_glpi_users' => $id_glpi_users,
            'id_glpi_locations' => $id_glpi_locations,
            'id_glpi_tickets' => $id_glpi_tickets,
            'id_estado_logs' => $id_estado_logs
        ]);
    }
    //edit
    public function edit(string $id){
        $equiposIt = EquipoIt::all();
        $id_glpi_users = GlpiUsers::all();
        $id_glpi_locations = GlpiLocations::all();
        $id_glpi_tickets = GlpiTickets::all();
        $id_estado_logs = EstadoLog::all();
        return view('log.edit', [
            'log'=> Log::findOrFail($id),
            'equipos_it' => $equiposIt,
            'id_glpi_users' => $id_glpi_users,
            'id_glpi_locations' => $id_glpi_locations,
            'id_glpi_tickets' => $id_glpi_tickets,
            'id_estado_logs' => $id_estado_logs
        ]);
    }
    //show
    public function show(Log $log){
        return view('log.show', [
            'log'=> $log
        ]);
    }
    //STORE
    public function store(LogRequest $request){
        //    $data = $request->validate();
        //    $log = new \App\Models\Log;
        //    $log-> observaciones = $data['observaciones'];
        //    $log-> id_estado_log = $data['id_estado_log'];
        //    $log-> fecha_inicio = $data['fecha_inicio'];
        //    $log-> fecha_finalizacion = $data['fecha_finalizacion'];
        //    $log-> id_equipo_computo = $data['id_equipo_computo'];
        //    $log-> id_ubicacion = $data['id_ubicacion'];
        //    $log->save();

        //info(dump($request->validated('id_equipo_computo')));
        //return;
        $ids_equipo_it = $request->validated('id_equipo_computo');

        $log = Log::create($request->validated());

        foreach ($ids_equipo_it as $id_equipo_it){
            $log_equipo_it = new LogEquipoIt;
            $log_equipo_it->id_log = $log->id;
            $log_equipo_it->id_equipo_it = $id_equipo_it;

            $log_equipo_it->save();
        }

        return redirect()-> route('logs.show', [$log->id])
            ->with('success', 'Logs create Successfully!')->with('debug', $request->validated());
    }
    //UPDATE
    public function update(LogRequest $request, string $id){
        //$data = $request->validate();
        //$log = \App\Models\Log::findOrFail($id);
        //$log-> observaciones = $data['observaciones'];
        //$log-> id_estado_log = $data['id_estado_log'];
        //$log-> fecha_inicio = $data['fecha_inicio'];
        //$log-> fecha_finalizacion = $data['fecha_finalizacion'];
        //$log-> id_equipo_computo = $data['id_equipo_computo'];
        //$log-> id_ubicacion = $data['id_ubicacion'];
        //$log->save();


        $ids_equipo_it = $request->validated('id_equipo_computo');

        $log = Log::findOrFail($id);
        $log->update($request->validated());

        foreach ($log->equiposIt as $equipoIt){
            $logEquipoIt = LogEquipoIt::where('id_log', '=', $log->id)->where('id_equipo_it', '=', $equipoIt->id)->delete();
        }

        foreach ($ids_equipo_it as $id_equipo_it){
            $log_equipo_it = new LogEquipoIt;
            $log_equipo_it->id_log = $log->id;
            $log_equipo_it->id_equipo_it = $id_equipo_it;

            $log_equipo_it->save();
        }

        return redirect()-> route('logs.show', [$log->id])
            ->with('success', 'Logs update Successfully!');
    }
    //delete
    public function destroy(string $id){
        $log = Log::findOrFail($id);
        $log->delete();
        return redirect()-> route('logs.index')
            ->with('success', 'Log Deleted Successfully');
    }
    //toggle-complete
    public function toggle(Log $log){
        $log->toggleComplete();
        if ($log->completado) {
            // Si la tarea está completada, redirige al índice.
            return redirect()->route('logs.index')->with('success', 'Log marked as completed successfully!');
        } else {
            // Si la tarea no está completada, puedes elegir mantener al usuario en la misma página
            return back()->with('success', 'Log marked as not completed.');
        }
    }
}
