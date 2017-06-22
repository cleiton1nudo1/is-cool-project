<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = ['curso_id'];

    public function curso(){
        return $this->belongsTo('App\Curso');
    }
}
