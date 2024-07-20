<link rel="stylesheet" href="/app/views/home/styles.css">
<?php require_once 'app/views/templates/header.php'; ?>

<div class="background-container position-relative">
    <div class="background position-absolute w-100 h-100"></div>
    <div class="d-flex vh-100 position-relative">
        <div class="container my-auto mt-5">
            <div class="page-header text-left mb-4" id="banner">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white">Welcome to Movie Info and Reviews</h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-left">
                <div class="col-lg-6">
                    <a href="search.php" class="btn btn-primary rounded-pill ms-2">Log In</a>
                    <br><br>
                    <a href="search" class="btn btn-primary rounded-pill ms-2">Continue Without Logging In</a>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="buttons col-lg-6 text-center">
                    <!-- Add additional content here if needed -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>

<!-- Custom CSS -->
<style>
   
</style>
