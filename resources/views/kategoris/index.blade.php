@extends('layout.main')
@section('container')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Kategori</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right no-bg">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
        </div><!-- /.col -->
    </div>
    <div class="container mt-5">
        <a href="{{ route('admin.kategoris.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $kategoris)
                        <tr>
                            <td>{{ $kategoris->id }}</td>
                            <td>{{ $kategoris->kategori }}</td>
                            <td>
                                <a href="{{ route('admin.kategoris.edit', $kategoris->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.kategoris.destroy', $kategoris->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
