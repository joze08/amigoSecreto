<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmigoSecreto extends Model
{
    use HasFactory;
    protected $fillable = ['participantes_id', 'grupoSorteio_id', 'participanteSorteado_id'];

    public function grupoSorteio()
    {
        return $this->belongsTo('App/Models/GrupoSorteio');
    }

    public function participante()
    {
        return $this->belongsTo('App/Models/User');
    }
}
