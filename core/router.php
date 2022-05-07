<?php

class Router {

    protected $routes = [];

    public function define($routes) {
        $this->routes = $routes;
    }

    public function direct($uri) {
        if(key_exists($uri, $this->routes))
            return $this->routes[$uri];
        
        throw new Exception('No Route is defined for this URI');
    }

    public static function load($file) {
        
        $router = new static;
        
        require $file;

        return $router;
    }
}