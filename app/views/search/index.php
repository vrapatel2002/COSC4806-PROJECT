<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website - Discover Movies</title>
    <link rel="stylesheet" href="/app/views/search/styles-index.css">
</head>
<body>
    <?php require_once 'app/views/templates/header.php'; ?>

    <div class="background-container-index">
        <div class="background-image-index"></div>
    </div>

    <div class="d-flex vh-100 align-items-center justify-content-center">
        <div class="container text-center text-white">
            <div class="page-header mb-4">
                <h1 class="display-3 fw-bold">Welcome to MovieFinder</h1>
                <p class="lead mb-4">Discover millions of movies and TV shows. Start exploring now.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <form action="/search/movie" method="post">
                        <div class="input-group mb-4">
                            <input required type="text" class="form-control form-control-lg rounded-pill" name="search" placeholder="Search for movies or TV shows">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill ms-2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php'; ?>
</body>
</html>
