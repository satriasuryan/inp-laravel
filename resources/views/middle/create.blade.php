@extends('middle.layout.middle-layouts')

@section('title')
Tambah Program
@endsection

@section('content')

<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('program.store')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input type="hidden" name="users_id" value="{{Auth::user()->id}}">

                            <div class="form-group">
                                <label for="exampleSelectRounded0">Kategori</label>
                                <select name="category_id" class="form-control" id="exampleSelectRounded0">
                                    <option disabled selected>-- Pilih Kategori --</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Judul Program</label>
                                <input name="title" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload Gambar</label>
                                <div class="custom-file">
                                    <input name="photo" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Target Donasi</label>
                                <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input name="donation_target" type="text"
                                    class="{{ $errors->has('donation_target') ? ' is-invalid' : '' }} form-control"
                                    value="{{ old('donation_target') }}">
                                </div>
                            </div>

                            @if ($errors->has('donation_target'))
                            <span class="invalid-feedback" role="alert">
                                <div class="alert alert--dismissible">
                                    <p><span>Target Donasi Harus Berupa Angka</span></p>
                                    <div class="alert-dismiss"><button class="btn btn-icon"><i
                                                class="la la-times"></i></button></div>
                                </div>
                            </span>
                            @endif

                            <div class="form-group">
                                <label for="time_is_up">Donasi Berakhir</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="date" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" name="time_is_up" id="time_is_up">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nomor Rekening Penampungan</label>
                                <input name="shelter_account_number" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Program</label>
                                <textarea name="description" style="height: 300px;"
                                    class="form-control my-editor"></textarea>
                            </div>

                            <div class="mt-4 box-footer"><button class="btn btn-md btn-primary">Submit</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
<script src="{{ asset('middle-assets/tinymce/tinymce.min.js') }}"></script>
<script>
    var editor_config = {
        path_absolute: "/",
        selector: "textarea.my-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function (field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth ||
                document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight ||
                document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute +
                'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>
<script>
    $("form").on("change", ".file-upload-field", function () {
        $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
    });
</script>
@endsection