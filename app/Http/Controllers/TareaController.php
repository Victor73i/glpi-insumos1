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
    public function dashboard() {

        $tareas = Tarea::latest()->paginate(10); // Usa get() en lugar de paginate()
        $ultimosTarea = Tarea::latest()->take(5)->get();


        return view('tarea.dashboard', compact(  'ultimosTarea', 'tareas'  ));
    }
    public function getLogStatus() {
        try {
            $estados = EstadoLog::withCount('logs')->get();
            return response()->json([
                'estados' => $estados,

            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getLogByMonthAndStatus(Request $request)
    {
        $filter = $request->query('filter', 'ALL');
        $dateEnd = now(); // La fecha de finalización siempre será "ahora".
        $dateStart = now()->startOfDay(); // Por defecto establece la fecha de inicio al comienzo del día actual.

        $query = Log::select(
            DB::raw('DAY(fecha_finalizacion) as dia'),
            DB::raw('MONTH(fecha_finalizacion) as mes'),
            DB::raw('YEAR(fecha_finalizacion) as año'),
            'id_estado_log',
            DB::raw('COUNT(*) as cantidad')
        )
            ->join('estado_log', 'estado_log.id', '=', 'log.id_estado_log')
            ->addSelect('estado_log.nombre as nombre_estado');

        if ($filter !== 'ALL') {
            $dateEnd = now(); // Define la fecha de fin como la fecha y hora actual

            switch ($filter) {
                case '1D':
                    $dateStart = now()->startOfDay(); // Inicia en el comienzo del día actual.
                    break;
                case '1S':
                    $dateStart = now()->subDays(7)->startOfDay(); // Resta 7 días para obtener la semana.
                    break;
                case '1M':
                    $dateStart = now()->subMonth()->startOfMonth();
                    break;
                case '6M':
                    $dateStart = now()->subMonths(6)->startOfMonth();
                    break;
                case '1Y':
                    $dateStart = now()->subYear()->startOfDay();
                    break;
                // Asegúrate de tener una opción predeterminada en caso de que `$filter` no coincida con ninguno de los casos.
                default:
                    $dateStart = now()->startOfDay();
                    break;
            }
            $query->where('fecha_finalizacion', '>=', $dateStart)->where('fecha_finalizacion', '<=', $dateEnd);
        }

        $estados = EstadoLog::select('id', 'nombre')->get();


        $totalsByDate = clone $query;
        $totalsByDate = $totalsByDate->select(
            DB::raw('DAY(fecha_finalizacion) as dia'),
            DB::raw('MONTH(fecha_finalizacion) as mes'),
            DB::raw('YEAR(fecha_finalizacion) as año'),
            DB::raw('COUNT(*) as total')
        )
            ->groupBy('dia', 'mes', 'año')
            ->orderBy('año', 'desc')
            ->orderBy('mes', 'desc')
            ->orderBy('dia', 'desc')
            ->get();
// Añade los nombres de los estados a los logs
        $loges = $query->groupBy('dia', 'mes', 'año', 'id_estado_log')
            ->orderBy('año', 'desc')
            ->orderBy('mes', 'desc')
            ->orderBy('dia', 'desc')
            ->get()->map(function ($item) use ($estados) {
                $estado = $estados->firstWhere('id', $item->id_estado_log);
                $item->nombre_estado = $estado ? $estado->nombre : null;
                return $item;
            });
        return response()->json([
            'loges' => $loges,
            'totalsByDate' => $totalsByDate, // Asegúrate de agregar esto
            'estados' => $estados
        ]);
    }

    public function filterLogsByStatus(Request $request)
    {
        $filter = $request->query('filter', 'ALL');

        $logsQuery = Log::with('estado_log', 'glpi_users');

        if ($filter !== 'ALL') {
            $estado = EstadoLog::where('nombre', $filter)->first();
            $logsQuery->where('id_estado_log', $estado ? $estado->id : null);
        }

        $logs = $logsQuery->get(); // Cambiar a paginate si es necesario.

        return response()->json([
            'logs' => $logs,
        ]);
    }
    public function filterLogsByStatus1(Request $request)
    {
        $filter = $request->query('filter', 'TODOS');
        $userId = auth()->user()->id; // Asumiendo que estás usando la autenticación de Laravel

        $logsQuery = Log::with('estado_log', 'glpi_users');

        // Si el filtro es 'ALL', no aplicar filtro de estado, pero sí de usuario para "Mi Log"
        if ($filter === 'TODOS') {
            $logsQuery->where('user_id', $userId);
        } else {
            $estado = EstadoLog::where('nombre', $filter)->first();
            $logsQuery->where('id_estado_log', $estado ? $estado->id : null)
                ->where('user_id', $userId); // Asegurarse de que siempre se filtre por el usuario logueado
        }

        $logs = $logsQuery->get(); // Cambiar a paginate si es necesario.

        return response()->json([
            'logs' => $logs,
        ]);
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
