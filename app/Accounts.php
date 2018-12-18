<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    //protected $table = 'Account';
    protected $primaryKey = 'accId';
    public $timestamps = false;
}
