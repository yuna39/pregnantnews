<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $quarded = array('id');
    
    public static $rules = array(
        'day' => 'required',
    );
}
