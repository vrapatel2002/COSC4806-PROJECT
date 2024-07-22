<?php

class API {

    public function __construct() {

    }

    public function getMovieDetails($title) {
        $query_url = "http://www.omdbapi.com/?apikey=". $_ENV['OMDB_KEY']."&t=". $title;

        $json = file_get_contents($query_url);
        $phpObj = json_decode($json);
        $movie =  (array) $phpObj;

        // Return the result as an associative array
        return $movie;
    }

    public function getMovieOverview($param) {
        $query_url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=".$_ENV['GEMINI_KEY'];

          $data = array(
            "contents" => array(
              array(
                "role" => "user",
                "parts" => array(
                  "text"=> " Read this description and give one line of max 7 word to describe that movie".$param

                )
              )
            )
          );
        
          $json = json_encode($data);
          $ch = curl_init($query_url);
          curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
          curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          $response = curl_exec($ch);

          $data = json_decode($response, true);


          $text = $data['candidates'][0]['content']['parts'][0]['text'];

        return $text;

}

  public function getMovieReview($review,$title) {
          $query_url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=".$_ENV['GEMINI_KEY'];

            $data = array(
              "contents" => array(
                array(
                  "role" => "user",
                  "parts" => array(
                    "text"=> " Give me 4 review for".$title."has got".$review ."out of 5 star"

                  )
                )
              )
            );

            $json = json_encode($data);
            $ch = curl_init($query_url);
            curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);

            $data = json_decode($response, true);


            $text = $data['candidates'][0]['content']['parts'][0]['text'];

          return $text;

  }

}
