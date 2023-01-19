@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-institutionList.css') }}">
@endsection

@section('main')
<div class="admin-institution-list">
    <h1>Jenis Institusi</h1>
    <div class="data-container">
        <div class="ui grid">
            <div class="column box-column">
                <h5>Jumlah Institusi</h5>
                <p>9 <span>Institusi</span></p>
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
                <button class="ui primary button" onclick="addModal()">
                    <span><img src="{{ asset('images/institution/plus.png') }}" alt="plus"></span>Tambah Institusi
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
                    <th>Kode Grup</th>
                    <th>Nama Institusi</th>
                    <th>Jenis</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="group-code">MBDITS22</td>
                    <td>Kelas MBD ITS</td>
                    <td class="institution-type">Pendidikan</td>
                    <td>dwi@if.its.ac.id</td>
                    <td>0812748293821</td>
                    <td>Jl. Keputih 1/13</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td class="group-code">7UXJS3</td>
                    <td>Klinik Sutorejo</td>
                    <td class="institution-type">Klinik</td>
                    <td>klinik@gmail.com</td>
                    <td>082222080822</td>
                    <td>Jl. Sutorejo</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td class="group-code">ZDK390</td>
                    <td>Klinik Uji Coba</td>
                    <td class="institution-type">Pendidikan</td>
                    <td>ujiklinik@gmail.com</td>
                    <td>0878291038212</td>
                    <td>Mulyosari Tengah VII 97A</td>
                    <td><a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td class="group-code">NS94FKU</td>
                    <td>Program Studi Bedah Saraf Unair</td>
                    <td class="institution-type">Program Studi</td>
                    <td>kps.ns.sby@gmail.com</td>
                    <td>0877123123921</td>
                    <td>Jl. Bendul Merisi Selatan Airdas No, 47 Surabaya</td>
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
        <h2>Tambah Institusi</h2>
        <div class="ui form">
            <div class="ui two column relaxed grid">
                <div class="column">
                    <div class="field">
                        <label for="nama-institusi">Nama Institusi</label>
                        <input type="text" name="nama-institusi" placeholder="Masukkan nama institusi">
                    </div>
                    <div class="field">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" placeholder="Masukkan jenis institusi">
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Masukkan email institusi">
                    </div>
                    <div class="field">
                        <label for="nomor-telepon">Nomor Telepon</label>
                        <input type="text" name="nomor-telepon" placeholder="Masukkan nomor telepon institusi">
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="text" name="password" placeholder="Masukkan password institusi">
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Masukkan alamat institusi">
                    </div>
                    <div class="field">
                        <label for="logo">Logo</label>
                        <button class="ui blue button">Pilih Gambar</button>
                    </div>
                </div>
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
        <h2>Tambah Institusi</h2>
        <div class="ui form">
            <div class="ui two column relaxed grid">
                <div class="column">
                    <div class="field">
                        <label for="nama-institusi">Nama Institusi</label>
                        <input type="text" name="nama-institusi" value="Klinik Sutorejo">
                    </div>
                    <div class="field">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" value="Klinik">
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="klinik@gmail.com">
                    </div>
                    <div class="field">
                        <label for="nomor-telepon">Nomor Telepon</label>
                        <input type="text" name="nomor-telepon" value="082222080822">
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="text" name="password" value="Sutorejo16">
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="Jln. Sutorejo">
                    </div>
                    <div class="field">
                        <label for="logo">Logo</label>
                        <button class="ui blue button">Pilih Gambar</button>
                    </div>
                </div>
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
            <h3>Apakah Anda yakin untuk menghapus data Institusi ini?</h3>
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