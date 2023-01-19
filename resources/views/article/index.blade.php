@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/article.css') }}">
@endsection

@section('navbar-menu')
@include('layouts.navbar')
@endsection

@section('main')
<div class="article-container">
    <div class="content">
        <div class="search-bar-article">
            <div class="ui grid">
                <div class="eleven wide column">
                    <div class="article-category-container">
                        <p>Kategori Populer</p>
                        <div class="article-category">
                            <button class="ui basic button">Semua Kategori</button>
                            <button class="ui basic button">Stroke</button>
                            <button class="ui basic button">Diabetes</button>
                            <button class="ui basic button">Kardiovaskular</button>
                        </div>
                    </div>
                </div>
                <div class="five wide column">
                    <div class="ui fluid category search">
                        <div class="ui icon input">
                            <input class="prompt" type="text" placeholder="Cari topik atau judul">
                            <i class="search icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-article">
            <div class="ui grid">
                <div class="twelve wide column big-article">
                    <div class="ui grid">
                        <div class="nine wide column left-side">
                            <img src="{{ asset('images/article/main-article.png') }}" alt="article" srcset="">
                        </div>
                        <div class="seven wide column right-side">
                            <h4>Diabetes</h4>
                            <h2>Apakah yang Dimaksud Dengan Penyakit Diabetes?</h2>
                            <p>Diabetes adalah penyakit kronis yang ditandai dengan tingginya kadar gula darah. Glukosa merupakan sumber energi utama bagi sel tubuh manusia. Akan tetapi, pada penderita diabetes, glukosa tersebut tidak dapat digunakan oleh tubuh.
                            Kadar gula (glukosa) dalam darah dikendalikan oleh hormon insulin yang diproduksi pankreas. Namun, pada penderita diabetes, pankreas tidak mampu memproduksi insulin sesuai kebutuhan tubuh. Tanpa insulin, sel-sel tubuh tidak dapat menyerap dan mengolah glukosa menjadi energi.</p>
                            <a href="{{ route('article-detail') }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="four wide column">
                    <div class="small-article-container">
                        <div class="ui grid">
                            <div class="eight wide column img-article">
                                <img src="{{ asset('images/article/article-1.png') }}" alt="article" srcset="">
                            </div>
                            <div class="eight wide column">
                                <h4>Stroke</h4>
                                <p>Bagaimana Stroke Bisa Terjadi?</p>
                            </div>
                        </div>
                    </div>
                    <div class="small-article-container">
                        <div class="ui grid">
                            <div class="eight wide column img-article">
                                <img src="{{ asset('images/article/article-2.png') }}" alt="article" srcset="">
                            </div>
                            <div class="eight wide column">
                                <h4>Stroke</h4>
                                <p>Apa itu stroke?</p>
                            </div>
                        </div>
                    </div>
                    <div class="small-article-container">
                        <div class="ui grid">
                            <div class="eight wide column img-article">
                                <img src="{{ asset('images/article/article-3.png') }}" alt="article" srcset="">
                            </div>
                            <div class="eight wide column">
                                <h4>Stroke</h4>
                                <p>Trik  Untuk Membuat Anda Terhindar Dari Penyakit Jantung</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="other-article">
            <h1>Semua Artikel</h1>
            <div class="ui three column grid">
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-4.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Kardiovaskular</h4>
                        <p>Apakah yang Dimaksud Dengan Penyakit Kardiovaskular?</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-5.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Kardiovaskular</h4>
                        <p>Bagaimana gejala dari penyakit kardiovaskular?</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-6.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Diabetesr</h4>
                        <p>Mengapa Bisa Terjadi Kencing Manis?</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-7.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Kardiovaskular</h4>
                        <p>Bagaimana cara menolong penderita penyakit kardiovaskular?</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-8.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Kardiovaskular</h4>
                        <p>Bagaimana cara mengurangi risiko terkena penyakit kardiovaskular?</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-9.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Stroke</h4>
                        <p>Kenali Ciri-ciri Terkena Stroke</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-10.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Kardiovaskular</h4>
                        <p>Trik  Untuk Membuat Anda Terhindar Dari Penyakit Jantung</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-11.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Kardiovaskular</h4>
                        <p>Cegah Penyakit Kardiovaskular Sejak Dini!</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="column box-article">
                    <img src="{{ asset('images/article/article-12.png') }}" alt="article" srcset="">
                    <div class="article-desc-container">
                        <h4>Diabetes</h4>
                        <p>Diabetes - Penyebab, Gejala, Pencegahan</p>
                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @include('layouts.pagination')
        </div>
    </div>
</div>
@include('layouts.foot')
@endsection