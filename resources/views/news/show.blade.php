@extends('layout.main')
@section('container')
    <div class="container mt-5">
        <h1>{{ $news->name }}</h1>
        <img src="{{ asset('images/' . $news->gambar) }}" width="300" class="img-fluid mb-3">
        <p>{{ $news->isi }}</p>
        <p><strong>Kategori:</strong> {{ $news->kategori->kategori }}</p>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
