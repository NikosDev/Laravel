<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['id','email','name','subject','body'];
    public $timestamps = false;
}
