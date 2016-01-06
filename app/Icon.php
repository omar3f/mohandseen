<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    //

    protected $fillable = ['title'];

    public function committees() {
        return $this->hasMany('App\Committee');
    }
}
