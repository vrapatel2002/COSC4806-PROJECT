<link rel="stylesheet" href="/app/views/search/styles-index.css">
<?php require_once 'app/views/templates/header.php' ?>

<div class="background-container-index">
    <div class="background-image-index"></div>
</div>

<div class="d-flex vh-100">
    
    <div class="container-index my-auto mt-5" style="margin-top: 20px;">
        
        <div class="page-header text-center mb-4" id="banner">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Welcome</h1>
                    <h2>Millions of movies and TV shows to discover. Explore now.</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="/search/movie" method="post">
                    <fieldset>
                        <div class="input-group">
                            <input required type="text" class="form-control rounded-pill" name="search" placeholder="Search for a movie or TV show">
                            <button type="submit" class="btn btn-primary rounded-pill ms-2">Search</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        
    </div>
    
</div>

<?php require_once 'app/views/templates/footer.php' ?>
