<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $guarded = ['id'];
    protected $table = 'master_kecamatan';
}
