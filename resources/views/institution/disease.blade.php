@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-disease.css') }}">
@endsection

@section('main')
<div class="institution-disease">
    <h1>Monitoring - Risiko Semua Penyakit</h1>
    <div class="graph-container">
        <h5>Grafik Risiko Tiap Penyakit</h5>
        <div class="img-container">
            <img src="{{ asset('images/institution/all-disease.png') }}" alt="all-disease">
        </div>
    </div>
    <div class="data-container">
        <div class="ui three column relaxed grid">
            <div class="column box-column">
                <h5>Risiko Terkena Diabetes</h5>
                <p>2 <span>orang</span></p>
            </div>
            <div class="column box-column mid-box">
                <h5>Risiko Terkena Stroke</h5>
                <p>2 <span>orang</span></p>
            </div>
            <div class="column box-column">
                <h5>Risiko Terkena Kardiovaskular</h5>
                <p>1 <span>orang</span></p>
            </div>
        </div>
    </div>
    <div class="risiko-container">
        <div class="ui grid">
            <div class="thirteen wide column">
                <h3>Informasi Risiko</h3>
            </div>
            <div class="three wide column">
                <div class="ui menu">
                    <div class="item">
                        <button class="ui orange button sub-btn-ie">
                            Import/Export
                            <i class="fas fa-angle-down dropdown-btn"></i>
                        </button>
                        <div class="sub-menu-btn">
                            <a href="#" class="item sub-item">Import</a>
                            <a href="#" class="item sub-item" onclick="exportModal()">Export</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Cari peserta">
                <i class="search icon"></i>
            </div>
        </div>
        <div class="table-container">
            <table class="ui striped table">
                <thead>
                    <tr>
                        <th>Nomor Peserta</th>
                        <th>Nama Peserta</th>
                        <th>Nomor Telepon</th>
                        <th>Status</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TESTER01</td>
                        <td>Bambang</td>
                        <td>081251351361</td>
                        <td class="exc-data">Risiko Diabetes</td>
                        <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER02</td>
                        <td>Rahayu</td>
                        <td>0854268781761</td>
                        <td class="exc-data">Risiko Diabetes, Risiko Kardiovaskular, dan Risiko Stroke</td>
                        <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER03</td>
                        <td>Sutejo</td>
                        <td>0824869284972</td>
                        <td>Tidak Berisiko Tinggi</td>
                        <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER04</td>
                        <td>Rifki</td>
                        <td>08384762489742</td>
                        <td class="exc-data">Risiko Diabetes, Risiko Kardiovaskular, Risiko Stroke</td>
                        <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER05</td>
                        <td>Ahmad Tauhid</td>
                        <td>0897378819764</td>
                        <td class="exc-data">Risiko Diabetes</td>
                        <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                    </tr>
                    <tr>
                        <td>TESTER06</td>
                        <td>Indra Surya</td>
                        <td>08671358827908</td>
                        <td class="exc-data">Risiko Stroke</td>
                        <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                    </tr>
                </tbody>
            </table>
            @include('layouts.pagination')
        </div>
    </div>
</div>
<div class="ui modal" id="export-modal">
    <i class="close icon"></i>
    <div class="content">
        <div class="content-container">
            <img src="{{ asset('images/institution/success.png') }}" alt="success">
            <h3>Data berhasil di-export</h3>
            <button class="ui blue button">Tutup</button>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function exportModal() {
        $('#export-modal').modal('show');
    }
    $('.sub-btn-ie').click(function() {
        $(this).next('.sub-menu-btn').slideToggle();
        $(this).find('.dropdown-btn').toggleClass('rotate-btn');
    })
</script>
@endsection