<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome'];

    public function turma(){
        return $this->hasMany('App\Turma');
    }
}
