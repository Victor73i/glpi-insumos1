<?php

namespace App\Http\Controllers;

use App\Models\EquipoIt;
use App\Models\EstadoLog;
use App\Models\GlpiLocations;
use App\Models\GlpiTickets;
use App\Models\GlpiUsers;
use App\Models\Tarea;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $id_glpi_users = GlpiUsers::all();
        $id_glpi_tickets = GlpiTickets::all();
        if (view()->exists($request->path())) {
            return view($request->path()
                ,[
                    'tareas'=> Tarea::latest()->paginate(10),
                    'id_glpi_users' => $id_glpi_users,
                    'id_glpi_tickets' => $id_glpi_tickets]);

        }
        return abort(404);
    }

    public function root()
    {
        $id_glpi_users = GlpiUsers::all();
        $id_glpi_tickets = GlpiTickets::all();
        return view('index',[
            'tareas'=> Tarea::latest()->paginate(10), 'id_glpi_users' => $id_glpi_users,
            'id_glpi_tickets' => $id_glpi_tickets]);
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }





}
