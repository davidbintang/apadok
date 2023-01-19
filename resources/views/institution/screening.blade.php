@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-screening.css') }}">
@endsection

@section('main')
<div class="institution-screening">
    <h1>Monitoring - Jumlah Screening</h1>
    <div class="data-container">
        <div class="ui three column relaxed grid">
            <div class="column box-column">
                <h5>Total Jumlah Peserta</h5>
                <p>6 <span>orang</span></p>
            </div>
            <div class="column box-column mid-box">
                <h5>Total Peserta Sudah Skrinning</h5>
                <p>5 <span>orang</span></p>
            </div>
            <div class="column box-column">
                <h5>Total Peserta Belum Skrinning</h5>
                <p>1 <span>orang</span></p>
            </div>
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
                    <td>Sudah Skrining</td>
                    <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER02</td>
                    <td>Rahayu</td>
                    <td>0854268781761</td>
                    <td class="exc-data">Belum Skrining</td>
                    <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER03</td>
                    <td>Sutejo</td>
                    <td>0824869284972</td>
                    <td>Sudah Skrining</td>
                    <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER04</td>
                    <td>Rifki</td>
                    <td>08384762489742</td>
                    <td>Sudah Skrining</td>
                    <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER05</td>
                    <td>Ahmad Tauhid</td>
                    <td>0897378819764</td>
                    <td>Sudah Skrining</td>
                    <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                </tr>
                <tr>
                    <td>TESTER06</td>
                    <td>Indra Surya</td>
                    <td>08671358827908</td>
                    <td>Sudah Skrining</td>
                    <td><a href="{{ route('institution.detail') }}">Lihat detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('layouts.pagination')
</div>
@endsection