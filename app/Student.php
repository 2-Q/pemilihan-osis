<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // use SoftDeletes;
    public $timestamps = false;
    protected $guarded = ['id'];
}
