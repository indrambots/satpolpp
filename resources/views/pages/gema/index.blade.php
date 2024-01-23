@extends('layouts.app_portal')
@section('meta')
<meta property="og:title" content="DATA HASIL ASSESTMENT KEBUTUHAN PRIORITAS LKSA">
<meta property="og:image" content="{{ asset('assets/media/bg/sigap.png') }}">
<meta property="og:description" content="Satuan Polisi Pamong Praja Provinsi Jawa Timur
Jl. Jagir Wonokromo No.352, Sidosermo, Kec. Wonocolo, Surabaya, Jawa Timur 60239">
@endsection
@section('content')
 <div class="row">
    <div class="col-lg-12">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">
                    DATA KEBUTUHAN PRIORITAS LKSA
                </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>LKSA</th>
                                <th>Jenis LKSA</th>
                                <th>Penanggung Jawab Baksos</th>
                                <th>Kota</th>
                                <th>Alamat</th>
                                <th>Total Anak Asuh</th>
                                <th>Kebutuhan Prioritas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
       $('#datatable').DataTable({
        processing: true,
        serverSide: false,
        paging:true,
        ajax:'{{ url('gema/datatable') }}',
         columns: [
    {data: 'id',             name:'id'},
    {data: 'nama',             name:'nama'},
      {data: 'jenis_lksa',name:'jenis_lksa'},
      {data: 'pj',         name:'pj'},
      {data: 'kota',       name:'kota'},
      {data: 'alamat_lengkap',     name:'alamat_lengkap'},
      {data: 'total_anak',     name:'total_anak'},
      {data: 'kebutuhan_prioritas',     name:'kebutuhan_prioritas'},
      {data: 'aksi',     name:'aksi'},
        ],
        "order": [[ 0, "desc" ]],
        "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
          ],
      })
</script>
@endsection