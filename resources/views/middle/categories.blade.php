@extends('middle.layout.middle-layouts')
@section('title')
Daftar Kategori
@endsection

@section('style')
<style>
    .peringatan{
font-weight: bold;
color: red;
    }
    </style>
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <p class="peringatan">Note : Jika menggunakan fitur hapus kategori, program yang tergabung dalam kategori tersebut akan ikut terhapus, usahakan edit terlebih dahulu kategori di tiap program atau edit saja melalui tombol fitur dibawah, terimakasih.</p>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Kategori</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-block btn-sm btn-primary" data-toggle="modal"
                                data-target="#exampleModal" data-whatever="@mdo">Tambah Kategori</button>
                        </div>
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
                                                    Nama Kategori</th>
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
                                            @foreach ($categories as $category)
                                            <tr class="odd">
                                                <td>{{$i++}}</td>
                                                <td class="dtr-control sorting_1" tabindex="0">
                                                    {{$category->category_name}}</td>
                                                <td>
                                                    <a class="btn btn-warning"
                                                        href="/admin/categories/{{$category->id}}/edit">Edit</a>

                                                    <a class="btn btn-danger"
                                                        href="/admin/delete/{{$category->id}}">Hapus</a>
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

                {{-- MODALS --}}

                <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel1" aria-modal="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">buat Kategori Baru</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/categories/create" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Nama Kategori</label>
                                        <input type="text" name="category_name" class="form-control"
                                            id="recipient-name1">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Buat</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- END MODALS --}}

            </div>
        </div>
    </div>
</section>
@endsection