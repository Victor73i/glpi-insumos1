<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoDocumentacion extends Model
{
    use HasFactory;
    protected $table = 'estado_documentacion';
    protected $fillable = ['id','nombre','descripcion','created_at','updated_at'];}
