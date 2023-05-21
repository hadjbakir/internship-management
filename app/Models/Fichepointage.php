<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Fichepointage extends Model
{

    protected $table = 'fichepointage';
    public $timestamps = true;

    public function fichepointage_demande()
    {
        return $this->belongsTo('Demande', 'demande_id');
    }

   

}
