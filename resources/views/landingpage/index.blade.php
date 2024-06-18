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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Technology</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="News 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Headline News 1</h5>
                    <p>Description for headline news 1.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="News 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Headline News 2</h5>
                    <p>Description for headline news 2.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="News 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Headline News 3</h5>
                    <p>Description for headline news 3.</p>
                </div>
            </div>
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
                    <!-- News Item 1 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title news-title">News Title 1</h5>
                                <p class="card-text news-content">This is a longer card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title news-title">News Title 2</h5>
                                <p class="card-text news-content">This is a longer card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title news-title">News Title 3</h5>
                                <p class="card-text news-content">This is a longer card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 4 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title news-title">News Title 4</h5>
                                <p class="card-text news-content">This is a longer card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 5 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title news-title">News Title 5</h5>
                                <p class="card-text news-content">This is a longer card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 6 -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title news-title">News Title 6</h5>
                                <p class="card-text news-content">This is a longer card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h2 class="mb-4">Categories</h2>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">News</a>
                    <a href="#" class="list-group-item list-group-item-action">Sports</a>
                    <a href="#" class="list-group-item list-group-item-action">Entertainment</a>
                    <a href="#" class="list-group-item list-group-item-action">Technology</a>
                    <a href="#" class="list-group-item list-group-item-action">Health</a>
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