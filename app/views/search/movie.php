<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/app/views/search/style.css">
</head>
<body>
    <?php require_once 'app/views/templates/header.php'; ?>

    <?php 
    $movie = $data['name'];
    $line = $data['describe'];
    ?>

    <div class="background-container">
        <div class="top-part"></div>
        <div class="background-image" style="background-image: url('<?php echo $movie['Poster']; ?>');"></div>

        <div class="container movie-details position-relative text-center p-4 text-white-custom">
            <div class="row gx-5">
                
                <div class="poster col-md-4 col-sm-6 mb-4">
                    <img src="<?php echo $movie['Poster']; ?>" alt="<?php echo $movie['Title']; ?> Poster" class="img-fluid">
                </div>

                <div class="details col-md-8 col-sm-12">
                    <div class="title text-start" dir="auto">
                        <h2 class="5">
                            <?php echo $movie['Title']; ?>
                            <span class="release_date">(<?php echo $movie['Year']; ?>)</span>
                        </h2>
                        <div class="facts d-flex flex-wrap justify-content-start">
                            <span class="certification border rounded-pill px-2 py-1"><?php echo $movie['Rated']; ?></span>
                            <span class="dot mx-2">•</span>
                            <span class="release"><?php echo $movie['Released']; ?></span>
                            <span class="dot mx-2">•</span>
                            <span class="genres"><?php echo $movie['Genre']; ?> </span>
                            <span class="dot mx-2">•</span>
                            <span class="runtime"><?php echo $movie['Runtime']; ?></span>
                        </div>
                    </div>

                    <div class="header_info text-start">
                        <p class="tagline fst-italic mb-2" dir="auto"><?php echo $line ?></p>
                        <h3 dir="auto">Plot</h3>
                        <div class="plot" dir="auto"><?php echo $movie['Plot']; ?></div>

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

                    <div class="container p-3">
                        <div class="row">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php'; ?>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
