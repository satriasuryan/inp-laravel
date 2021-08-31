@extends('front.layout.front-program')
@section('title')
    Terimakasih
@endsection

@section('style')
<style>
        .card-thx {
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
            background: #fff;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            margin-top: 20px;
            padding: 20px;
        }

        .alert-success {
            border: 1px solid #689b74;
            border-style: dashed;
        }

        .btn-success {
            border-radius: 2px;
            box-shadow: 0px 2px 8px rgba(3, 3, 3, 0.5) !important;
        }

        @media(max-width: 720px) {
            .contain-card {
                margin: 20px 20px;
            }

            img {
                transition: .3s ease;
            }

            img:hover {
                transform: scale(1.8);
            }
        }
    </style>  
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-6 mb-3">
            <div class="card-thx">
                <h5>Anda telah berdonasi sebesar <strong>@currency($donatur->nominal_donasi) </strong>untuk program: <strong>{{$program->title}}</strong></h5>
            <p class="pb-1">Berapapun uang yang Anda berikan, akan sangat membantu bagi mereka yang membutuhkan. Terima Kasih telah berdonasi, semoga Allah Subhanahu Wa Ta'ala membalas anda dengan kebaikan yang berlipat ganda, jazakumullah khoiron, barakallahu fiik.</p>

            <a href="/" class="btn btn-success">Kembali Kehalaman Utama</a>
        </div>
        </div>
    </div>
</div>

   
    @endsection




