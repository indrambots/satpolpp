<div>
    @forelse ($pesan as $item)
        <div class="alert alert-custom alert-light-{{ $item['type'] }}  fade show mb-5" role="alert">
            <div class="alert-text">
                {{
                    $item['text']
                }}
            </div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="ki ki-close"></i>
                    </span>
                </button>
            </div>
        </div>
    @empty

    @endforelse
    @forelse ($pesan as $item)

    @empty

    @endforelse
    <div class="row">
        @if ($showCrud)
            <div class="col-12 col-md-5">
                <form wire:submit.prevent="save">
                <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-12">
                                    <h5 class="card-title">
                                        <i class="fa fa-plus-square text-primary"></i>
                                        <span >
                                            {{
                                                Str::ucfirst($status)
                                            }} Pengguna
                                            @if ($status == 'ubah' && $idUser !=0)
                                                {{
                                                    $detail_user->nama
                                                }}
                                            @endif
                                        </span>
                                    </h5>
                                    @if ($status=='')
                                        <div>
                                            <center>
                                                <img src="{{asset('images/loader.gif')}}" class="rounded" alt="">
                                            </center>
                                        </div>
                                    @else
                                        <div
                                            class="form-group"
                                            >
                                            <label for="level-user">Level Pengguna</label>
                                            <div wire:ignore
                                            x-data="{
                                                value : @entangle('user.level') ,
                                                tick  : @entangle('tick'),
                                                status: @entangle('status'),
                                                init(){
                                                    let alpinejs = this;
                                                    let select2 = $($refs.select2).select2().on('change', function (e) {
                                                        alpinejs.value = select2.select2('val');
                                                    });
                                                    if(this.status =='ubah'){
                                                        select2.val(alpinejs.value).trigger('change');
                                                    }
                                                    $watch('tick', () => {
                                                        select2.val(alpinejs.value).trigger('change');
                                                    })
                                                }
                                            }">
                                                <select x-ref="select2"
                                                        class="form-control"
                                                        id="level-user">
                                                    <option value="null" >Pilih Salah Satu</option>
                                                    @foreach($levelUser as $item)
                                                        <option value="{{ $item['value'] }}" >{{ $item['nama'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            @error(('user.level'))
                                                <div class="text-danger error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        @if ($user['level'] == 5)
                                            <div class="form-group" >
                                                <label for="select-opd">OPD / Dinas</label>
                                                <div wire:ignore
                                                    x-data="{
                                                        value : @entangle('user.skpd_id') ,
                                                        tick  : @entangle('tick'),
                                                        status: @entangle('status'),
                                                        init(){
                                                            let alpinejs = this;
                                                            let select2 = $($refs.select2).select2().on('change', function (e) {
                                                                alpinejs.value = select2.select2('val');
                                                            });
                                                            if(this.status =='ubah' && this.value != null){
                                                                select2.val(alpinejs.value).trigger('change');
                                                            }
                                                            $watch('tick', () => {
                                                                select2.val(alpinejs.value).trigger('change');
                                                            })
                                                        }
                                                    }">
                                                    <select x-ref="select2" id="select-opd" class="form-control">
                                                        <option value="null" >Pilih Salah Satu</option>
                                                        @foreach($opds as $item)
                                                            <option value="{{ $item->unit_id }}" >{{ $item->unit_nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error(('user.skpd_id'))
                                                    <div class="text-danger error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="id-username">Username</label>
                                            <input class="form-control" id="id-username" wire:model.lazy="user.username" type="text">
                                            @error(('user.username'))
                                                <div class="text-danger error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="id-nama">Nama</label>
                                            <input class="form-control" id="id-nama" wire:model.lazy="user.nama" type="text">
                                            @error(('user.nama'))
                                                <div class="text-danger error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="id-sandi">Sandi</label>
                                            <input type="password" class="form-control" wire:model.lazy="user.password" id="id-sandi">
                                            @error(('user.password'))
                                                <div class="text-danger error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="id-konfirmasi-sandi">Konfirmasi Sandi</label>
                                            <input type="password" class="form-control" wire:model.lazy="user.password_confirmation" id="id-konfirmasi-sandi">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" wire:click="tutup()">
                                    <i class="fa fa-close"></i>
                                    Tutup
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    {{
                                        $status == 'tambah'?
                                        __('Simpan'):
                                        __('Ubah')
                                    }}
                                    <i class="fa fa-plus-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        @endif
        <div class="col-12
            {{
                $showCrud ?
                'col-md-7':
                ''
            }}">

            <div class="card">
                <div class="card-body">
                    {{-- bagian header --}}
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <h5 class="card-title"><i class="fa fa-list-alt text-primary" aria-hidden="true"></i> <span>Data Pengguna</span>  </h5>
                        </div>
                        <div class="col-4">
                            <div class="btn-group float-right">
                                <button class="btn btn-info"
                                    x-data="{
                                        show : @entangle('showCrud')
                                    }" wire:click="create()" :hidden="show">
                                    <i class="fa fa-plus-square" ></i>
                                    <span >Tambah Pengguna</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- table pengguna --}}
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <div class="dataTables_wrapper dt-bootstrap4 no-footer">

                                {{-- filter --}}
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="datatable_length">
                                            <label> Tampil
                                                <select name="datatable_length"
                                                        aria-controls="datatable"
                                                        class="custom-select custom-select-sm form-control form-control-sm"
                                                        wire:model.lazy="perPage">
                                                        @foreach ($jumlahSelect as $item)
                                                            <option value="{{$item}}">{{$item}}</option>
                                                        @endforeach
                                                </select>
                                                    entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="datatable_filter" class="dataTables_filter">
                                            <label> Cari :
                                                <input type="search" class="form-control form-control-sm" placeholder="" wire:model="filters.search" aria-controls="datatable">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- table --}}
                                <table class="table table-bordered">
                                    <thead class="">
                                        <tr class="table-success">
                                            <th>#Nomor</th>
                                            <th>
                                                Nama Penguna / OPD
                                            </th>
                                            <th>
                                                level
                                            </th>
                                            <th>
                                                aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $item)
                                            <tr>
                                                <td><span class="text-warning">{{ ($users->currentpage()-1) * $users->perpage() + $loop->index + 1 }}</span></td>
                                                <td>
                                                    {{
                                                        $item->nama == null?
                                                        $item->username:
                                                        $item->nama
                                                    }}
                                                </td>
                                                <td>
                                                    {{
                                                        collect($levelUser)->filter(function($value, $key) use($item) {
                                                            return $value['value'] == $item->level;
                                                        })->first()['nama']
                                                    }}
                                                </td>
                                                <td>
                                                    <div>
                                                        <button type="button"
                                                                class="btn btn-sm btn-bg-secondary btn-icon-success btn-hover-dark mx-1"
                                                                wire:click="update({{$item->id}})"
                                                                x-data="{ tooltip: 'Ubah Data User, '+'{{$item->nama == null?
                                                                    $item->username:
                                                                    $item->nama}}' }" x-tooltip="tooltip">
                                                            <i class="flaticon-file-1"></i>
                                                        <button type="button"
                                                                class="btn btn-sm btn-bg-secondary btn-icon-danger btn-hover-dark mx-1"
                                                                wire:click="confirmDelete({{$item->id}})"
                                                                x-data="{ tooltip: 'Hapus Data User, '+'{{$item->nama == null?
                                                                    $item->username:
                                                                    $item->nama}}' }" x-tooltip="tooltip">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    <i class="fa fa-folder-open text-danger" aria-hidden="true"></i> data tidak temukan
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{-- pagination --}}
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Menampilkan
                                            {{
                                                ($users->currentpage()-1) * $users->perpage()==0 ? 1:
                                                (($users->currentpage()-1) * $users->perpage())+1 }}
                                            sampai
                                            {{
                                                    ($users->currentpage()) * $users->perpage()>=$jumlahUser?
                                                    $jumlahUser:
                                                    ($users->currentpage()) * $users->perpage()
                                            }} dari
                                            {{ $jumlahUser}}
                                            Data
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        {{ $users->links('vendor.livewire.bootstrap-metronic') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
