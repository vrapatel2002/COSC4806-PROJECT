<?php require_once 'app/views/templates/header.php' ?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-lg-6">
            <div class="container text-center">
                <div class="page-header" id="banner">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>COSC4806 PROJECT</h1>
                            <p class="lead">Search for a Movie</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form action="/controller/omdb" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for movie, tv show....." name="title" required>
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php' ?>
