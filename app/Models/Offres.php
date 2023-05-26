<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Offres extends Model
{

    protected $table = 'offres';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'maitrestages_id',
        'datedebut',
        'datefinish',
        'period',
        'nmbrpostes',
        'poste',
        'diplome',
        'theme'
    ];


    public function offres_maitrestage()
    {
        return $this->belongsTo('Maitrestage', 'maitrestage_id');
    }

}
