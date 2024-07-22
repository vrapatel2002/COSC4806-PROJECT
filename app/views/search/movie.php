<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link rel="stylesheet" href="/app/views/search/style.css">
</head>
<body>
    <?php require_once 'app/views/templates/header.php'; ?>

    <?php 
    $movie = $data['name'];
    $line = $data['describe'];
    ?>

    <div class="background-container">
        <div class="background-image" style="background-image: url('<?php echo $movie['Poster']; ?>');"></div>

        <div class="container movie-details position-relative text-center p-4 text-white-custom">
            <div class="row gx-5">

                <div class="poster col-md-4 col-sm-6 mb-4">
                    <img src="<?php echo $movie['Poster']; ?>" alt="<?php echo $movie['Title']; ?> Poster" class="img-fluid rounded">
                </div>

                <div class="details col-md-8 col-sm-12">
                    <div class="title text-start mb-3">
                        <h2>
                            <?php echo $movie['Title']; ?>
                            <span class="release_date">(<?php echo $movie['Year']; ?>)</span>
                        </h2>
                        <div class="facts d-flex flex-wrap justify-content-start mb-3">
                            <span class="certification border rounded-pill px-2 py-1 "><?php echo $movie['Rated']; ?></span>
                            <span class="dot mx-2">•</span>
                            <span class="release"><?php echo $movie['Released']; ?></span>
                            <span class="dot mx-2">•</span>
                            <span class="genres"><?php echo $movie['Genre']; ?></span>
                            <span class="dot mx-2">•</span>
                            <span class="runtime"><?php echo $movie['Runtime']; ?></span>
                        </div>
                    </div>

                    <div class="header_info text-start mb-4">
                        <p class="tagline fst-italic mb-2"><?php echo $line ?></p>
                        <h3>Plot</h3>
                        <p class="plot"><?php echo $movie['Plot']; ?></p>

                        <div class="container p-3">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <strong><?php echo $movie['Writer']; ?></strong>
                                    <div class="character">Writer</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong><?php echo $movie['Director']; ?></strong>
                                    <div class="character">Director</div>
                                </div>

                                <?php 
                                $actors = explode(', ', $movie['Actors']);
                                foreach($actors as $actor): ?>
                                <div class="col-md-4 mb-3">
                                    <strong><?php echo $actor; ?></strong>
                                    <div class="character">Actor</div>
                                </div>
                                <?php endforeach; ?>
                                <div class="col-md-4 mb-3">
                                    <strong>Language</strong>
                                    <div class="character"><?php echo $movie['Language']; ?></div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Country</strong>
                                    <div class="character"><?php echo $movie['Country']; ?></div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Awards</strong>
                                    <div class="character"><?php echo $movie['Awards']; ?></div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>Metascore</strong>
                                    <div class="character"><?php echo $movie['Metascore']; ?></div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong>IMDB Rating</strong>
                                    <div class="character"><?php echo $movie['imdbRating']; ?> (<?php echo $movie['imdbVotes']; ?> votes)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary shadow-sm" id="pillNav2" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab2" data-bs-toggle="tab" data-bs-target="#submit-review" type="button" role="tab" aria-controls="submit-review" aria-selected="true">Submit Review & Rating</button>
            </li>
        </ul>
    </div>

    <div class="tab-content mt-4" id="pillNav2Content">
        <div class="tab-pane fade show active" id="submit-review" role="tabpanel" aria-labelledby="home-tab2">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="text">Rate and Review</h3>
                    <div class="star-rating" id="starRating">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                    <form action="/review/addReview" method="post" class="mt-3">
                        <input type="hidden" name="movie_title" value="<?php echo $movie['Title']; ?>">
                        <input type="hidden" name="rating" id="ratingInput">
                        <div class="form-group">
                            <label for="reviewText" class="text">Review:</label>
                            <textarea class="form-control" id="reviewText" name="review" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/app/views/search/script-movie.js"></script>
</body>
</html>
