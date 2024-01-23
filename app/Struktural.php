<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Struktural extends Model
{
    use LogsActivity;
    protected $guarded = ['id'];
    protected $table = 'struktural';
}
