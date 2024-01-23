<?php

namespace App;

use App\Models\BobotWarga;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inovasi extends Model
{
    use LogsActivity;

    protected $guarded = ['id'];
    protected $table = 'inovasi';
    protected $dates = ['deleted_at'];
    public function user(){return $this->belongsTo(User::class, 'user_id', 'id');}
    public function bobotwarga(){return $this->belongsToMany(BobotWarga::class,'inovasi_bobot_wargas','bobot_warga_id','inovasi_id')->withPivot('nilai');}
    public function filebobot(){return $this->hasMany(FileBobot::class, 'bobot_inovasi_id');}

    public static function createUpdateInovasiExternal($level, $status,$upload='',$id=''){
        $rules = collect([]);
        if ($status =='create') {
            if ($level ==1) {
                $rules = $rules->merge([
                    'nama'     => ['required', 'string', 'min:5'],
                    'tahapan'  => ['required', 'string', Rule::in(['inisiatif', 'uji_coba', 'penerapan'])],
                    'jenis'         => ['required', 'string', Rule::in(['teknologi','ekonomi','non_ekonomi'])],
                    'covid'    => ['required', 'string', Rule::in(['covid', 'non_covid'])],
                ]);
            }else{
                $rules = $rules->merge([
                    'poster'          => ['required','file','max:5192','mimetypes:image/png,image/gif,image/jpeg'],
                    'ppt'             => ['required','file','max:5192','mimetypes:application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation'],
                    'suratPernyataan' => ['required','file','max:1192','mimetypes:application/pdf'],
                    'youtube_video'   => ['required','url'],
                ]);
            }
        }else{
            if ($level ==1) {
                $rules = $rules->merge([
                    'nama'          => ['required', 'string', 'min:5'],
                    'tahapan'       => ['required', 'string', Rule::in(['inisiatif', 'uji_coba', 'penerapan'])],
                    'jenis'         => ['required', 'string', Rule::in(['teknologi','ekonomi','non_ekonomi'])],
                    'covid'         => ['required', 'string', Rule::in(['covid', 'non_covid'])],
                    'youtube_video' => ['required','url'],
                ]);
            }else{
                switch ($upload) {
                    case 'poster':
                        $rules = $rules->merge([
                            'poster'          => ['required','file','max:5192','mimetypes:image/png,image/gif,image/jpeg'],
                        ]);
                        break;
                    case 'ppt':
                        $rules = $rules->merge([
                            'ppt'             => ['required','file','max:5192','mimetypes:application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation'],
                        ]);
                        break;
                    case 'suratPernyataan':
                        $rules = $rules->merge([
                            'suratPernyataan' => ['required','file','max:1192','mimetypes:application/pdf'],
                        ]);
                        break;
                    default:
                    break;
                }
            }
        }
        return $rules->toArray();
    }
    const NICENAME=([
        'nama'            => 'Nama Inovasi',
        'tahapan'         => 'Tahapan',
        'jenis'           => 'Jenis Inovasi',
        'covid'           => 'Covid',
        'bentuk'          => 'Bentuk Inovasi',
        'kategori'        => 'Bentuk Inovasi',
        'poster'          => 'Poster',
        'ppt'             => 'Power Point',
        'suratPernyataan' => 'Surat Pernyataan',
        'youtube_video'   => 'Url Youtube',
    ]);
    public static function rules($nama,$status){
        if ($status == 'keterangan') {
            return array(
                $nama.'.keterangan'          => ['required', 'string', 'min:5'],
            );
        }
        else{
            return [
                $nama.'.nama'          => ['required', 'string', 'min:5'],
                $nama.'.tahapan'       => ['required', 'string', Rule::in(['inisiatif', 'uji_coba', 'penerapan'])],
                $nama.'.jenis'         => ['required', 'string', Rule::in(['teknologi','ekonomi','non_ekonomi'])],
                $nama.'.covid'         => ['required', 'string', Rule::in(['covid', 'non_covid'])],
                $nama.'.youtube_video' => ['required', 'url'],
            ];
        }
    }
    public function nicenime() {
        return array(
            'nama'            => 'Nama Inovasi',
            'tahapan'         => 'Tahapan',
            'jenis'           => 'Jenis Inovasi',
            'covid'           => 'Covid',
            'bentuk'          => 'Bentuk Inovasi',
            'kategori'        => 'Bentuk Inovasi',
            'poster'          => 'Poster',
            'ppt'             => 'Power Point',
            'suratPernyataan' => 'Surat Pernyataan',
            'youtube_video'   => 'Url Youtube',
        );
    }
    public function setKategoriAttribute($kategori)
    {$this->attributes['kategori'] = json_encode($kategori); }
    public function getKategorisAttribute()
    {return json_decode($this->kategori); }
}
