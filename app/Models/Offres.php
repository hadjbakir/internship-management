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
        'dure',
        'nmbrpostes',
        'poste',
    ];


    public function offres_maitrestage()
    {
        return $this->belongsTo('Maitrestage', 'maitrestage_id');
    }

}
