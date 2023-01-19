@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endsection

@section('main')
<div class="admin-dashboard">
    <h1>Jenis Institusi</h1>
    <div class="data-container">
        <div class="ui grid">
            <div class="column box-column">
                <h5>Jumlah Jenis Institusi</h5>
                <p>9 <span>jenis</span></p>
            </div>
        </div>
    </div>
    <div class="option-container">
        <div class="ui grid">
            <div class="column box-search">
                <div class="ui search">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Cari jenis institusi">
                        <i class="search icon"></i>
                    </div>
                </div>
            </div>
            <div class="column box-add">
                <button class="ui primary button" onclick="addModal()">
                    <span><img src="{{ asset('images/institution/plus.png') }}" alt="plus"></span>Tambah Jenis
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
                    <th>Nama Jenis</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Perusahaan</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>Klinik</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>Rumah Sakit</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>Puskesmas</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('layouts.pagination')
</div>
<div class="ui modal" id="add-modal">
    <i class="close icon"></i>
    <div class="content">
        <h2>Tambah Jenis Peserta</h2>
        <div class="ui form">
            <div class="field">
                <label for="jenis-institusi">Jenis Institusi</label>
                <input type="text" name="jenis-institusi" placeholder="Misal: Perusahaan">
            </div>
        </div>
    </div>
    <div class="action">
        <div class="ui deny basic button">
            Batalkan
        </div>
        <div class="ui positive basic button">
            Simpan
        </div>
    </div>
</div>
<div class="ui modal" id="edit-modal">
    <i class="close icon"></i>
    <div class="content">
        <h2>Tambah Jenis Peserta</h2>
        <div class="ui form">
            <div class="field">
                <label for="jenis-institusi">Jenis Institusi</label>
                <input type="text" name="jenis-institusi" value="Perusahaan">
            </div>
        </div>
    </div>
    <div class="action">
        <div class="ui deny basic button">
            Batalkan
        </div>
        <div class="ui positive basic button">
            Simpan
        </div>
    </div>
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
            <h3>Apakah Anda yakin untuk menghapus data Jenis Institusi ini?</h3>
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
    function addModal() {
        $('#add-modal').modal('show');
    }
    function editModal() {
        $('#edit-modal').modal('show');
    }
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