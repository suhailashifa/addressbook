<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable= ['id','fname','lname','email','address','phone'];
}
