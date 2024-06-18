@extends('layout.main')
@section('container')
    <div class="container mt-5">
        <h1>Edit Berita</h1>
        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Judul</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $news->name }}">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="form-control">
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea id="isi" name="isi" class="form-control">{{ $news->isi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select id="id_kategori" name="id_kategori" class="form-control">
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ old('id_kategori') == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="button" class="btn btn-secondary" onclick="goBack()">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
