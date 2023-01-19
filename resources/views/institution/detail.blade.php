@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-detail.css') }}">
@endsection

@section('main')
<div class="institution-detail">
    <div class="ui grid">
        <div class="fourteen wide column">
            <h1>Informasi Peserta</h1>
        </div>
        <div class="two wide column">
            <button class="ui primary button first-btn" onclick="editModal()">
                <span><img src="{{ asset('images/institution/edit.png') }}" alt="edit"></span>Edit
            </button>
        </div>
    </div>
    <div class="detail-peserta-container">
        <div class="ui four column grid">
            <div class="row">
                <div class="column text-title">Nomor Peserta</div>
                <div class="column text-data">TESTER01</div>
            </div>
            <div class="row">
                <div class="column text-title">Nama Peserta</div>
                <div class="column text-data">Bambang</div>
            </div>
            <div class="row">
                <div class="column text-title">Nomor Telepon</div>
                <div class="column text-data">081251351361</div>
            </div>
            <div class="row">
                <div class="column text-title">Tanggal Lahir</div>
                <div class="column text-data">01-08-1991</div>
            </div>
            <div class="row">
                <div class="column text-title">Jenis Kelamin</div>
                <div class="column text-data">Laki-laki</div>
            </div>
            <div class="row">
                <div class="column text-title">Tinggi Badan(cm)</div>
                <div class="column text-data">176</div>
            </div>
            <div class="row">
                <div class="column text-title">Berat Badan (kg)</div>
                <div class="column text-data">81</div>
            </div>
        </div>
    </div>
    <h1>Riwayat Pemeriksaan</h1>
    <div class="risiko-container">
        <div class="ui grid">
            <div class="thirteen wide column">
                <h3>Pemeriksaan Risiko</h3>
            </div>
            <div class="three wide column">
                <div class="ui menu">
                    <div class="item">
                        <button class="ui orange button sub-btn-ie">
                            Import/Export
                            <i class="fas fa-angle-down dropdown-btn"></i>
                        </button>
                        <div class="sub-menu-btn">
                            <a href="#" class="item sub-item">Import</a>
                            <a href="#" class="item sub-item">Export</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Cari riwayat">
                <i class="search icon"></i>
            </div>
        </div>
        <div class="table-container">
            <table class="ui striped table">
                <thead>
                    <tr>
                        <th>Hasil Diabetes</th>
                        <th>Hasil Stroke</th>
                        <th>Hasil Kardiovaskular</th>
                        <th>Waktu Pemeriksaan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Risiko Tinggi</td>
                        <td>Risiko Rendah</td>
                        <td>Tidak Berisiko</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                </tbody>
            </table>
            @include('layouts.pagination')
        </div>
    </div>
    <div class="kebugaran-container">
        <div class="ui grid">
            <div class="thirteen wide column">
                <h3>Pemeriksaan Kebugaran</h3>
            </div>
            <div class="three wide column">
                <div class="ui menu">
                    <div class="item">
                        <button class="ui orange button sub-btn-ie">
                            Import/Export
                            <i class="fas fa-angle-down dropdown-btn"></i>
                        </button>
                        <div class="sub-menu-btn">
                            <a href="#" class="item sub-item">Import</a>
                            <a href="#" class="item sub-item">Export</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Cari riwayat">
                <i class="search icon"></i>
            </div>
        </div>
        <div class="table-container">
            <table class="ui striped table">
                <thead>
                    <tr>
                        <th>Hasil Kebugaran</th>
                        <th>Waktu Pemeriksaan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                    <tr>
                        <td>Bugar Rendah</td>
                        <td>04-07-2022 10:55:45</td>
                    </tr>
                </tbody>
            </table>
            @include('layouts.pagination')
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
@endsection

@section('js')
<script>
    function editModal() {
        $('#edit-modal').modal('show');
    }
    $('.sub-btn-ie').click(function() {
        $(this).next('.sub-menu-btn').slideToggle();
        $(this).find('.dropdown-btn').toggleClass('rotate-btn');
    })
</script>
@endsection