@extends('layout.main')

@section('container')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Ubah Profil</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right no-bg">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </div>
    </div>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Menentukan metode PUT -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', $user->name) }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control"
                    value="{{ old('email', $user->email) }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password (leave blank to keep current password)</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
            </div>
            <div class="mb-3">
                <label for="profile_picture" class="form-label">Foto Profil</label>
                <input type="file" id="profile_picture" name="profile_picture" class="form-control">
                @if ($user->profile_picture)
                    <img src="{{ asset('images/' . $user->profile_picture) }}" alt="Profile Picture"
                        class="img-thumbnail mt-2" width="150">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
