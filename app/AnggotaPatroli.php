<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class AnggotaPatroli extends Model
{
    use LogsActivity;
    protected $guarded = ['id'];

    protected $table = 'anggota_patroli';
}
