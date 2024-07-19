<?php

class API {

    public function __construct() {
        // $this->omdbKey = $_ENV['omdb_key'];
        // $this->geminiKey = $_ENV['gemini_key'];
    }

    public function getMovieDetails($title) {
        $query_url = "http://www.omdbapi.com/?apikey=". $_ENV['OMDB_KEY']."&t=". $title;

        $json = file_get_contents($query_url);
        $phpObj = json_decode($json);
        $movie =  (array) $phpObj;

        // Return the result as an associative array
        return $movie;
    }

    // Add more methods for Gemini API or other APIs as needed

}
