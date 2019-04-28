<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCost extends Model
{
    protected $fillable = ['income','costName','cost','user_id'];
}
