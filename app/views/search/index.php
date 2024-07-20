<?php require_once 'app/views/templates/header.php'?>

<div class="d-flex vh-100">
    <div class="container my-auto">
        <div class="page-header text-center mb-4" id="banner">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Welcome</h1><br>
                    <h2>Millions of movies and TV shows to discover. Explore now.</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="buttons col-lg-6 text-center">
            <form action="/search/movie" method="post" >
            <fieldset>

                    <input required type="text" class="form-control" name="search" placeholder="Search for a movie or TV show">
                <button type="submit" class="btn btn-primary">Search</button>
            </fieldset>
            </form>
            </div>
        </div>
    </div>
</div> 

</div>
    <?php require_once 'app/views/templates/footer.php' ?>
