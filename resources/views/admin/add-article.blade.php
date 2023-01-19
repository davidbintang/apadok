@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-addArticle.css') }}">
@endsection

@section('main')
<div class="admin-add-article">
    <h1>Buat Artikel Kesehatan</h1>
    <div class="form-container">
        <div class="ui form">
            <div class="field">
                <label for="judul" class="lbl-field">Judul</label>
                <input class="input-txt" type="text" name="judul" placeholder="Tulis Judul Artikel">
            </div>
            <div class="field">
                <label for="kategori" class="lbl-field">Kategori</label>
                <input class="input-txt" type="text" name="kategori" placeholder="Textfield">
            </div>
            <div class="field">
                <label for="text" class="lbl-field">Jenis</label>
                <div class="ui radio checkbox">
                    <input type="radio" name="jenis" id="text" value="text">
                    <label for="text">Text</label>
                </div>
            </div>
            <div class="field">
                <div class="ui radio checkbox">
                    <input type="radio" name="jenis" id="video" value="video">
                    <label for="video">Video</label>
                </div>
            </div>
            <div class="field">
                <label for="ilustrasi" class="lbl-field">Ilustrasi</label>
                <button class="ui blue button">Pilih Gambar</button>
            </div>
            <div class="field">
                <label for="isi" class="lbl-field">Isi</label>
                <textarea name="isi" id="isi" cols="30" rows="15" placeholder="Tulis artikel disini"></textarea>
            </div>
            <div class="ui grid">
                <div class="four column row">
                    <div class="right floated column">
                        <button class="ui basic button">Batalkan</button>
                        <button class="ui blue button">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection