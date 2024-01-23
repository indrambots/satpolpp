<?php

namespace App\Http\Livewire\Internal;

use Auth;
use App\Inovasi;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\BobotWarga;
use App\Traits\DataTable\WithSorting;
use Illuminate\Support\Facades\Validator;
use App\Traits\DataTable\WithPerPagePagination;
class InovasiexternalKomponen extends Component
{
    use WithPerPagePagination, WithSorting;
    public $idInovasi =0;
    public $level = 1;
    public $status = 'update';
    public $inovasi;
    public $inovasiDefault;
    public $tick=0;
    public $jumlahSelect = [
        10,25,50,100
    ];
    public $filters = [
        'search' => '',
        'seleksi' =>false,
    ];
    public $tahapanInovasis = [
        array(
            "value"=> 'inisiatif',
            "nama" => 'Inisiatif'
        ),
        array(
            "value"=> 'uji_coba',
            "nama" => "Uji Coba",
        ),
        array(
            "value"=> 'penerapan',
            "nama" => 'Penerapan'
        )
    ];
    public $jenisInovasis = [
        array(
            "value"=> 'teknologi',
            "nama" => 'Teknologi'
        ),
        array(
            "value"=> 'ekonomi',
            "nama" => 'Ekonomi'
        ),
        array(
            "value"=> 'non_ekonomi',
            "nama" => 'Non Ekonomi'
        ),
    ];
    public $isCovids=[
        array(
            'value'=> 'covid',
            "nama" => 'Covid 19'
        ),
        array(
            'value'=> 'non_covid',
            "nama" => 'Non Covid 19'
        ),
    ];
    public $penilaian =[];
    protected $listeners = ['updateRating'];
    protected $paginationTheme = 'bootstrap-metronic';
    public function update($inovasi){
        $this->reset();
        $this->inovasiDefault = Inovasi::with('user', 'user.biodata','bobotwarga')->whereId($inovasi)->first();
        $this->inovasi = Inovasi::whereId($inovasi)->first(
            collect(Inovasi::NICENAME)->except([
                'poster',
                'ppt',
                'suratPernyataan'
            ])->keys()->toArray())
            ->toArray();
        $this->idInovasi = $inovasi;
        $this->dispatchBrowserEvent('jQueryModal',[
            'idModal'=>'modal-edit-inovasi',
            'method' => 'show',
        ]);
    }
    public function getTahunSaatIniProperty(){
        return Carbon::now()->year;
    }
    public function getJumlahInovasiProperty(){
        return Inovasi::whereTahun(date("Y"))->count();
    }
    public function render(){
        return view('livewire.internal.inovasiexternal.index',[
            'tahunSaatIni'  => $this->tahunSaatIni,
            'inovasis'      => $this->rows,
            'jumlahInovasi' => $this->jumlahInovasi,
            'detailInovasi' => $this->detailInovasi,
            'bobotWarga' => $this->bobotWarga,
        ])->extends('layouts.app')
        ->section('content');
    }
    public function getRowsQueryProperty(){
        $query = Inovasi::query()
                ->with('user', 'user.biodata')
                ->when($this->filters['seleksi'], function ($q, $seleksi) {
                    return $q->whereSeleksi($seleksi);
                })->when($this->filters['search'], function ($q, $search) {
                    return $q->where('nama','ilike', '%'.$search.'%')
                            ->orWhereHas('user', function ($query) use ($search) {
                                $query->where('username','ilike', '%'.$search.'%');
                            });
                })->whereHas('user', function ($query) {
                    $query->whereLevel(6);
                })->orderBy('created_at','DESC');
        return $this->applySorting($query);
    }
    public function getRowsProperty(){
        return $this->applyPagination($this->rowsQuery);
    }
    public function getDetailInovasiProperty(){
        return $this->idInovasi!=0? Inovasi::with('user', 'user.biodata','filebobot')->whereId($this->idInovasi)->first() : array();
    }
    public function getBobotWargaProperty(){
        return BobotWarga::aspekPenilaian();
    }
    public function bootstrapMetronic(){
        return 'vendor.livewire.bootstrap-metronic';
    }
    public function rules(){
        return Inovasi::rules('inovasi',$this->status);
    }
    public function save(){
        $this->validate();
        Inovasi::find($this->idInovasi)->update($this->inovasi);
        $this->dispatchBrowserEvent('jQueryModal',[
            'idModal'=> $this->status=='update'? 'modal-edit-inovasi': 'modal-edit-inovasi-keterangan',
            'method' => 'hide',
        ]);
        $type = [
            'type'  => 'success',
            'title' => 'Berhasil',
            'text'  => 'Data Inovasi Berhasil Diubah',
        ];
        $this->dispatchBrowserEvent('notify',$type);
    }
    // pemberian rating 100 besar
    public function rating(Inovasi $inovasi){
        $this->dispatchBrowserEvent('swal:confirmAlert', [
            'type'   => 'warning',
            'title'  => 'Apakah anda yakin.?',
            'text'   => 'Inovasi - '.$inovasi->nama.' Akan '.($inovasi->seleksi==true? 'dihapus dari': 'ditambahkan ke').' 100 besar ',
            'cancel' => 'Inovasi - '.$inovasi->nama.' belum '.($inovasi->seleksi==true? 'dihapus dari': 'ditambahkan ke').' 100 besar',
            'id'     => $inovasi->id,
            'method' => 'updateRating'
        ]);
    }
    public function updateRating(Inovasi $inovasi){
        if ($inovasi->seleksi == true) {
            $inovasi->update([
                'seleksi'=> $inovasi->seleksi == true?false:true
            ]);
            $type = [
                'type'  => 'success',
                'title' => 'Berhasil',
                'text'  => 'Data Ranking Berhasil Diubah',
            ];
        }else{
            if (Inovasi::whereTahun(date("Y"))->whereSeleksi(true)->count()>100 ) {
                $type = [
                    'type'  => 'error',
                    'title' => 'Gagal',
                    'text'  => 'Inovasi di tahun -'. $this->tahunSaatIni.' melebihi 100 nominasi' ,
                ];
            } else {
                $inovasi->update([
                    'seleksi'=> $inovasi->seleksi == true?false:true
                ]);
                $type = [
                    'type'  => 'success',
                    'title' => 'Berhasil',
                    'text'  => 'Data Ranking Berhasil Diubah',
                ];
            }
        }
        $this->dispatchBrowserEvent('notify',$type);
    }
    // mode create keterangan
    public function btnKeterangan(Inovasi $inovasi){
        $this->idInovasi = $inovasi->id;
        $this->status = 'keterangan';
        $this->inovasi = $inovasi->only('keterangan');
        $this->tick = $this->tick+1;
        $this->dispatchBrowserEvent('jQueryModal',[
            'idModal'=>'modal-edit-inovasi-keterangan',
            'method' => 'show',
        ]);
    }
    // mode pemberian score
    public function btnPenilaian(Inovasi $inovasi){
        $this->idInovasi = $inovasi->id;
        $this->status = 'penilaian';
        $this->reset('penilaian');
        $tamp = collect();
        BobotWarga::aspekPenilaian()->each(function($item,$key) use ($tamp){
            $tamp->put($item->id, array('nilai'=>0));
        });
        $this->penilaian = $tamp->toArray();
        if ($inovasi->bobotwarga->count()) {
            collect($this->penilaian)->each(function($item,$key)use($inovasi){
                $this->penilaian[$key]['nilai'] = $inovasi->bobotwarga->find($key)->pivot->nilai;
            });
        }
        $this->dispatchBrowserEvent('jQueryModal',[
            'idModal'=>'modal-edit-inovasi-penilaian',
            'method' => 'show',
        ]);
    }
    public function saveRating(){
        $validatedData = Validator::make([
                'penilaian'=>$this->penilaian
            ],
            [
                "penilaian"    => "required|array|min:1",
                "penilaian.*.nilai"    => "required|integer|min:1",
            ]
        )->validate();
        Inovasi::find($this->idInovasi)->bobotwarga()->sync(
            $this->penilaian
        );
        $this->dispatchBrowserEvent('jQueryModal',[
            'idModal'=> 'modal-edit-inovasi-penilaian',
            'method' => 'hide',
        ]);
        $type = [
            'type'  => 'success',
            'title' => 'Berhasil',
            'text'  => 'Data Ranking Berhasil disimpan',
        ];
        $this->dispatchBrowserEvent('notify',$type);

    }
    public function mount(){
        $tamp = collect();
        BobotWarga::aspekPenilaian()->each(function($item,$key) use ($tamp){
            $tamp->put($item->id, array('nilai'=>0));
        });
        $this->penilaian = $tamp;
    }
}
