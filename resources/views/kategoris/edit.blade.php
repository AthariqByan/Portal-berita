@extends('layout.main')
@section('container')
    <div class="container mt-5">
        <h1>Edit Kategori</h1>
        <form action="{{ route('admin.kategoris.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                {{-- <label for="kategori" class="form-label">Category:</label> --}}
                <input type="text" id="kategori" name="kategori" class="form-control" value="{{ $kategori->kategori }}">
            </div>
            <button type="button" class="btn btn-secondary" onclick="goBack()">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
