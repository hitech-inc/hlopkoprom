<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    //
    protected $fillable = ['text', 'images'];
    protected $table = 'mainpage';
}
