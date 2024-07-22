<?php

class Review extends Controller{

    public function addReview(){
      
      $rating = $_POST['rating'];
      $review = $_POST['review'];
      $movie_title = $_POST['movie_title'];
    
      if (empty($rating) || empty($review) || empty($movie_title)) {
          echo "All fields are required.";
          return;
      }
    
      $movie = $this->model('Movie'); 
      $user_data = $movie->saveReview($movie_title,$rating, $review);
      
      header("Location: /search/movie/". $movie_title. "&success=review_added");
      exit;
    
    }
    
    
    public function getReviews($movie_title) {
        $geminiApi = $this->model('Api');
        $reviewsString = $geminiApi->getMovieOverview($movie_title);

        // Split reviews based on the format
        preg_match_all('/\*\*(.*?)\*\*\:\n\n\"(.*?)\"\n\n/', $reviewsString, $matches, PREG_SET_ORDER);

        // Format reviews
        $reviews = [];
        foreach ($matches as $match) {
            $reviews[] = [
                'rating' => 4, // Example rating; you need to extract or determine this
                'review' => $match[2],
                'username' => 'Anonymous' // Adjust based on your requirements
            ];
        }

        return $reviews;
    }

}