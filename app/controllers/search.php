class Searches extends Controller {

  public function index(){
    $this->view('search/index');
  
    public function search($para =''){
      if($_REQUEST['movie']){
        $searchterm = $_REQUEST['movie'];
        header('Location: /search/results?movie=' . $searchterm);
        die;
      }
    echo $para;
    }
  
  }
}