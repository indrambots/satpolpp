@extends('layouts.app_landing')
@section('content')
{{ csrf_field() }}
<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/landing/images/icon/law.jpg')}});">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center">
                            <div class="sub-title" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <h3>Satuan Polisi Pamong Praja Provinsi Jawa Timur</h3>
                            </div>
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>KASANDRA </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="project-style10-area">
            <div class="container">
                <div class="sec-title-style7 text-center">
                    <div class="icon">
                        <span class="icon-picasa-logo"></span>
                    </div>
                    <h3>KASANDRA <br> Kamus Penegakan Peraturan Daerah dan Peraturan Kepala Daerah</h3>
                </div>

                <div class="row">
                    <div class="col-md-12"><div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
  </div>
  <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Cari terkait peraturan daerah dan kepala daerah. . . ">
</div>
                </div>
                </div>
                <div class="row" id="res_search">
                    
                </div>
            </div>
            </section>
@endsection
@section('script')
<script type="text/javascript">
    $("#keyword").on('keyup',function(){
        if($(this).val().length > 2){

        $.ajax({
                  method:'POST',
                  url:'{{ url("kasandra/search") }}',
                  data:{
                    keyword: $(this).val(),
                    '_token': $('input[name=_token]').val()
                  },
                  success:function(data){
                    console.log(data);
                    $('#res_search').html('');
                    $('#res_search').html(data.html);
                  }
                })
    }
    else{
        $('#res_search').html('')
    }
    })
</script>
@endsection