@extends('front.layout.front-program')

@section('title')
    Daftar Program
@endsection


@section('content')
  <section class="ftco-section">
   <div class="container">
       <div class="row justify-content-center pb-3 mt-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Daftar Program</h2>
            </div>
        </div>
     <div class="row justify-content-center pb-4 mb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">      
              <a href="/daftarprogram" class="btn btn-default filter-button">All</a>
              @foreach ($categories as $category)
            <a href="/program/category/{{$category->id}}" class="btn btn-default filter-button">{{$category->category_name}}</a>
            @endforeach
        
            </div>
        </div>

<div class="row">
            @foreach ($programs as $program)
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="/donasi/{{$program->id}}" class="img w-100" style="background-image: url({{$program->getFoto()}});"></a>
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
  </section>
@endsection
