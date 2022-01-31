<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $fillable = ['preferencia', 'user_id', 'grupoSorteio_id'];

    public function user()
    {
        return $this->belongsTo('App/Models/User');
    }

    public function grupoSorteio()
    {
        return $this->belongsTo('App/Models/GrupoSorteio');
    }

    public function amigoSecreto()
    {
        return $this->hasMany('App/Models/AmigoSecreto');
    }
}
