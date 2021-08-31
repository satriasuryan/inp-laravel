@extends('middle.layout.middle-layouts')

@section('title')
Daftar Program
@endsection

@section('content')

<div class="container">
    <div class="row">
      
        <div class="col-md-7 mt-10">

            <div class="card">
                <img src="{{$program->getFoto()}}" alt="Program Image">
            </div>

        </div>
        <div class="col-md-5 mt-10 ">
            @if ($program->donation_collected >= $program->donation_target)
            <div class="btn btn-success mb-3">Sudah Tercapai <i class="fa fa-check"></i></div>
            @else
            <div class="btn btn-warning mb-3">Belum Tercapai </div>
            @endif
            <h3 class="mb-2"><strong>{{$program->title}}</strong></h3>
            <p class="mb-2"><strong>{{$program->category->category_name}}</strong></p><hr>
            <p class="mb-2">Dibuat : {{$program->created_at->toDateString()}}</p>
            <p class="mb-2">Berakhir : {{$program->time_is_up}}</p>
            <p class="mb-3">Nomor Rekening Penampungan: {{$program->shelter_account_number}}</p>

            <div class="goal mb-3">
                <p class="mb-1"><strong>Terkumpul</strong> @if ($program->donation_collected == 0)
                    Rp. 0
                    @else
                    @currency($program->donation_collected)
                    @endif</p>
                <div class="progress mb-1" style="height:20px">
                    <?php
                                $total = $program->donation_target;
                                $current = $program->donation_collected;
                                $percent = round(($current/$total) * 100);
                                echo '<div class="progress-bar progress-bar-striped progress-bar-animated" style="width:'.$percent.'%; height:20px">'.$percent.'%</div>';
                                ?>
                </div>
                <p><strong>Target</strong> @currency($program->donation_target)</p>
            </div>
            @if ($program->isPublished == 0)
            <a class="btn btn-success waves-effect waves-light mt-2 text-white"
                href="/admin/published/{{$program->id}}">Publish</a>
            @else
            <a class="btn btn-danger waves-effect waves-light mt-2 text-white"
                href="/admin/published/{{$program->id}}">Jadikan Draft</a>
            @endif
            @if ($program->isSelected == 0)
            <a class="btn btn-success waves-effect waves-light mt-2 text-white"
                href="/admin/selected/{{$program->id}}">Jadikan Program Pilihan</a>
            @else
            <a class="btn btn-danger waves-effect waves-light mt-2 text-white"
                href="/admin/selected/{{$program->id}}">Jadikan Program Biasa</a>
            @endif
        </div>
        </div>
    </div>
    {{-- ========== --}}

    <div class="container">
    <div class="row pt-2 pb-3">
        <div class="col-lg-12">
            <div class="main">
                <div class="tab-btns">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Deskripsi</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Laporan Perkembangan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab"
                                aria-controls="pills-4" aria-selected="false">Donatur</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content pt-2" id="pills-tabContent">
                <div class="tab-pane fade show active mt-3" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    {!! $program->description !!}
                </div>

                <div class="tab-pane fade mt-2" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <a class="btn btn-sm btn-success mb-3" href="/admin/laporanperkembangan/create/{{$program->id}}">+ Buat Laporan Baru</a>                    
                 
                    <div id="accordion">
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($devs as $dev)
                        <div class="card">
                            <div class="card-header" id="heading-3">
                                <h5>
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        href="#collapse-{{$dev->id}}" aria-expanded="false"
                                        aria-controls="collapse-{{$dev->id}}">
                                        <span>UPDATE #{{$i++}}</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-{{$dev->id}}" class="collapse" data-parent="#accordion"
                                aria-labelledby="heading-3">
                                <div class="card-body">
                                    <h2>{{$dev->title}}</h2>
                                    <p>{{$dev->created_at->toDateString()}}</p>
                                    {!! $dev->description !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade pt-2" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                    <table class="table table-bordered">
                        @if ($donatur == 0)
                        <tr>
                            <th>Belum ada yang berdonasi</th>
                        </tr>
                        @else
                        <tbody>
                            @foreach ($program->donatur as $donatur)
                            <tr>
                                <th>{{$donatur->nama_donatur}}</th>
                                <th>@currency($donatur->nominal_donasi)</th>
                                <th>{{$donatur->dukungan}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                </div>
                </div>

            </div>


        </div>
    </div>
    </div>

@endsection