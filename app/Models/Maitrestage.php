<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Maitrestage extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'maitrestages';
    protected $guard ='maitrestage';
    protected $fillable = [
        'id',
        'name',
        'family',
        'password',
        'numtlf',
        'email',
        'sexe',
        'birthday'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function maitrestage_demande()
    {
        return $this->hasMany('Demande', 'maitrestage_id');
    }

    public function maitrestage_entrp()
    {
        return $this->belongsTo('Entrepriseentrp', 'entrp_id');
    }

    public function maitrestage_offres()
    {
        return $this->hasMany('Offres', 'maitrestage_id');
    }
}


