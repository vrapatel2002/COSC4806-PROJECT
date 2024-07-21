<?php

class Secret extends Controller {

    public function index($param) {		
      $query_url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=".$_ENV['GEMINI_KEY'];

      $data = array(
        "contents" => array(
          array(
            "role" => "user",
            "parts" => array(
              "text"=>" Read this description and give one line of max 7 word to describe that movie".$param['Plot']

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
      if(curl_errno($ch)){
        echo 'Error:' . curl_error($ch);
      }
      
      echo "<pre>";
      echo $response;
      echo "</pre>";
      
      die;
    }

}