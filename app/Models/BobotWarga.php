<?php

namespace App\Models;

use App\inovasi;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class BobotWarga extends Model{
    protected $table = 'bobot_wargas';
    protected $fillable = ['tahun','aspek_penilaian','uraian','nilai'];
    public function inovasi(){
        return $this->belongsToMany(inovasi::class,'inovasi_bobot_wargas','inovasi_id','bobot_warga_id');
    }
    public static function aspekPenilaian(){
        return BobotWarga::whereTahun(Carbon::now()->format('Y'))->get();
    }
}
