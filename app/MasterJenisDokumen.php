<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class MasterJenisDokumen extends Model
{
    protected $guarded = ['id'];

    protected $table = 'master_jenis_dokumen';
}
