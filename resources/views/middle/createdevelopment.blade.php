@extends('middle.layout.middle-layouts')
@section('title')
    Buat Laporan Perkembangan
@endsection

@section('content')

<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Laporan Pekembangan</h3>
                    </div>
                    <div class="card-body">
                      <form action="/admin/laporanperkembangan/store" method="post">
                        {{ csrf_field() }}
                    <input type="hidden" name="program_id" value="{{$program->id}}">

                            <div class="form-group">
                                <label>Judul Laporan Perkembangan</label>
                                <input name="title" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Laporan Perkembangan</label>
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