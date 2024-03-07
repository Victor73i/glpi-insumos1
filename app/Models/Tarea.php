<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $table = 'tarea';
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'fecha_asignacion', 'fecha_aproximada', 'fecha_terminado','observacion', 'completado', 'id_glpi_tickets','id_glpi_users', 'created_at', 'updated_at'
    ];




    public function glpi_tickets()
    {
        return $this->belongsTo(GlpiTickets::class, 'id_glpi_tickets', 'id');
    }
    public function glpi_users()
    {
        return $this->belongsTo(GlpiUsers::class, 'id_glpi_tickets', 'id');
    }
    public function toggleComplete()
    {
        $this->completado = !$this->completado;
        $this->save();
    }
}
