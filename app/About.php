<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $fillable = ['short','year','text', 'images'];
    protected $table = 'aboutpage';

    public $timestamps = false;
}
