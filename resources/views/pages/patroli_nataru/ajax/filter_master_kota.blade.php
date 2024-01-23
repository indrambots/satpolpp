@foreach($kecamatan as $k)
 <option value="{{ $k->id_kec }}"> {{ $k->nm_kec }}</option>
@endforeach