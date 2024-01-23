<?php

namespace App;
use Storage;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class FileBobot extends Model
{
    use LogsActivity;

    protected $guarded = ['id'];
    protected $table = 'file_bobot';
    protected $dates = ['created_at','updated_at'];
}
