<?php

namespace App;

use App\Helpers\ConfigModel;
use Illuminate\Database\Eloquent\Model;

class MainData extends ConfigModel
{
    protected $table = 'main_data';
    protected $fillable = ['key', 'value'];


}
