@extends('layouts.frontend.app',[
    'title' => 'Paket',
])
@section('content')
<div class="regular-page-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
                    <h4> Paket Kursus</h4>
                    <div class="card-group">
                        <div class="card">
                          <img src="{{ asset('img/bg') }}/bg22.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">paket pemula</h5>
                            <p class="card-text">1.Pengenalan Alat dan Perlengkapan</p>
                            <p class="card-text">2.Teknik Posisi dan Paddling</p>
                            <p class="card-text">3.Memahami Ombak</p>
                            <p class="card-text">4.Berdiri di Atas Papan</p>
                          </div>
                          <div class="card-footer">
                            <a href="/tambahpegawai" class="btn btn-primary btn-sm">Beli</a>
                          </div>
                        </div>
                        <br>
                        <div class="card">
                          <img src="{{ asset('img/bg') }}/bg23.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">paket menengah</h5>
                            <p class="card-text">1.Peningkatan Keterampilan Berdiri</p>
                            <p class="card-text">2.Navigasi Ombak yang Lebih Rumit</p>
                            <p class="card-text">3.Pengenalan Teknik Turn (Pembelokan)</p>
                            <p class="card-text">4.Penggunaan Papan yang Lebih Lanjut</p>
                          </div>
                          <div class="card-footer">
                            <a href="/tambahpegawai" class="btn btn-primary btn-sm">Beli</a>
                          </div>
                        </div>
                        <br>
                        <div class="card">
                          <img src="{{ asset('img/bg') }}/bg24.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">paket atas</h5>
                            <p class="card-text">1.Teknik Advanced Turns</p>
                            <p class="card-text">2.Pengenalan Gerakan Aerial</p>
                            <p class="card-text">3.Teknik Off the Lip</p>
                            <p class="card-text">4.Teknik Tubewide</p>
                          </div>
                          <div class="card-footer">
                            <a href="/tambahpegawai" class="btn btn-primary btn-sm">Beli</a>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
