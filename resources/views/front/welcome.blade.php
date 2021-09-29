@extends('front.layout.front-layouts')

@section('title')
Divisi Sosial Imam Nawawi
@endsection

@section('content')

<section class="hero-wrap js-fullheight">
    <div class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight"
            style="background-image:url({{ asset('front-assets/images/bg_1.jpg')}});">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h1 class="mb-3">Sedekah Tidaklah Mengurangi Harta</h1>
                            <h2 class="mb-3">"Dan barang apa saja yang kamu nafkahkan, maka Allah akan menggantinya dan
                                Dia-lah pemberi rezki yang sebaik-baiknya."(QS.Saba':39)</h2>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="/daftarprogram"
                                            class="btn btn-secondary py-3 px-2 px-md-4">Donasi Sekarang</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight"
            style="background-image:url({{ asset('front-assets/images/bg_2.jpg')}});">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h1 class="mb-3">Sedekah Tidaklah Mengurangi Harta</h1>
                            <h2 class="mb-3">"Dan barang apa saja yang kamu nafkahkan, maka Allah akan menggantinya dan
                                Dia-lah pemberi rezki yang sebaik-baiknya."(QS.Saba':39)</h2>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="/daftarprogram"
                                            class="btn btn-secondary py-3 px-2 px-md-4">Donasi Sekarang</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight"
            style="background-image:url({{ asset('front-assets/images/bg_3.jpg')}});">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h1 class="mb-3">Sedekah Tidaklah Mengurangi Harta</h1>
                            <h2 class="mb-3">"Dan barang apa saja yang kamu nafkahkan, maka Allah akan menggantinya dan
                                Dia-lah pemberi rezki yang sebaik-baiknya."(QS.Saba':39)</h2>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="/daftarprogram"
                                            class="btn btn-secondary py-3 px-2 px-md-4">Donasi Sekarang</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center pb-4 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Program Pilihan</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($programs as $program)
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="/donasi/{{$program->id}}" class="img w-100"
                        style="background-image: url({{$program->getFoto()}});"></a>
                    <div class="text p-3">
                        <h2><a href="/donasi/{{$program->id}}">{{$program->title}}</a></h2>
                        @if ($program->donation_collected >= $program->donation_target)
                        <div class="btn btn-sm btn-success mb-3">Sudah Tercapai <i class="fa fa-check"></i></div>
                        @else
                        <div class="btn btn-sm btn-warning mb-3">Belum Tercapai </div>
                        @endif
                        <p>Berakhir : {{$program->time_is_up}} </p>
                        <div class="goal mb-3">
                            <p class="mb-1"><span>Terkumpul</span> @if ($program->donation_collected == 0)
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
                            <p><span>Target</span> @currency($program->donation_target)</p>
                        </div>
                        <p><a href="/donasi/{{$program->id}}" class="btn btn-light w-100">Donasi</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
            <p><a href="/daftarprogram" class="btn btn-secondary">Lihat Semuanya</a></p>
        </div>
    </div>

</section>


<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 wrap-about py-5">
                <div class="heading-section">
                    <h2 class="mb-4">Selamat Datang</h2>
                    <p align="justify">
                        Divisi Sosial Imam Nawawi adalah program yg dibuat untuk memudahkan wali murid INIS maupun kaum
                        muslimin secara umum untuk menyalurkan zakat, infak dan shadaqah melalui
                        Yayasan Dakwah Imam Nawawi.
                        <br><br>
                        Kesulitan yang dirasakan kaum muslimin dalam mendapatkan pendidikan yang layak menjadi
                        pertimbangan terbesar kami dalam menjalankan program ini. <br><br>
                        Dimulai dari ruang lingkup yang terbatas, alhamdulillah kami berhasil menyalurkan dana dari para
                        donatur untuk membantu yatim dan dhuafa dalam mengenyam
                        pendidikan yang layak untuk mereka. Kemudian perlahan kami menyadari bahwa bukan pendidikan saja
                        yang kaum muslimin butuhkan, melainkan bantuan disaat
                        mereka membutuhkan. Dan hal ini yang mendorong terbentuknya Divisi Sosial Imam Nawawi. <br><br>
                        Sebagai bentuk keseriusan kami dalam membantu kaum muslimin, kami memulai langkah nyata dengan
                        program kerja yang meliputi:
                        <ol>
                            <li>Donasi Pendidikan
                                <ol type='a'>
                                    <li>Program Orang Tua Asuh (OTA)</li>
                                    <li>Infaq Pendidikan Umum</li>
                                </ol>
                            </li>
                            <li>Donasi Wakaf
                                <ol type='a'>
                                    <li>Wakaf pembangunan & pembebasan lahan</li>
                                    <li>Wakaf Al Quran</li>
                                </ol>
                            </li>
                            <li>Donasi Sosial
                                <ol type='a'>
                                    <li>Bantuan Bencana Alam & Kemanusiaan</li>
                                    <li>Bantuan Program Dakwah Imam Nawawi</li>
                                    <li>Bantuan sosial lain yang bermanfaat untuk mengurangi kesulitan kaum muslimin
                                        baik dalam maupun luar negeri</li>
                                </ol>
                            </li>
                        </ol>
                        Sebelum berganti nama menjadi Divisi Sosial Imam Nawawi pada 18 September 2021, kami berangkat
                        dengan membawa nama program Sunduq Peduli Imam Nawawi (SPIN)
                        yang aktif dalam menyalurkan dana Zakat, Infaq, dan Shodaqoh secara amanah kepada orang-orang
                        yang membutuhkan. <br><br>

                        Sebagai informasi, per Juli 2019, ada 11 Yatim dan 37 Dhuafa yang mendapat keringanan biaya di
                        INIS, dengan tanggungan biaya sebesar Rp 64.380.000 untuk SPP
                        selama setahun (Rp 5.365.000/bulan) dan Rp 61.950.000 untuk uang masuk & daftar ulang (Total
                        biaya pendidikan yg seharusnya disubsidi Muhsinin sebesar
                        Rp 126.330.000 per Juli 2019).
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-counter" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number">{{$programYangAda}}</strong>
                    </div>
                    <div class="text">
                        <span>Program Dibuat</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number">{{$programPilihan}}</strong>
                    </div>
                    <div class="text">
                        <span>Program Pilihan</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number">{{$orangBerdonasi}}</strong>
                    </div>
                    <div class="text">
                        <span>Orang Berdonasi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
