<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Dep extends Model
{

    protected $table = 'dep';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'faculty_id',
    ];

    public function dep_chefdep()
    {
        return $this->hasMany('Chefdep', 'dep_id');
    }

    public function dep_faculty()
    {
        return $this->belongsTo('Faculty', 'faculty_id');
    }

    public function dep_stagiaires()
    {
        return $this->hasMany('Stagiaire', 'dep_id');
    }

}
