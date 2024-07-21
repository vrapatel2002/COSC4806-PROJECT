<!-- Bootstrap CSS from GetBootstrap -->
<link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/app/views/home/styles.css">
<?php require_once 'app/views/templates/header.php'; ?>

<div class="background-container position-relative">
    <div class="background position-absolute w-100 h-100"></div>
    <div class="d-flex vh-100 position-relative align-items-center justify-content-center">
        <div class="container text-center">
            <div class="page-header mb-4">
                <h1 class="display-4 text-white">Welcome to Movie Info and Reviews</h1>
            </div>

            <div class="row mb-4">
                <div class="col-lg-12">
                    <a href="search.php" class="btn btn-primary rounded-pill mb-2">Log In</a>
                    <br>
                    <a href="search" class="btn btn-primary rounded-pill">Continue Without Logging In</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>