<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $guarded = ['id'];
    protected $table = 'master_kelurahan';
}
