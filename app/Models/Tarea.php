<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Tarea extends Model
{
    use HasFactory;
    protected $table = 'tarea';
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'fecha_asignacion','estado','prioridad', 'fecha_aproximada', 'fecha_terminado','observacion', 'completado', 'id_glpi_tickets','id_glpi_users', 'created_at', 'updated_at'
    ];




    public function glpi_tickets()
    {
        return $this->belongsTo(GlpiTickets::class, 'id_glpi_tickets', 'id');
    }
    public function glpi_users()
    {
        return $this->belongsTo(GlpiUsers::class, 'id_glpi_users', 'id');
    }
    public function toggleComplete()
    {
        $this->completado = !$this->completado;
        $this->save();
    }
    public function getDiasRestantesAttribute()
    {
        $fechaActual = Carbon::now();
        $fechaAsignacion = Carbon::parse($this->fecha_asignacion);
        $fechaAproximada = Carbon::parse($this->fecha_aproximada);

        // Verifica si la fecha actual es mayor a la fecha aproximada
        if ($fechaActual->gt($fechaAproximada) && !$this->completado) {
            return 'No Completado a Tiempo';
        }

        // Si la tarea está completada o aún estamos en el rango de fechas, calcula la diferencia
        return $fechaAsignacion->diffInDays($fechaAproximada, false) . ' días restantes';
    }

}
