<?php

class Search extends Controller {

    public function index(){
        $this->view('search/index');
    }
    
    public function movie($param=''){
        if($_REQUEST['search']){
            $searchTerm = $_REQUEST['search'];
            header('Location: /search/movie/' . $searchTerm);
            die;
        }

        $omdbApi = $this->model('Api');
        $movieDetails = $omdbApi->getMovieDetails($param);

        $geminiApi = $this->model('Api');
        $describeMovie = $geminiApi->getMovieOverview($movieDetails['Title']);
        
        $this->view('search/movie',['name' => $movieDetails, 'describe' => $describeMovie]);
    }

    public function getReviews($movie_Rating,$movie_title){
        $geminiApi = $this->model('Api');
        $describeMovie = $geminiApi->getMovieOverview($movie_Rating,$movie_title);
    }
}
