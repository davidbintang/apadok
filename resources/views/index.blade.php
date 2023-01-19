@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('navbar-menu')
@include('layouts.navbar')
@endsection

@section('main')
<div class="landing-container">
    <div class="landing-sect-1">
        <div class="content">
            <div class="ui vertically divided grid">
                <div class="two column row">
                    <div class="column left-column">
                        <div class="left-side">
                            <h1>Layanan Kesehatan Tepat Bersama <span>Apadok</span></h1>
                            <p>Apadok membantu klinik-klinik mengembangkan serta mengelola bisnisnya secara tepat dan akurat.</p>
                        </div>
                    </div>
                    <div class="column right-column">
                        <div class="right-side">
                            <img src="{{ asset('images/landing/sect1-img.png') }}" alt="doctorVect" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-sect-2">
        <div class="content">
            <div class="sect-2-container">
                <h1>Layanan Apadok</h1>
                <div class="ui four column grid">
                    <div class="column">
                        <img src="{{ asset('images/landing/sect2-monitor.png') }}" alt="monitorData" srcset="">
                        <h2>Monitor Data</h2>
                        <p>Monitor data pasien anda melalui website Apadok khusus admin klinik</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('images/landing/sect2-pasien.png') }}" alt="lihatPasien" srcset="">
                        <h2>Lihat Pasien</h2>
                        <p>Lihat daftar pasien serta grafik hasil tes setiap pasien secara lengkap dan akurat</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('images/landing/sect2-konsul.png') }}" alt="konsultasiKlinik" srcset="">
                        <h2>Konsultasi Klinik</h2>
                        <p>Apadok memberikan layanan konsultasi antara klinik dan pasien melalui fitur chat pada mobile app</p>
                    </div>
                    <div class="column">
                        <img src="{{ asset('images/landing/sect2-tes.png') }}" alt="tesKesehatan" srcset="">
                        <h2>Tes Kesehatan</h2>
                        <p>Lakukan tes skrining kesehatan untuk mengetahui status kesehatan anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-sect-3">
        <div class="content">
            <div class="sect-3-container">
                <h1>Mengapa Bergabung Bersama Apadok</h1>
                <div class="ui three column grid">
                    <div class="column box-column-left">
                        <h2>Sistem yang Terintegrasi</h2>
                        <p>Dengan Apadok, klinik anda memiliki sistem terpadu serta terintegrasi dan dapat diakses secara daring. Apadok dirancang untuk memenuhi kebutuhan klinik anda</p>
                    </div>
                    <div class="column box-column-mid">
                        <h2>Sistem yang Terintegrasi</h2>
                        <p>Dengan Apadok, klinik anda memiliki sistem terpadu serta terintegrasi dan dapat diakses secara daring. Apadok dirancang untuk memenuhi kebutuhan klinik anda</p>
                    </div>
                    <div class="column box-column-right">
                        <h2>Sistem yang Terintegrasi</h2>
                        <p>Dengan Apadok, klinik anda memiliki sistem terpadu serta terintegrasi dan dapat diakses secara daring. Apadok dirancang untuk memenuhi kebutuhan klinik anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-sect-4">
        <div class="content">
            <div class="sect-4-container">
                <h1>Artikel Kesehatan</h1>
                <div class="ui three column centered grid box-grid">
                    <div class="column box-column-left">
                        <img src="{{ asset('images/landing/sect4-img1.png') }}" alt="head" srcset="">
                        <p>Trik psikologis untuk membuat anda semakin bugar</p>
                        <a href="{{ route('article-detail') }}" class="a-article">Selengkapnya</a>
                    </div>
                    <div class="column box-column-mid">
                        <img src="{{ asset('images/landing/sect4-img2.png') }}" alt="situp" srcset="">
                        <p>Ini 5 manfaat sit-up untuk kesehatan jangka panjang</p>
                        <a href="{{ route('article-detail') }}" class="a-article">Selengkapnya</a>
                    </div>
                    <div class="column box-column-right">
                        <img src="{{ asset('images/landing/sect4-img3.png') }}" alt="banana" srcset="">
                        <p>Kenali nutrisi Pisang sebelum Anda memakannya secara rutin</p>
                        <a href="{{ route('article-detail') }}" class="a-article">Selengkapnya</a>
                    </div>
                </div>
                <a href="{{ route('article') }}" class="a-other">Lihat Artikel Lainnya</a>
            </div>
        </div>
    </div>
</div>
@include('layouts.foot')
@endsection