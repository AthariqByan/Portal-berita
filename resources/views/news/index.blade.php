@extends('layout.main')
@section('container')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Berita</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right no-bg">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Berita</li>
            </ol>
        </div>
    </div>
    <div class="container mt-5">
        <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        {{-- <th>Isi</th> --}}
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ Str::limit($item->name, 50) }}</td>
                            <td><img src="{{ asset('images/' . $item->gambar) }}" width="100" class="img-fluid"></td>
                            {{-- <td>{{ Str::limit($item->isi, 50) }}</td> --}}
                            <td>{{ $item->kategori ? $item->kategori->kategori : 'No Category' }}</td>
                            <td>
                                <a href="{{ route('admin.news.show', $item->id) }}" class="btn btn-info btn-sm mb-1"
                                    title="Lihat"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning btn-sm mb-1"
                                    title="Edit"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Hapus"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
