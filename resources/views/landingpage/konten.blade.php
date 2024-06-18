<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .content {
            margin-top: 20px;
        }

        .sidebar {
            border-left: 1px solid #ddd;
            padding-left: 20px;
        }

        .article-img {
            max-width: 100%;
            height: auto;
        }

        .recommendations,
        .popular-news {
            margin-bottom: 20px;
        }

        .recommendations a,
        .popular-news a {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .recommendations h5,
        .popular-news h5 {
            font-size: 1.1rem;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portal Berita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sport</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hype</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Korea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Life</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Health</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container content">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Korea</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Makna 6 Lagu ATEEZ di EP GOLDEN HOUR:
                            Part. 1, Ceritakan Momen Terbaik</li>
                    </ol>
                </nav>

                <h1>Makna 6 Lagu ATEEZ di EP GOLDEN HOUR: Part. 1, Ceritakan Momen Terbaik</h1>
                <p><small>06 Jun 24 | 09:36</small></p>
                <p><strong>Hongjoong dan Mingi berpartisipasi dalam penulisan liriknya</strong></p>
                <img src="gambar.png" alt="ATEEZ" class="article-img">
                <p class="mt-4">Description for the article goes here. This is where you can provide a detailed
                    explanation of the article content. You can include any text that suits the topic being discussed.
                </p>
            </div>
            <div class="col-lg-4 sidebar">
                <div class="recommendations">
                    <h2>Rekomendasi Artikel</h2>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Apa Arti All Eyes on Rafah?
                            Sedang Ramai di Media Sosial</a>
                        <a href="#" class="list-group-item list-group-item-action">Penjelasan Ending Lovely
                            Runner, Sun Jae-Im Sol Benaran Nikah?</a>
                        <a href="#" class="list-group-item list-group-item-action">Info Konser Dua Lipa di
                            Jakarta, Tiket Mulai Dijual 10 Juni</a>
                    </div>
                </div>
                <div class="popular-news">
                    <h2>Berita Terpopuler</h2>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Strategi IPB dan UGM Hadapi
                            Final Liga Debat Mahasiswa IDN Times</a>
                        <a href="#" class="list-group-item list-group-item-action">6 Hewan Huruf Q, Jarang Ada
                            yang Tahu! Kamu Tahu Quagga?</a>
                        <a href="#" class="list-group-item list-group-item-action">5 Tips Mencicil HP dengan
                            Paylater, Jangan Mau Rugi</a>
                        <a href="#" class="list-group-item list-group-item-action">35 Model Rambut Pendek Pria
                            2024, Rapi dan Stylish!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
