<?php

namespace App\Http\Livewire\Internal;

use Auth,Str;
use App\Pd;
use App\User;
use Livewire\Component;
use App\Traits\DataTable\WithSorting;
use Illuminate\Support\Facades\Validator;
use App\Traits\DataTable\WithPerPagePagination;

class MasterUserKomponen extends Component{
    use WithPerPagePagination, WithSorting;
    public $user                 = User::FORM;
    public $idUser               = 0;
    public $tick                 = 0;
    public $status               = '';
    public $showCrud             = false;
    public $validationAttributes = User::NICENAMEMASTERUSER;
    protected $listeners         = ['delete'];
    public $pesan                = array();
    public $jumlahSelect         = [
        10,25,50,100
    ];
    public $levelUser            = [
        array(
            "value"=> 1,
            "nama" => 'admin'
        ),
        array(
            "value"=> 5,
            "nama" => "OPD / Dinas",
        ),
        array(
            "value"=> 6,
            "nama" => 'Pengguna umum'
        )
    ];

    public $filters = [
        'search' => '',
    ];
    public function render(){
        return view('livewire.internal.master-user.index',[
            'users'      => $this->rows,
            'jumlahUser' => $this->jumlahUser,
            'opds'       => $this->pds,
            'detail_user'=> $this->detailUser,
        ])->extends('layouts.app')
        ->section('content');
    }
    public function updatedUserLevel($value){
        $this->user['level']=$value =='null' || $value ==null? null: (int) $value;
        $this->user['skpd_id']=null;
    }

    public function getRowsQueryProperty(){
        $query = User::query()
                ->with('biodata')
                ->when($this->filters['search'], function ($q, $search) {
                    return $q->where('nama','ilike', '%'.$search.'%')
                                ->orWhere('username', 'ilike', '%'.$search.'%');
                })->where('id', '!=',0)
                ->orderBy('created_at','DESC');
        return $this->applySorting($query);
    }
    public function getRowsProperty(){
        return $this->applyPagination($this->rowsQuery);
    }

    public function getPdsProperty(){
        return Pd::where('unit_id','!=', 'SRBY')->get();
    }
    public function getDetailUserProperty(){
        return $this->idUser != 0 ? User::findOrFail($this->idUser) :'';
    }
    function getJumlahUserProperty(){
        return User::where('id', '!=',0)
        ->when($this->filters['search'], function ($q, $search) {
            return $q->where('nama','ilike', '%'.$search.'%')
                        ->orWhere('username', 'ilike', '%'.$search.'%');
        })->count();
    }
    public function updatedFilters(){
        $this->resetPage();
    }
    public function create(){
        $this->resetErrorBag();
        $this->reset('idUser');
        $this->reset('user');
        $this->reset('pesan');
        $this->status = '';
        $this->showCrud = true;
        $this->status ='tambah';
        $this->tick++;
    }
    public function update(User $user){
        $this->resetErrorBag();
        $this->reset('idUser');
        $this->reset('pesan');
        $this->reset('user');
        $this->user = $user->only('username','level','socialmedia_id','nama','skpd_id');
        $this->idUser = $user->id;
        $this->status = '';
        $this->showCrud = true;
        $this->status ='ubah';
        $this->tick++;
    }
    public function tutup(){
        $this->resetErrorBag();
        $this->reset('user');
        $this->reset('pesan');
        $this->reset('showCrud');
        $this->reset('status');
        $this->reset('idUser');
    }
    protected function rules(){
        return User::rules('user.',$this->status,$this->idUser );
    }
    public function save(){
        $this->validate();
        if ($this->idUser == 0) {
            User::create($this->user);
        } else {
            User::find($this->idUser)->update(
                $this->user
            );
        }
        $type = [
            'type'  => 'success',
            'title' => 'Berhasil',
            'text'  => 'Data Pengguna Berhasil '. Str::ucfirst($this->status) ,
        ];
        $this->pesan = collect($this->pesan)->push($type)->toArray();
        $this->dispatchBrowserEvent('notify',$type);
        $this->resetErrorBag();
        $this->reset('user');
        $this->reset('showCrud');
        $this->reset('status');
        $this->reset('idUser');
    }

    public function confirmDelete(User $user){
        $this->dispatchBrowserEvent('swal:confirmAlert', [
            'type'   => 'warning',
            'title'  => 'Apakah anda yakin.?',
            'text'   => 'Pengguna - '.$user->nama.' Akan dihapus',
            'cancel' => 'Pengguna - '.$user->nama.' belum terhapus',
            'id'     => $user->id,
            'method' => 'delete'
        ]);
    }
    public function delete(User $user){
        if ($user->level == 1 && $user->inovasi()->count()>0  ) {
            $type = [
                'type'  => 'error',
                'title' => 'Gagal',
                'text'  => 'User telah memiliki inovasi ',
            ];
            $this->dispatchBrowserEvent('notify',$type);
        }
        $this->reset('user');
        $this->reset('showCrud');
        $this->reset('status');
        $this->reset('idUser');
        $galeri->delete();
        $type = [
            'type'  => 'success',
            'title' => 'Berhasil',
            'text'  => 'Galeri berhasil dihapus',
        ];
        $this->dispatchBrowserEvent('notify',$type);
    }
}
