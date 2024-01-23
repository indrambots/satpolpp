<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Bobot extends Model
{
    use LogsActivity;
    protected $guarded = ['id'];

    protected $table = 'bobot_inovasi';
}
