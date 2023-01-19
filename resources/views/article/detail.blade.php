@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/article-detail.css') }}">
@endsection

@section('navbar-menu')
@include('layouts.navbar')
@endsection

@section('main')
<div class="article-edit-container">
    <div class="content">
        <div class="search-bar-article">
            <div class="ui grid">
                <div class="eleven wide column"></div>
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
                    <h2>Apakah yang Dimaksud Dengan Penyakit Diabetes?</h2>
                    <div class="ui grid">
                        <div class="twelve wide column">
                            <h4>Artikel lainnya: <span>Tim Apadok</span></h4>
                        </div>
                        <div class="four wide column">
                            <h4 class="h4-date">31 Oktober 2022</h4>
                        </div>
                    </div>
                    <img src="{{ asset('images/article/main-article.png') }}" alt="article" srcset="">
                    <p>Tim Apadok, -- Diabetes mellitus dapat menyebabkan berbagai komplikasi yang membahayakan bila tidak segera ditangani. Komplikasi tersebut diantaranya adalah stroke, penyakit jantung, penyakit ginjal, gangguan penglihatan, infeksi kaki yang tidak segera sembuh hingga menyebabkan bagian tersebut harus diamputasi. <br><br>

                Diabetes mellitus, yang biasa dikenal dengan penyakit kencing manis, adalah penyakit metabolik yang menyebabkan gula darah tinggi. Hormon insulin memindahkan gula dari darah ke sel-sel Anda untuk disimpan atau digunakan untuk energi. Dengan diabetes, tubuh Anda tidak membuat cukup insulin atau tidak dapat secara efektif menggunakan insulin yang dihasilkannya. <br><br>

                Gejala umum diabetes yang sering ditemukan antara lain: <br><br>

                    •	Peningkatan rasa lapar<br><br>

                    •	Peningkatan rasa haus<br><br>

                    •	Penurunan berat badan<br><br>

                    •	Sering buang air kecil<br><br>

                    •	Penglihatan kabur<br><br>

                    •	Kelelahan ekstrim<br><br>

                    •	Luka yang tak kunjung sembuh<br><br>

                Diabetes tipe 1 tidak dapat dicegah karena disebabkan oleh masalah pada sistem kekebalan tubuh. Beberapa penyebab diabetes tipe 2, seperti gen atau usia Anda, juga tidak dapat Anda kendalikan. Namun banyak faktor risiko diabetes lainnya dapat dikendalikan. Sebagian besar strategi pencegahan diabetes melibatkan penyesuaian sederhana pada diet dan rutinitas kebugaran Anda. Berikut adalah beberapa hal yang dapat Anda lakukan untuk mencegah diabetes tipe 2: <br><br>

                    •	Lakukan olah raga aerobic setidaknya 150 menit per minggu, seperti berjalan kaki atau bersepeda. <br><br>

                    •	Kurangi lemak jenuh dan trans , bersama dengan karbohidrat olahan, dari diet Anda. <br><br>

                    •	Makan lebih banyak buah, sayuran, dan biji-bijian. <br><br>

                    •	Makan dengan porsi yang lebih kecil. <br><br>

                    •	Cobalah untuk menurunkan 7 persen berat badan Anda jika Anda kelebihan berat badan atau obesitas. <br><br>

                    •	Mengurangi konsumsi makanan dan minuman yang manis <br><br>

                    •	Hindari makanan junkfood, alcohol, dan mengandung kolesterol tinggi</p>
                </div>
                <div class="four wide column">
                    <h3>Artikel lainnya</h3>
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
    </div>
</div>
@include('layouts.foot')
@endsection