@extends('middle.layout.middle-layouts')

@section('title')
Daftar Program
@endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$programPublished}}</h3>

                        <p>Program Published</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$programSelected}}</h3>

                        <p>Program Pilihan</p>

                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>{{$program}}</h3>

                        <p>Program Dibuat</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$programNotPublished}}</h3>

                        <p>Draft Program</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-gray">
                    <div class="inner">
                        <h3>{{$category}}</h3>

                        <p>Kategori Program</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Program</h3>
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
                                                    Nama Program</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Program</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Progress</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Kategori</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Mulai</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Berakhir</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($programs as $program)
                                            <tr class="odd">
                                                <td>{{$i++}}</td>
                                                <td>{{$program->title}}</td>
                                                <td>
                                                    @if ($program->isPublished == 1)
                                                    <button class="btn btn-green">Published</button>
                                                    @else
                                                    <button class="btn btn-red">Draft</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($program->isSelected == 1)
                                                    <button class="btn btn-green">Program Pilihan </button>
                                                    @else
                                                    <button class="btn btn-red">Program Biasa </button>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($program->donation_collected >= $program->donation_target)
                                                    <button class="btn btn-green">Sudah Tercapai <i
                                                            class="la la-check"></i></button>
                                                    @else
                                                    <button class="btn btn-yellow">Belum Tercapai <i
                                                            class="la la-check"></i></button>
                                                    @endif
                                                </td>
                                                <td>{{$program->category->category_name}}</td>
                                                <td>{{$program->created_at->toDateString()}}</td>
                                                <td>{{$program->time_is_up}}</td>
                                                <td>
                                                    @if ($program->isPublished == 0)
                                                    <a class="btn btn-sm btn-primary"
                                                        href="/admin/published/{{$program->id}}">Publikasi</a>
                                                    @else
                                                    <a class="btn btn-sm btn-default"
                                                        href="/admin/published/{{$program->id}}">Batal Publikasi</a>
                                                    @endif
                                                    @if ($program->isSelected == 0)
                                                    <a class="btn btn-sm btn-success"
                                                        href="/admin/selected/{{$program->id}}">Jadikan Program
                                                        Pilihan</a>
                                                    @else
                                                    <a class="btn btn-sm btn-default"
                                                        href="/admin/selected/{{$program->id}}">Batal Jadikan Program
                                                        Pilihan</a>
                                                    @endif
                                                    <a class="btn btn-sm btn-info"
                                                        href="/admin/detailprogram/{{$program->id}}">Detail</a>
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{route('program.edit', $program->id)}}">Edit</a>
                                                    <a class="btn btn-sm btn-danger"
                                                        href="/admin/hapus/{{$program->id}}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>

</section>
<!-- /.content -->

@endsection