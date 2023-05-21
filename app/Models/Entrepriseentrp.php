<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Entrepriseentrp extends Model 
{

    protected $table = 'entrp';
    public $timestamps = true;

    public function entrp_maitrstage()
    {
        return $this->hasMany('Maitrestage', 'entrp_id');
    }

}