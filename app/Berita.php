<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Berita extends Model
{ 
    use LogsActivity;
    protected $guarded = ['id'];
    protected $table = 'berita';

    public function gambar(){return $this->hasMany(BeritaGambar::class, 'berita_id');}

    public function getTanggalAttribute(){
        return date("d F Y", strtotime($this->attributes['tanggal']));
    }
}
