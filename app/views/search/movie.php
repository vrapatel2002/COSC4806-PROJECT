<link rel="stylesheet" href="/app/views/search/style.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    var movieRating = <?php echo $movie['imdbRating']; ?>;
</script>
<script type="text/javascript" src="/app/views/search/chart.js"></script>
<style>
#main-content {
    display: none;
}

    <div id="loading" class="d-flex justify-content-center align-items-center vh-100">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

<?php require_once 'app/views/templates/header.php'; ?>


    
    <?php $movie = $data['name'] ?>
    <div class="main">
        <div class="movie-details">
            <div class="poster">
                <img src="<?php echo $movie['Poster']; ?>" alt="<?php echo $movie['Title']; ?> Poster">
            </div>
            <div class="details">
                <div class="title" dir="auto">
                    <h2 class="5">
                        <?php echo $movie['Title']; ?>
                        <span class="release_date">(<?php echo $movie['Year']; ?>)</span>
                    </h2>
                    <div class="facts">
                      <span class="certification"><?php echo $movie['Rated']; ?></span>
                      <span class="release"><?php echo $movie['Released']; ?></span>
                      <span class="genres"><?php echo $movie['Genre']; ?> </span>
                      <span class="runtime"><?php echo $movie['Runtime']; ?></span>
                    </div>

                </div>

                <div class="header_info">
                    <h3 class="tagline" dir="auto">Put on a happy face.</h3>
                  <h3 dir="auto">Plot</h3>
                  <div class="plot" dir="auto"><?php echo $movie['Plot']; ?></div>

                  <ol class="people no_image">
                        <li class="profile">
                          <p><?php echo $movie['Writer']; ?></p>
                          <p class="character">Writer</p>
                        </li>
                        <li class="profile">
                          <p><?php echo $movie['Director']; ?></p>
                          <p class="character">Director</p>
                        </li>

                      <?php 
                      $actors = explode(', ', $movie['Actors']); // Split actors into an array
                      foreach($actors as $actor): ?>
                          <li class="profile">
                              <p><?php echo $actor; ?></p>
                              <p class="character">Actor</p>
                          </li>
                      <?php endforeach; ?>
                  </ol>
                </div>

                <div id="chart_div"></div>
                
                <p><strong>Language:</strong> <?php echo $movie['Language']; ?></p>
                <p><strong>Country:</strong> <?php echo $movie['Country']; ?></p>
                <p><strong>Awards:</strong> <?php echo $movie['Awards']; ?></p>
               
                <p><strong>Metascore:</strong> <?php echo $movie['Metascore']; ?></p>
                <p><strong>IMDB Rating:</strong> <?php echo $movie['imdbRating']; ?> (<?php echo $movie['imdbVotes']; ?> votes)</p>
            </div>
        </div>
        </div>


<?php require_once 'app/views/templates/footer.php'; ?>
