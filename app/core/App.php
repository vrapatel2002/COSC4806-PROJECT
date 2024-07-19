<?php

class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $special_url = ['apply'];
    protected $params = [];

    public function __construct() {
        
        $url = $this->parseUrl();

        if (isset($url[1]) && file_exists('app/controllers/' . $url[1] . '.php')) {
            $this->controller = $url[1];
            $_SESSION['controller'] = $this->controller;

            if (in_array($this->controller, $this->special_url)) { 
                $this->method = 'index';
            }
            unset($url[1]);
        } else {
            // Default to home if controller not found
            header('Location: /home');
            die;
        }

        // Require and instantiate the controller
        require_once 'app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Check if method exists and set it
        if (isset($url[2]) && method_exists($this->controller, $url[2])) {
            $this->method = $url[2];
            $_SESSION['method'] = $this->method;
            unset($url[2]);
        }

        // Rebase parameters and call the method
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);		
    }

    public function parseUrl() {
        $u = $_SERVER['REQUEST_URI'];
        $url = explode('/', filter_var(rtrim($u, '/'), FILTER_SANITIZE_URL));

        unset($url[0]); // Remove the first element (empty)
        return $url;
    }
}
