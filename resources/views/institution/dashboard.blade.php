@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-dashboard.css') }}">
@endsection

@section('main')
<div class="institution-dashboard">
    <h1>Dahsboard</h1>
    <h4>Ringkasan Data</h4>
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
    <div class="graph-container">
        <div class="ui two column relaxed grid">
            <div class="column box-column first-box">
                <h4>Grafik Risiko Tiap Penyakit</h4>
                <img src="{{ asset('images/institution/all-disease.png') }}" alt="all-disease">
            </div>
            <div class="column box-column second-box">
                <h4>Grafik Risiko Penyakit Diabetes</h4>
                <img src="{{ asset('images/institution/diabetes.png') }}" alt="diabetes">
            </div>
            <div class="column box-column third-box">
                <h4>Grafik Risiko Penyakit Kardiovaskular</h4>
                <img src="{{ asset('images/institution/kardiovaskular.png') }}" alt="kardiovaskular">
            </div>
            <div class="column box-column fourth-box">
                <h4>Grafik Risiko Penyakit Stroke</h4>
                <img src="{{ asset('images/institution/stroke.png') }}" alt="stroke">
            </div>
        </div>
    </div>
</div>
@endsection