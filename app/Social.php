<?php

namespace App;

use App\Helpers\ConfigModel;
use Illuminate\Database\Eloquent\Model;

class Social extends ConfigModel
{

    protected $table = 'social';
    protected $fillable = ['key', 'value'];
}
