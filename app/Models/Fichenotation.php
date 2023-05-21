<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Fichenotation extends Model
{

    protected $table = 'fichenotation';
    public $timestamps = true;
    protected $fillable = [
        'discipline',
        'demande_id',
        'aptitude',
        'initiative',
        'imagination',
        'conaissance',
        'note',
        'appreciation',
        'envoi',
    ];

    public function fichenotation_demande()
    {
        return $this->belongsTo('Demande', 'demande_id');
    }

}
