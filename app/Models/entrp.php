<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrp extends Model
{
    use HasFactory;

    protected $table = 'entrp';
    protected $fillable = [
        'nomentrp',
        'directeur',
        'specialite',
        'numtlf',
        'adressentrp'
    ];



}
