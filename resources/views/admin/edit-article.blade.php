@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-editArticle.css') }}">
@endsection

@section('main')
<div class="admin-edit-article">
    <h1>Edit Artikel Kesehatan</h1>
    <div class="form-container">
        <div class="ui form">
            <div class="field">
                <label for="judul" class="lbl-field">Judul</label>
                <input class="input-txt" type="text" name="judul" placeholder="Tulis Judul Artikel" value="Apakah yang Dimaksud Dengan Diabetes?">
            </div>
            <div class="field">
                <label for="kategori" class="lbl-field">Kategori</label>
                <input class="input-txt" type="text" name="kategori" placeholder="Textfield" value="Diabetes">
            </div>
            <div class="field">
                <label for="text" class="lbl-field">Jenis</label>
                <div class="ui radio checkbox">
                    <input type="radio" name="jenis" id="text" value="text" checked="checked">
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
                <textarea name="isi" id="isi" cols="30" rows="15" placeholder="Tulis artikel disini">Diabetes mellitus dapat menyebabkan berbagai komplikasi yang membahayakan bila tidak segera ditangani. Komplikasi tersebut diantaranya adalah stroke, penyakit jantung, penyakit ginjal, gangguan penglihatan, infeksi kaki yang tidak segera sembuh hingga menyebabkan bagian tersebut harus diamputasi.

Diabetes mellitus, yang biasa dikenal dengan penyakit kencing manis, adalah penyakit metabolik yang menyebabkan gula darah tinggi. Hormon insulin memindahkan gula dari darah ke sel-sel Anda untuk disimpan atau digunakan untuk energi. Dengan diabetes, tubuh Anda tidak membuat cukup insulin atau tidak dapat secara efektif menggunakan insulin yang dihasilkannya.

Gejala umum diabetes yang sering ditemukan antara lain:

	•	Peningkatan rasa lapar

	•	Peningkatan rasa haus

	•	Penurunan berat badan

	•	Sering buang air kecil

	•	Penglihatan kabur
            </textarea>
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