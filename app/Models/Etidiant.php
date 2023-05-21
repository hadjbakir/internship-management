<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Etidiant extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard ='etidiant';
    protected $fillable = [
        'id',
        'name',
        'email',
        'family',
        'password',
        'sexe',
        'numtlf' ,
        'specialie',
        'semestre' ,
        'birthday',
        'diplome',
        'stauts',
        'dep_id'
    ];

    public function stagiare_demande()
    {
        return $this->hasMany('Demande', 'etidiant_id');
    }

    public function stagiaire_dep()
    {
        return $this->belongsTo('Dep', 'dep_id');
    }
}
