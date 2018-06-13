<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextBlock extends Model
{
    //
    protected $fillable = ['blockname', 'text'];
    protected $table = 'textblocks';
    public $timestamps = false;
}
