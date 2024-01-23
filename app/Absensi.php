<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Absensi extends Model
{
    use LogsActivity;
    protected $guarded = ['id'];
    protected $table = 'absensi';
}
