<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{

    protected $table = 'faculty';
    protected $fillable = [
        'nom',
        'university_id',
    ];
    public $timestamps = true;


    public function faculty_dep()
    {
        return $this->hasMany('Dep', 'faculty_id');
    }

    public function faculty_university()
    {
        return $this->belongsTo('University', 'university_id');
    }

}
