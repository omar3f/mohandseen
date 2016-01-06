<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    //
    protected $fillable = ['icon_id', 'title', 'description', 'sort'];

    public function icon() {
        return $this->belongsTo('App\Icon');
    }
}
