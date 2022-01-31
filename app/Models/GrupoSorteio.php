<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoSorteio extends Model
{
    use HasFactory;
    protected $fillable = ['dataSorteio', 'valorMaximo', 'user_id'];

    public function getDataSorteioAttribute()
    {
        $dataConvertida = implode('/', array_reverse(explode('-', $this->attributes['dataNascimento'])));
        return $dataConvertida;
    }

    public function setDataSorteioAttribute($value)
    {
        $this->attributes['dataNascimento'] = implode('-', array_reverse(explode('/', $value)));
    }

    public function user()
    {
        return $this->belongsTo('App/Models/User');
    }

    public function participante()
    {
        return $this->hasMany('App/Models/Participante');
    }

    public function amigoSecreto()
    {
        return $this->hasMany('App/Models/AmigoSecreto');
    }
}
