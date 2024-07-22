<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Info and Reviews</title>
    <link rel="stylesheet" href="/app/views/home/styles.css">
</head>
<body>
    <?php require_once 'app/views/templates/header.php'; ?>

    <div class="background-container d-flex align-items-center justify-content-center">
        <div class="background position-absolute w-100 h-100"></div>
        <div class="content position-relative text-center text-white">
            <h1 class="display-4 mb-4">Welcome to Movie Info and Reviews</h1>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <a href="search.php" class="btn btn-primary rounded-pill mb-2">Log In</a>
                    <br>
                    <a href="search/index" class="btn btn-secondary rounded-pill">Continue Without Logging In</a>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php'; ?>
</body>
</html>
