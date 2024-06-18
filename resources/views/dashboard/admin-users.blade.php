@extends('layout.main')
@section('container')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Pengguna</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right no-bg">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Pengguna</li>
            </ol>
        </div><!-- /.col -->
    </div>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Foto Profil</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/profile_pictures/' . $user->profile_picture) }}"
                                alt="Profile Picture" width="50">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
