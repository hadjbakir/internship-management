<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{

    protected $table = 'seance';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'demande_id',
        'presence',
        'date',
        'hentre',
        'hsorti',
        'observation',
    ];
    public function seance_fichepointage()
    {
        return $this->belongsTo('Fichepointage', 'fichepointage_id');
    }

}
