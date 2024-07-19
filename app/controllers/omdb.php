<?php

class omdb extends Controller{

  public function index(){

    $query_url = "http://www.omdbapi.com/?&apikey=". $_ENV['OMDB_KEY'] ."&t=". $title;

    $json = file_get_contents($query_url);
    $phpObj = json_decode($json);
    $movie =  (array) $phpObj;

    echo "<pre>";
    print_r ($movie);
    die;

  }

  // public function index(){
    
  //   $query_url = "http://www.omdbapi.com/?i=tt3896198&apikey=". $_ENV['OMDB_KEY'] ."&t=barbie ";

  //   $json = file_get_contents($query_url);
  //   $phpObj = json_decode($json);
  //   $movie =  (array) $phpObj;

  //   echo "<pre>";
  //   print_r ($movie);
  //   die;

  // }
  
}