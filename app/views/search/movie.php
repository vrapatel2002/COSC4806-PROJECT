
<link rel="stylesheet" href="/app/views/search/style.css">
<body>
    
    <?php $movie = $data['name'] ?>

    <div class="movie-details">
        <div class="poster">
            <img src="<?php echo $movie['Poster']; ?>" alt="<?php echo $movie['Title']; ?> Poster">
        </div>
        <div class="details">
            <h1><?php echo $movie['Title']; ?> (<?php echo $movie['Year']; ?>)</h1>
            <p><strong>Rated:</strong> <?php echo $movie['Rated']; ?></p>
            <p><strong>Released:</strong> <?php echo $movie['Released']; ?></p>
            <p><strong>Runtime:</strong> <?php echo $movie['Runtime']; ?></p>
            <p><strong>Genre:</strong> <?php echo $movie['Genre']; ?></p>
            <p><strong>Director:</strong> <?php echo $movie['Director']; ?></p>
            <p><strong>Writer:</strong> <?php echo $movie['Writer']; ?></p>
            <p><strong>Actors:</strong> <?php echo $movie['Actors']; ?></p>
            <p><strong>Plot:</strong> <?php echo $movie['Plot']; ?></p>
            <p><strong>Language:</strong> <?php echo $movie['Language']; ?></p>
            <p><strong>Country:</strong> <?php echo $movie['Country']; ?></p>
            <p><strong>Awards:</strong> <?php echo $movie['Awards']; ?></p>
            <h3>Ratings:</h3>
            <ul class="ratings">
                <?php foreach ($movie['Ratings'] as $rating) : ?>
                    <li><strong><?php echo $rating['Source']; ?>:</strong> <?php echo $rating['Value']; ?></li>
                <?php endforeach; ?>
            </ul>
            <p><strong>Metascore:</strong> <?php echo $movie['Metascore']; ?></p>
            <p><strong>IMDB Rating:</strong> <?php echo $movie['imdbRating']; ?> (<?php echo $movie['imdbVotes']; ?> votes)</p>
        </div>
    </div>
</body>
</html>
