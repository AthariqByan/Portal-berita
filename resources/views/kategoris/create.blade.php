@extends('layout.main')

@section('container')
    <div class="container mt-5">
        <h1>Tambah Kategori</h1>
        <form action="{{ route('admin.kategoris.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                {{-- <label for="kategori" class="form-label">Category:</label> --}}
                <input type="text" id="kategori" name="kategori" class="form-control" value="{{ old('kategori') }}">
            </div>
            <button type="button" class="btn btn-secondary" onclick="goBack()">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
