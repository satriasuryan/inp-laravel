@extends('middle.layout.middle-layouts')

@section('title')
Edit Kategori
@endsection

@section('content')

<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Kategori</h3>
                    </div>
                    <div class="card-body">
                        <form action="/admin/categories/{{$categories->id}}/update" method="post">
                            {{ csrf_field() }}

                            <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <input name="category_name" type="text" class="form-control" value="{{$categories->category_name}}">
                            </div>

                            <div class="mt-4 box-footer"><button class="btn btn-md btn-warning">Update</button></div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
