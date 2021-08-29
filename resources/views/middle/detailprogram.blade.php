@extends('middle.layout.middle-layouts')

@section('title')
Daftar Program
@endsection

@section('content')
<section class="section-1">
    <div class="row">
        <div class="col-lg-6">
            <div class="card responsive">
                <img src="{{$program->getFoto()}}">
                <div class="container mt-2">
                    <p>{{$program->title}}</p><br>
      
                    <div class="d-flex no-block align-items-center mb-3">
                      <div class="ml-1">
                        <span class="badge badge-succes">{{$program->category->category_name}}</span>
                      </div>
                      <div class="ml-1">
                        @if ($program->isPublished == 1)    
                        <span class="badge badge-green">Published <i class="ti-check"></i></span>
                    @else
                        <span class="badge badge-red">Belum Dipublish</span>
                    @endif
                      </div>
                      <div class="ml-1">
                        @if ($program->isSelected == 1)
                        <span class="badge badge-blue">Program Pilihan <i class="ti-check"></i></span>
                    @endif
                      </div>
                  </div>


                    <hr>
                    <span>{{$program->brief_explanation}}</span>

                    <table class="table table--bordered table--responsive">
                        <tbody>
                            <tr>
                                <td>Donasi Dibuat</td>
                                <td>{{$program->created_at->toDateString()}}</td>
                            </tr>
                            <tr>
                                <td>Berakhir Pada</td>
                                <td>{{$program->time_is_up}}</td>
                            </tr>
                            <tr>
                                <td>Target Donasi</td>
                                <td>{{$program->donation_target}}</td>
                            </tr>
                            <tr>
                                <td>Donasi Terkumpul</td>
                                <td>{{$program->donation_collected}}</td>
                            </tr>
                            <tr>
                                <td>Nomor Rekening Penampungan</td>
                                <td>{{$program->shelter_account_number}}</td>
                            </tr>
                            <tr>
                                <td>
                                    @if ($program->isPublished == 0)
                                    <a class="btn btn-sm btn-success waves-effect waves-light mt-2 text-white"
                                        href="/admin/published/{{$program->id}}">Publikasi</a>
                                    @else
                                    <a class="btn btn-sm btn-danger waves-effect waves-light mt-2 text-white"
                                        href="/admin/published/{{$program->id}}">Batal Publikasi</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($program->isSelected == 0)
                                    <a class="btn btn-sm btn-primary waves-effect waves-light mt-2 text-white"
                                        href="/admin/selected/{{$program->id}}">Jadikan Program Pilihan</a>
                                    @else
                                    <a class="btn btn-sm btn-danger waves-effect waves-light mt-2 text-white"
                                        href="/admin/selected/{{$program->id}}">Batal Jadikan Program Pilihan</a>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab">
                <div class="tab-header">
                    <ul class="tab__navigation">
                        <li class="tab__nav-item active" data-tab="#tab1-1">Deskripsi Program</li>
                        <li class="tab__nav-item" data-tab="#tab1-2">Laporan Perkembangan</li>
                    </ul>
                </div>

                <div class="tab-body">
                    <div class="tab__content" id="tab1-1">
                        <p class="desc-program">{!! $program->description !!}</p>
                    </div>

                    <div class="tab__content" id="tab1-2" style="display: none;">
                        @if ($program->isPublished == 1)
                        <a href="/laporanperkembangan/create/{{$program->id}}">Buat Laporan Baru</a>
                        @else
                        <span class="alert alert--warning">Tidak bisa buat laporan perkembangan, Program belum di
                            publish Admin</span>
                        @endif


                        <ul id="accordion" class="accordion">
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($devs as $dev)
                            <li>
                                <div class="link"><i class="fa fa-database"></i>UPDATE #{{$i}}<i
                                        class="fa fa-chevron-down"></i></div>
                                <ul class="submenu">
                                    <div class="container">
                                        <h2><strong>{{$dev->title}}</strong></h2>
                                        <p class="pt-2">{!! $dev->description !!}</p>
                                    </div>
                                </ul>
                            </li>
                            @php
                            $i++;
                            @endphp
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">

            <div class="box box--dark">
                <div class="box-header">
                    <h3>Pendonasi</h3>
                </div>
                <div class="box-body pt-0 px-0 responsive">

                    <table class="table--dark">
                        @if ($donatur == 0)
                        <tr>
                            <th>Belum ada yang berdonasi</th>
                        </tr>
                        @else

                        <thead>
                            <tr>
                                <th>Nama Donatur</th>
                                <th>Nominal Donasi</th>
                                <th>Dukungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($program->donatur as $donatur)
                            <tr>
                                <td>{{$donatur->nama_donatur}}</td>
                                <td>{{$donatur->nominal_donasi}}</td>
                                <td>{{$donatur->dukungan}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                        @endif

                    </table>

                </div>
                <div class="pagination-wrapper clearfix">
                    <ul class="pagination float--right">
                        <li class="pagination-item"><a class="active">1</a></li>
                        <li class="pagination-item"> <a>2</a></li>
                        <li class="pagination-item"> <a>3</a></li>
                        <li class="pagination-item"> <a>Next</a></li>
                    </ul>
                </div>
            </div>

        </div>



    </div>
</section>

@section('script')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(function () {
        var Accordion = function (el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            // Variables privadas
            var links = this.el.find('.link');
            // Evento
            links.on('click', {
                el: this.el,
                multiple: this.multiple
            }, this.dropdown)
        }

        Accordion.prototype.dropdown = function (e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }

        var accordion = new Accordion($('#accordion'), false);
    });
</script>
@endsection

@endsection
