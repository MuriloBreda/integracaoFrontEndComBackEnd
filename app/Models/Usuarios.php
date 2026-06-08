<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NivelAcesso;

class Usuarios extends Model
{

    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'data_nascimento',
        'telefone',
        'nivel_acesso_id',
        'cpf'
    ];

    public function nivelAcesso(){
        return $this->belongsTo(nivelAcesso::class);
    }

}