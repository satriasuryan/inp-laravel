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
        <div class="col-lg-12 mt-6 mb-4">
            <div class="card-thx">
            <h5>Anda akan berdonasi dengan data sebagai berikut : </h5>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Nama Program</td>
                        <th>{{$program->title}}</th>
                    </tr>
                    <tr>
                        <td>Nama Donatur</td>
                        <th>{{$donatur->nama_donatur}}</th>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <th>{{$donatur->email}}</th>
                    </tr>
                    <tr>
                        <td>Nominal Donasi</td>
                        <th>Rp. {{$donatur->nominal_donasi}}</th>
                    </tr>
                </tbody>
            </table>

            <div class="alert alert-success">
                <span>Nomor Rekening Tujuan : <strong>{{$program->shelter_account_number}}</strong></span>
            </div>

            <p class="text-left-justify alert alert-success"><strong>Silahkan lakukan pembayaran sesuai nominal, 
                setelah itu konfirmasi pembayaran dengan menyertakan bukti transfer pada kolom unggahan di bawah, 
                donasi yang masuk tanpa bukti transfer akan di anggap sebagai dana umum untuk saudara kita yang membutuhkan</strong></p>

            <div class="alert alert-success">
                    <form action="/konfirmasi/store/{{$donatur->id_transaksi}}" method="post" enctype="multipart/form-data">
                        @csrf
                                <span>Masukan Bukti Pembayaran : </span>
                                <span><input id="file" type="file" class="d-block" name="bukti_pembayaran"></span>
                                    <span><button type="submit" class="btn btn-success mt-2">Kirim</button></span>
                    </form>
                    
            </div>
        </div>
        </div>
    </div>
</div>

   
    @endsection