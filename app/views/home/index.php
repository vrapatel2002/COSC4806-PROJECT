<?php require_once 'app/views/templates/header.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-6">
            <div class="text-center">
                <div class="page-header" id="banner">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>COSC4806 PROJECT home</h1>
                            <p class="lead">Search for a Movie</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Use GET method to search and send data to /movie/search -->
                        <form action="/movie/search" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for a movie, TV show, etc..." name="title" required>
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
