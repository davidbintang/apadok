@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('navbar-menu')
@include('layouts.navbar')
@endsection

@section('main')
<div class="about-container">
    <div class="about-sect-1">
        <div class="content">
            <div class="ui grid">
                <div class="eight wide column">
                    <div class="left-column">
                        <h3>Misi Kami</h3>
                        <p>Seluruh fitur APADOK tersedia dalam versi web dan mobile app yang mudah diakses melalui perangkat komputer maupun ponsel pintar oleh seluruh masyarakat Indonesia, kapan saja, di mana saja. Nikmati kemudahan mencari informasi kesehatan terlengkap dengan respons cepat, serta layanan dokter umum maupun spesialis berpengalaman yang tersebar di seluruh Indonesia. APADOK membantu masyarakat Indonesia dalam membuat keputusan terbaik terkait kesehatan diri dan keluarga tercinta.</p>
                    </div>
                </div>
                <div class="eight wide column">
                    <div class="right-column">
                        <img src="{{ asset('images/about/mission.png') }}" alt="mission">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-sect-2">
        <div class="content">
            <h3>Tujuan Kami</h3>
            <h1>Kerja Sehat, Layanan Unggul, Inovasi terdepan.</h1>
        </div>
    </div>
    <div class="about-sect-3">
        <div class="content">
            <h3>Cerita Kami</h3>
            <div class="ui grid">
                <div class="eight wide column">
                    <div class="left-column">
                        <img src="{{ asset('images/about/video.png') }}" alt="video">
                    </div>
                </div>
                <div class="eight wide column">
                    <div class="right-column">
                        <p>Sebagai platform kesehatan terlengkap dengan pertumbuhan tercepat se-Asia Tenggara, APADOK menyediakan 5 fitur utama yang bermanfaat bagi masyarakat Indonesia untuk membuat keputusan terbaik terkait kesehatan, baik secara pribadi maupun keluarga, yaitu: chat bersama dokter, buat janji konsultasi dengan dokter dan/atau mencari rumah sakit pilihan, artikel kesehatan terlengkap dalam bahasa Indonesia, perlindungan kesehatan tambahan dengan Proteksi APADOK, serta kemudahan untuk berbelanja kebutuhan kesehatan. APADOK juga memiliki platform APADOK ADMIN dan APADOK KLINIK yang dibuat khusus untuk dokter guna mendukung perputaran informasi medis yang berkelanjutan bagi sesama tenaga medis, sehingga diharapkan dapat meningkatkan kualitas layanan kesehatan di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-sect-4">
        <div class="content">
            <h3>Apa Kata Mereka?</h3>
            <div class="ui three column grid">
                <div class="column">
                    <div class="ui card">
                        <div class="content">
                            <div class="ui grid">
                                <div class="four wide column">
                                    <img src="{{ asset('images/about/ppl1.png') }}" alt="people">
                                </div>
                                <div class="twelve wide column">
                                    <h4 class="header">Esther Albright</h4>
                                    <div class="meta">
                                        <span>Kepala Farmasi RS Onkologi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui card">
                        <div class="content">
                            <div class="ui grid">
                                <div class="four wide column">
                                    <img src="{{ asset('images/about/ppl2.png') }}" alt="people">
                                </div>
                                <div class="twelve wide column">
                                    <h4 class="header">Taylor Swift</h4>
                                    <div class="meta">
                                        <span>Kepala RS Mitra Keluarga</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description">
                                <p>Lebih murah, lebih cepat, no effort, dan lebih mantap dibanding yang lain. Ga bisa berkata-kata lagi. Layanan mudah dan murah. Thanks pokoknya buat Apadok.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui card">
                        <div class="content">
                            <div class="ui grid">
                                <div class="four wide column">
                                    <img src="{{ asset('images/about/ppl3.png') }}" alt="people">
                                </div>
                                <div class="twelve wide column">
                                    <h4 class="header">Isabelle Fuhrman</h4>
                                    <div class="meta">
                                        <span>Kepala RSJ Saarne</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description">
                                <p>Udah 2 tahun saya gak pernah ngeluh soal rekap data pasien karena semuanya lengkap di Apadok. Selama ini gapernah mengecewakan, layanannya juga lengkap banget.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-sect-5">
        <div class="content">
            <h3>Galeri Kami</h3>
            <div class="ui three column grid">
                <div class="column">
                    <img src="{{ asset('images/about/gal1.png') }}" alt="gallery">
                </div>
                <div class="column">
                    <img src="{{ asset('images/about/gal2.png') }}" alt="gallery">
                </div>
                <div class="column">
                    <img src="{{ asset('images/about/gal3.png') }}" alt="gallery">
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.foot')
@endsection