@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-article.css') }}">
@endsection

@section('main')
<div class="admin-article">
    <h1>Artikel Kesehatan</h1>
    <div class="data-container">
        <div class="ui grid">
            <div class="column box-column">
                <h5>Jumlah Artikel Kesehatan</h5>
                <p>9 <span>Artikel</span></p>
            </div>
        </div>
    </div>
    <div class="option-container">
        <div class="ui grid">
            <div class="column box-search">
                <div class="ui search">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Cari institusi">
                        <i class="search icon"></i>
                    </div>
                </div>
            </div>
            <div class="column box-add">
                <button class="ui primary button" onclick="location.href='{{ route('admin.addArticle') }}'">
                    <span><img src="{{ asset('images/institution/plus.png') }}" alt="plus"></span>Tambah Artikel
                </button>
            </div>
            <div class="column box-import-export">
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
    </div>
    <div class="table-container">
        <table class="ui striped table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Jenis</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Apakah yang Dimaksud Dengan Diabetes?</td>
                    <td class="article-type">Diabetes</td>
                    <td>Text</td>
                    <td><a href="#" class="edit-link" onclick="location.href='{{ route('admin.editArticle') }}'"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>Bagaimana Stroke Bisa Terjadi?</td>
                    <td class="article-type">Stroke</td>
                    <td>Text</td>
                    <td><a href="#" class="edit-link" onclick="location.href='{{ route('admin.editArticle') }}'"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>Kenali 5 Manfaat Pisang Untuk Mengantisipasi Penyakit Jantung</td>
                    <td class="article-type">Kardiovaskular</td>
                    <td>Video</td>
                    <td><a href="#" class="edit-link" onclick="location.href='{{ route('admin.editArticle') }}'"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>Kok Bisa Kencing Manis?</td>
                    <td class="article-type">Diabetes</td>
                    <td>Video</td>
                    <td><a href="#" class="edit-link" onclick="location.href='{{ route('admin.editArticle') }}'"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('layouts.pagination')
</div>
<div class="ui modal" id="download-modal">
    <i class="close icon"></i>
    <div class="content">
        <div class="content-container">
            <img src="{{ asset('images/institution/success.png') }}" alt="success">
            <h3>Template berhasil diunduh</h3>
            <button class="ui blue button">Tutup</button>
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
<div class="ui modal" id="delete-modal">
    <i class="close icon"></i>
    <div class="content">
        <div class="content-container">
            <img src="{{ asset('images/institution/danger.png') }}" alt="danger">
            <h3>Apakah Anda yakin untuk menghapus artikel kesehatan ini?</h3>
            <div class="button-container">
                <button class="ui basic button">Ya</button>
                <button class="ui blue button">Tidak</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function exportModal() {
        $('#export-modal').modal('show');
    }
    function deleteModal() {
        $('#delete-modal').modal('show');
    }
    $('.sub-btn-ie').click(function() {
        $(this).next('.sub-menu-btn').slideToggle();
        $(this).find('.dropdown-btn').toggleClass('rotate-btn');
    })
</script>
@endsection