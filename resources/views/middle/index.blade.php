@extends('middle.layout.middle-layouts')

@section('title')
Dashboard
@endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$verif}}</h3>

                        <p>Terverifikasi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$unverif}}</h3>

                        <p>Belum Terverifikasi</p>

                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>{{$tidakupload}}</h3>

                        <p>Tanpa Bukti TF</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Donasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending"
                                                    style="width: 5px">
                                                    No</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Nama Donatur</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Nama Program</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Nominal Donasi</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Bukti Pembayaran</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Aksi</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Foto Bukti Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($donasis as $donasi)
                                            <tr class="odd">
                                                <td>{{$i++}}</td>
                                                <td class="dtr-control sorting_1" tabindex="0">
                                                    {{$donasi->nama_donatur}}</td>
                                                <td>
                                                    {{$donasi->email}}
                                                </td>
                                                <td>
                                                    {{$donasi->program->title}}
                                                </td>
                                                <td>
                                                    @currency($donasi->nominal_donasi)
                                                </td>
                                                <td>
                                                    @if ($donasi->bukti_pembayaran == null)
                                                    <button class="btn btn-green">Tidak Ada</button>
                                                    @else
                                                    <button class="btn btn-red">Ada</button>
                                                    @endif
                                                </td>
                                                <td>
                                                  
                                                    @if ($donasi->verifikasi == 0)

                                                    <a href="/admin/verifikasi/{{$donasi->id}}"
                                                        class="btn btn-sm btn-warning"> Verifikasi </a>
                                                    @else
                                                    <btn class="btn btn-sm btn-success"> Sudah Terverifikasi </btn>

                                                    @endif
                                                </td>
                                                <td>
                                                    <img class="img-bukti" src="{{$donasi->getFoto()}}"> </td>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection