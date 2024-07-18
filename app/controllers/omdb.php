<?php

class omdb extends Controller{

  public function index(){
    
    $query_url = "http://www.omdbapi.com/?i=tt3896198&apikey=". $_ENV['OMDB_KEY'] ."&t=the+matrix&y=1999";

    $json = file_get_contents($query_url);
    $phpObj = json_decode($json);
    $movie =  (array) $phpObj;

    echo "<pre>";
    print_r ($movie);
    die;

  }
  
}