<!-- resources/views/news/showForGuest.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->name }} - Portal Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <style>
        body {
            padding-top: 56px;
        }

        .news-title {
            font-size: 2rem;
            font-weight: bold;
        }

        .news-content {
            font-size: 1rem;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 1rem 0;
            text-align: center;
        }

        .btn-custom {
            display: inline-flex;
            align-items: center;
        }

        .btn-custom i {
            margin-right: 0.5rem;
        }

        .btn-back i {
            margin-left: 0.5rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portal Berita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <img src="/images/{{ $news->gambar }}" class="card-img-top" alt="{{ $news->name }}">
                    <div class="card-body">
                        <h2 class="card-title news-title">{{ $news->name }}</h2>
                        <p class="card-text news-content">{{ $news->isi }}</p>
                        <p class="card-text"><small class="text-muted">Kategori: {{ $news->kategori->kategori }}</small>
                        </p>
                    </div>
                </div>
                <a href="{{ url('/') }}" class="btn btn-secondary btn-custom"><i class="bi bi-arrow-left"></i>
                    Kembali ke Daftar Berita</a>
            </div>

            <!-- Kategori -->
            <div class="col-md-4">
                <h2 class="mb-4">Kategori</h2>
                <div class="list-group">
                    @foreach ($kategoris as $k)
                        <a href="/?kategori={{ $k->id }}"
                            class="list-group-item list-group-item-action">{{ $k->kategori }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer mt-4">
        <div class="container">
            <p class="mb-0">© 2024 Portal Berita. All rights reserved.</p>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
