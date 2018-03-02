<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Status extends Model
{
    protected $hidden = ['content'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
