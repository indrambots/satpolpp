@foreach($kelurahan as $k)
 <option value="{{ $k->id_desa }}"> {{ $k->nm_desa }}</option>
@endforeach