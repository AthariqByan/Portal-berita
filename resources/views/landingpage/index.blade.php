<?php
use App\Models\News;

// Ambil kata kunci pencarian dari URL jika ada
$searchKeyword = isset($_GET['search']) ? $_GET['search'] : '';

// Lakukan pencarian jika kata kunci tidak kosong
if (!empty($searchKeyword)) {
    $searchResults = News::searchByName($searchKeyword);
} else {
    // Jika tidak ada kata kunci, tampilkan semua berita
    $searchResults = News::all();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 56px;
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }

        .news-title {
            font-size: 1.25rem;
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

        .carousel-item img {
            height: auto;
            max-height: 400px;
            object-fit: cover;
        }

        @media (max-width: 576px) {
            .carousel-item img {
                max-height: 250px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ '/' }}">Portal Berita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex" action="/" method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder="Cari Berita"
                        aria-label="Search" value="<?php echo $searchKeyword; ?>">
                    <button class="btn btn-outline-light" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($news->take(3) as $key => $n)
                <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($news->take(3) as $key => $n)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="images/{{ $n->gambar }}" class="d-block w-100 img-fluid" alt="News Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="card-title news-title">{{ $n->name }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4">Latest News</h2>
                <div class="row row-cols-1 row-cols-lg-3 g-4">
                    <?php foreach ($searchResults as $n) : ?>
                    <!-- News Item 1 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="images/<?php echo $n->gambar; ?>" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title news-title"><?php echo $n->name; ?></h5>
                                <a href="<?php echo route('news.showForGuest', $n->id); ?>" class="btn btn-secondary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-md-4">
                <h2 class="mb-4">Kategori</h2>
                <div class="list-group">
                    @foreach ($kategori as $k)
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
