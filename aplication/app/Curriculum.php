<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curriculum extends Model
{

    protected $table = 'curriculum';
    
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'email'
    ];
}