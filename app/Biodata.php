<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Validation\Rule;

class Biodata extends Model
{
    use LogsActivity;
    protected $guarded = ['id'];
    protected $table = 'biodata';
    protected $casts = [
        'tgl_lahir' => 'date'
    ];
    public function inovasi(){return $this->belongsTo(Inovasi::class, 'bobot_inovasi_id', 'id');}
    public static function createUpdate($level, $status,$upload='',$id=''){
        $rules = collect([]);
        if ($status =='create') {
            if ($level == 1) {
                $rules = $rules->merge([
                    'nik'       => ['required', 'string', 'min:16', 'max:16', Rule::unique('biodata', 'nik')],
                ]);
            }else{
                $rules = $rules->merge([
                    'nama'         => ['required', 'string'],
                    'tgl_lahir'    => ['required', 'string'],
                    'alamat'       => ['required', 'string'],
                    'foto_profile' => ['required','file','max:5192','mimetypes:image/png,image/gif,image/jpeg'],
                    'nomortelp'    => ['required', 'integer', 'min:8'],
                    'nik'          => ['required', 'string', 'min:16', 'max:16'],
                ]);
            }
        }else{
            $rules = $rules->merge([
                'foto_profile' => ['file','max:5192','mimetypes:image/png,image/gif,image/jpeg'],
                'nomortelp'    => ['required', 'integer', 'min:8'],
            ]);
        }
        return $rules->toArray();
    }
    const NICENAME=([
        'user_id'      => 'Pengguna Id',
        'nama'         => 'Nama Pengguna',
        'tgl_lahir'    => 'Tanggal Lahir',
        'alamat'       => 'Alamat',
        'foto_profile' => 'Foto Profile',
        'nomortelp' => 'Foto Profile',
        'nik'          => 'NIK',
    ]);

    public function getTglLahirAttribute(){
        return date("d-m-Y", strtotime($this->attributes['tgl_lahir']));
    }

}
