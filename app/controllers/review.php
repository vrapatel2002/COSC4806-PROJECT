<?php

class Review extends Controller{

    public function addReview(){
      
      $rating = $_POST['rating'];
      $review = $_POST['review'];
      $movie_title = $_POST['movie_title'];
    
      if (empty($rating) || empty($review) || empty($movie_title)) {
          header("Location: /search/movie/". $movie_title. "all files are required");
          return;
      }
    
      $movie = $this->model('Movie'); 
      $user_data = $movie->saveReview($movie_title,$rating, $review);
      
      header("Location: /search/movie/". $movie_title. "&success=review_added");
      exit;
    
    }
    
}