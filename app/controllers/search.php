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
        
        $plot = $movieDetails['Plot'];

        $geminiApi = $this->model('Api');
        $describeMovie = $geminiApi->getMovieReviews($plot);
        
        $this->view('search/movie',['name' => $movieDetails, 'describe' => $describeMovie]);
    }
    
}
