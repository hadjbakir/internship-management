<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{

    protected $table = 'demande';
    public $timestamps = true;

    protected $fillable = [
        'stageacp',
        'depacp',
        'etidiants_id',
        'maitrestage_id',
        'dateinsc',
        'datefin',
        'diplome',
        'period',
        'theme',
        'motif',

    ];
    public function demande_stagiaire()
    {
        return $this->belongsTo('Etidiants', 'Etidiants_id');
    }

    public function demande_maitrestage()
    {
        return $this->belongsTo('Maitrestage', 'maitrestage_id');
    }

    public function demande_fichepointage()
    {
        return $this->hasOne('Fichepointage', 'demande_id');
    }

    public function demande_fichenotation()
    {
        return $this->hasOne('Fichenotation', 'demande_id');
    }

    public function demande_seance()
    {
        return $this->hasMany('Seance', 'demande_id');
    }
}
