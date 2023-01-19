@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-peserta.css') }}">
@endsection

@section('main')
<div class="institution-peserta">
    <h1>Peserta</h1>
    <div class="data-container">
        <div class="ui two column relaxed grid">
            <div class="column box-column left-box">
                <h5>Total Jumlah Peserta</h5>
                <p>6 <span>orang</span></p>
            </div>
            <div class="column box-column rigt-box">
                <h5>Total Peserta Sudah Skrining</h5>
                <p>5 <span>orang</span></p>
            </div>
        </div>
    </div>
    <div class="option-container">
        <div class="ui grid">
            <div class="column box-search">
                <div class="ui search">
                    <div class="ui icon input">
                        <input class="prompt" type="text" placeholder="Cari Peserta">
                        <i class="search icon"></i>
                    </div>
                </div>
            </div>
            <div class="column box-add">
                <button class="ui primary button" onclick="addModal()">
                    <span><img src="{{ asset('images/institution/plus.png') }}" alt="plus"></span>Tambah Peserta
                </button>
            </div>
            <div class="column box-download">
                <button class="ui primary basic button" onclick="downloadModal()">
                    <span><img src="{{ asset('images/institution/download.png') }}" alt="download"></span>Unduh Template
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
                    <th>Nomor Peserta</th>
                    <th>Nama Peserta</th>
                    <th>Nomor Telepon</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TESTER01</td>
                    <td>Bambang</td>
                    <td>088811112222</td>
                    <td><a href="{{ route('institution.detail') }}" class="detail-link">Lihat detail </a><span>|<a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER02</td>
                    <td>Rahayu</td>
                    <td>081212389746</td>
                    <td><a href="{{ route('institution.detail') }}" class="detail-link">Lihat detail </a><span>|<a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER03</td>
                    <td>Sutejo</td>
                    <td>0824869284972</td>
                    <td><a href="{{ route('institution.detail') }}" class="detail-link">Lihat detail </a><span>|<a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER04</td>
                    <td>Rifki</td>
                    <td>0838476248974</td>
                    <td><a href="{{ route('institution.detail') }}" class="detail-link">Lihat detail </a><span>|<a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER05</td>
                    <td>Ahmad Tauhid</td>
                    <td>0897378819764</td>
                    <td><a href="{{ route('institution.detail') }}" class="detail-link">Lihat detail </a><span>|<a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
                <tr>
                    <td>TESTER06</td>
                    <td>Indra Surya</td>
                    <td>0867135882790</td>
                    <td><a href="{{ route('institution.detail') }}" class="detail-link">Lihat detail </a><span>|<a href="#" class="edit-link" onclick="editModal()"> Edit </a><span>|</span><a href="#" class="delete-link" onclick="deleteModal()"> Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('layouts.pagination')
</div>
<div class="ui modal" id="add-modal">
    <i class="close icon"></i>
    <div class="content">
        <h2>Tambah Peserta</h2>
        <div class="ui form">
            <div class="ui two column relaxed grid">
                <div class="column">
                    <div class="field">
                        <label for="nomor-peserta">Nomor Peserta</label>
                        <input type="text" name="nomor-peserta" placeholder="Masukkan nomor peserta">
                    </div>
                    <div class="field">
                        <label for="nama-peserta">Nama Peserta</label>
                        <input type="text" name="nama-peserta" placeholder="Masukkan nama peserta">
                    </div>
                    <div class="field">
                        <label for="nomor-telepon">Nomor Telepon</label>
                        <input type="text" name="nomor-telepon" placeholder="Masukkan nomor telepon">
                    </div>
                    <div class="field">
                        <label for="tanggal-lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal-lahir" placeholder="Masukkan tanggal lahir">
                    </div>
                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <div class="ui two column relaxed grid">
                        <div class="column">
                            <div class="field">
                                <button class="ui basic button">Laki-laki</button>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <button class="ui basic button">Perempuan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label for="tinggi-badan">Tinggi Badan (cm)</label>
                        <input type="text" name="tinggi-badan" placeholder="Masukkan tinggi badan">
                    </div>
                    <div class="field">
                        <label for="berat-badan">Berat Badan (kg)</label>
                        <input type="text" name="berat-badan" placeholder="Masukkan berat badan">
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
        <h2>Tambah Peserta</h2>
        <div class="ui form">
            <div class="ui two column relaxed grid">
                <div class="column">
                    <div class="field">
                        <label for="nomor-peserta">Nomor Peserta</label>
                        <input type="text" name="nomor-peserta" value="TESTER01">
                    </div>
                    <div class="field">
                        <label for="nama-peserta">Nama Peserta</label>
                        <input type="text" name="nama-peserta" value="Bambang">
                    </div>
                    <div class="field">
                        <label for="nomor-telepon">Nomor Telepon</label>
                        <input type="text" name="nomor-telepon" value="081251351361">
                    </div>
                    <div class="field">
                        <label for="tanggal-lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal-lahir">
                    </div>
                    <label for="jenis-kelamin">Jenis Kelamin</label>
                    <div class="ui two column relaxed grid">
                        <div class="column">
                            <div class="field">
                                <button class="ui basic button">Laki-laki</button>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <button class="ui basic button">Perempuan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label for="tinggi-badan">Tinggi Badan (cm)</label>
                        <input type="text" name="tinggi-badan" value="176">
                    </div>
                    <div class="field">
                        <label for="berat-badan">Berat Badan (kg)</label>
                        <input type="text" name="berat-badan" value="81">
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
            <h3>Apakah Anda yakin untuk menghapus data peserta ini?</h3>
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
    function downloadModal() {
        $('#download-modal').modal('show');
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