@extends('front.layout.front-program')
@section('title')
    {{$program->title}}
@endsection

@section('style')
<style>
body{
    background: #f2f3f4 !important;
}

.form-donatur{
    border-radius: 8px;
    margin-top: 25px;
    background: #fff;
    border: 1px solid #eaeaea;
    padding-bottom: 20px;
}

.btn-donasi{
    width: 100%;
    height: 50px;
    background: #0af;
    color: #fff;
    font-size: 20px;
    font-weight: 200;
}

</style>    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-6 mb-5">

            <form action="/donasi/{{$program->id}}/donasi/store" method="post">
                    {{ csrf_field() }}
                <div class="form-donatur">
                    <div class="container mt-4">
                        <div class="container">
                            <div class="form-group">
                            <h4 class="pb-2">Anda akan berdonasi untuk program: <strong>{{$program->title}}</strong></h4>
                            </div>
                            <div class="form-group">
                            <label class="sr-only" for="nominal">Nominal donasi</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="text" name="nominal_donasi" min="1000" class="form-control" id="tanpa-rupiah" placeholder="Nominal Donasi" required>
                            </div>
                            <input type="hidden" name="program_id" value="{{$program->id}}">
                            </div>
                            <div class="form-group">
                            <span>Lengkapi data dibawah ini</span><br>
                            </div>

                            <div class="form-group">
                                <input type="text" name="nama_donatur" class="form-control" placeholder="Nama Lengkap">
    
                                <div class="form-check">
                                    <input id="check" type="checkbox" name="nama_donatur" class="form-check-input" value="Hamba Allah">
                                    <label for="check" class="form-check-label">Sembunyikan Nama Saya (Hamba Allah)</label>
                                </div>
                            </div>
    
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <textarea name="dukungan" rows="6" class="form-control" placeholder="Tulis Dukungan atau Do'a untuk Penggalangan Dana ini. Contoh: Cepet Sembuh, ya!"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-donasi mt-2" type="submit">Donasi Sekarang</button>
                        </div>
                    </div>
            </form>
            


        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    /* Tanpa Rupiah */
    var tanpa_rupiah = document.getElementById('tanpa-rupiah');
    tanpa_rupiah.addEventListener('keyup', function(e)
    {
        tanpa_rupiah.value = formatRupiah(this.value);
    });
    
    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }</script>
@endsection