<?php

class Movie{

    public function saveReview($movie_title, $rating, $review) {
        $db = db_connect();

        if($_SESSION['username']){
            $username = $_SESSION['username'];
             $statement = $db->prepare("INSERT INTO Rating_Review (movie_title, rating, review, created_at) VALUES (:movie_title, :rating, :review, NOW())");
        }
        
        $statement = $db->prepare("INSERT INTO Rating_Review (movie_title, rating, review, created_at) VALUES (:movie_title, :rating, :review, NOW())");
        $statement->bindParam(':movie_title', $movie_title);
        $statement->bindParam(':rating', $rating);
        $statement->bindParam(':review', $review);
        // $statement->bindParam(':user_id', $user_id);
        $statement->execute();

      return $db->lastInsertId();
      
    }

    public function getReviews($movie_title) {
      $db = db_connect();
      $statement = $db->prepare("SELECT * FROM Rating_Review WHERE movie_title = :movie_title");
      $statement->bindParam(':movie_title', $movie_title);
      $statement->execute();
      $data = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $data;
    }
  
}