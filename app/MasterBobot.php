<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class MasterBobot extends Model
{
    protected $guarded = ['id'];

    protected $table = 'bobots';
}
