<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
	use LogsActivity;
    protected $guarded = ['id'];
    protected $table = 'users';

    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $table = 'users';
    const RULEREGISTER = ([
        'username' => ['required', 'string', 'email', 'max:255', 'unique:users,username'],
        'nama' => ['required', 'string', 'max:255', ],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
    ]);
    const NICENAME=([
        'username' => 'Email / Username',
        'password' => 'Sandi',
        'nama' => 'Nama',
        'level' =>'Level',
    ]);
    protected static $logAttributes = ['username','password','remember_token','level','notelp','alamat','email','status','id_customer','nama','id_agen','page_customer','page_user','page_agen'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password','level','socialmedia_id','nama','skpd_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setPasswordAttribute($password)
    {$this->attributes['password'] = bcrypt($password);}

    public function biodata(){
        return $this->hasOne(Biodata::class, 'user_id', 'id');
    }

    public function inovasi(){
        return $this->hasMany(Inovasi::class, 'user_id', 'id');
    }

    public static function rules($form,$status='tambah',$id=0){
        return [
            $form.'username' => ['required', 'string', 'min:5', 'unique:users,username'.($id==0?'':','.$id)  ],
            $form.'nama'     => ['required', 'min:5', 'string'],
            $form.'password' => ['required', 'min:5', $status=='tambah'?'confirmed' :'string'],
            $form.'level'    => ['required', 'min:1', 'integer'],
            $form.'skpd_id'  => ['required_if:user.level,5', ],
        ];
    }
    const FORM =[
         'username'              => null,
         'password'              => '',
         'password_confirmation' => '',
         'level'                 => '',
         'nama'                  => null,
         'skpd_id'               => null,
    ];
    const NICENAMEMASTERUSER= [
        'user.username'              => 'Email / Username',
        'user.password'              => 'Sandi',
        'user.password_confirmation' => 'Konfirmasi Sandi',
        'user.nama'                  => 'Nama Pengguna',
        'user.level'                 => 'Level Pengguna',
        'user.skpd_id'               => 'OPD / Dinas',
    ];
    function hari(){
    $hari = date ("D");
 
    switch($hari){
        case 'Sun':
            $hari_ini = "Minggu";
        break;
 
        case 'Mon':         
            $hari_ini = "Senin";
        break;
 
        case 'Tue':
            $hari_ini = "Selasa";
        break;
 
        case 'Wed':
            $hari_ini = "Rabu";
        break;
 
        case 'Thu':
            $hari_ini = "Kamis";
        break;
 
        case 'Fri':
            $hari_ini = "Jumat";
        break;
 
        case 'Sat':
            $hari_ini = "Sabtu";
        break;
        
        default:
            $hari_ini = "Tidak di ketahui";     
        break;
    }
 
    return "<b>" . $hari_ini . "</b>";
 
}
}
