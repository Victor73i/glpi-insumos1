<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentacion extends Model
{
    use HasFactory;
    protected $table = 'categoria_documentacion';
    protected $fillable = ['id','nombre','descripcion', 'completado','created_at','updated_at'];
    public function toggleComplete()
    {
        $this->completado = !$this->completado;
        $this->save();
    }}
