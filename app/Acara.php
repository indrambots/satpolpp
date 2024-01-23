<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Acara extends Model
{ 
    use LogsActivity;
    protected $guarded = ['id'];
    protected $table = 'acara';

    public function absensi(){return $this->hasMany(Absensi::class, 'acara_id');}

    public function getTanggalAttribute(){
        return date("d F Y", strtotime($this->attributes['tanggal']));
    }
}
