<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{

    protected $table = 'university';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'wilaya',
    ];
    
    public function university_faculty()
    {

       return $this->hasMany('Faculty', 'university_id');
    }

}
