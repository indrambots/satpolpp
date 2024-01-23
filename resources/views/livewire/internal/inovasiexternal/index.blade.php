
<div >
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h5 class="card-title">List Inovasi {{$tahunSaatIni}} </h5>
                </div>
                <div class="col-4">
                    <div class="btn-group float-right">
                        <button class="btn"
                            :class="seleksi?'btn-danger':'btn-primary' "
                            x-data="{
                                seleksi : @entangle('filters.seleksi')
                            }"
                            @click="seleksi= !seleksi">
                            <i class="fa" :class="seleksi?'fa-window-close-o':'fa-star' "></i>
                            <span x-text="seleksi?'Tampil Keseluruhan Inovasi':'100 Besar'"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="table-responsive">
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
                                        <input type="search" class="form-control form-control-sm" placeholder="" wire:model.lazy="filters.search" aria-controls="datatable">
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- table --}}
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered ">
                                    <thead class="">
                                        <tr>
                                            <th class="col-1">
                                                no
                                            </th>
                                            <th class="col-3" >
                                                Nama User
                                            </th>
                                            <th >
                                                Nama Inovasi
                                            </th>
                                            <th >
                                                Jenis Inovasi
                                            </th>
                                            <th >
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($inovasis as $item )
                                            <tr>
                                                <td><span class="text-warning">{{ ($inovasis->currentpage()-1) * $inovasis->perpage() + $loop->index + 1 }}</span></td>
                                                <td class="
                                                @if (collect($item->toArray())->has('seleksi')  &&  $item->seleksi==true )
                                                    {{
                                                        __('text-primary')
                                                    }}
                                                @endif
                                                ">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            {{
                                                                $item->user->username
                                                            }}
                                                        </li>
                                                        <li class="list-group-item">
                                                            @if ($item->user->biodata()->exists())
                                                            {{$item->user->biodata->nama}}
                                                            @endif
                                                        </li>
                                                      </ul>
                                                </td>
                                                <td class="
                                                @if (collect($item->toArray())->has('seleksi')  &&  $item->seleksi==true )
                                                    {{
                                                        __('text-primary')
                                                    }}
                                                @endif
                                                ">
                                                    {{
                                                        $item->nama
                                                    }}
                                                </td>
                                                <td>
                                                    {{
                                                        ucfirst(
                                                            str_replace('_', ' ', $item->jenis)
                                                        )
                                                    }}
                                                </td>
                                                <td>
                                                    <div class="" >
                                                        <button type="button"
                                                                class="btn btn-sm btn-bg-secondary btn-icon-success btn-hover-dark"
                                                                wire:click="update({{$item->id}})"
                                                                x-data="{ tooltip: 'Ubah Data Inovasi, '+'{{$item->nama}}' }" x-tooltip="tooltip">
                                                          <i class="flaticon-file-1"></i></button>

                                                        <button type="button"
                                                          class="btn btn-sm btn-bg-secondary btn-icon-{{ collect($item->toArray())->has('seleksi')  &&  $item->seleksi==true ? 'danger':'warning'  }} btn-hover-dark"
                                                          wire:click="rating({{$item->id}})"
                                                          x-data="{ tooltip: '{{ collect($item->toArray())->has('seleksi')  &&  $item->seleksi==true ? 'Hapus':'Tambah'  }} 100 besar' }" x-tooltip="tooltip">
                                                            <i class="fa fa-{{ collect($item->toArray())->has('seleksi')  &&  $item->seleksi==true ? 'undo':'star'  }}"></i>
                                                        </button>
                                                        <button type="button"
                                                                class="btn btn-sm btn-bg-secondary btn-icon-info btn-hover-dark"
                                                                wire:click="btnKeterangan({{$item->id}})"
                                                                x-data="{ tooltip: 'Tambah keterangan, '+'{{$item->nama}}' }" x-tooltip="tooltip">
                                                          <i class="flaticon-notepad"></i></button>
                                                        @if ($item->seleksi)
                                                            <button type="button"
                                                                    class="btn btn-sm btn-bg-secondary btn-icon-warning btn-hover-dark"
                                                                    wire:click="btnPenilaian({{$item->id}})"
                                                                    x-data="{ tooltip: 'Beri penilaian, '+'{{$item->nama}}' }" x-tooltip="tooltip">
                                                            <i class="flaticon-line-graph"></i></button>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i> data tidak temukan
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Menampilkan
                                    {{($inovasis->currentpage()-1) * $inovasis->perpage()==0 ? 1: (($inovasis->currentpage()-1) * $inovasis->perpage())+1 }}
                                    sampai
                                    {{ ($inovasis->currentpage()) * $inovasis->perpage()}} dari
                                    {{ $jumlahInovasi}}
                                    Data
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                {{ $inovasis->links('vendor.livewire.bootstrap-metronic') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  bagian modal --}}
    @include('livewire.internal.inovasiexternal.modal.editinovasi')
    @include('livewire.internal.inovasiexternal.modal.keteranganinovasi')
    @include('livewire.internal.inovasiexternal.modal.modalPenilaian')
</div>

@section('script')

@endsection
