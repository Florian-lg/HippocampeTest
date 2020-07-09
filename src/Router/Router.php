<?php

namespace App\Router;

class Router 
{
    private $url;

    private $routes = [];

    private $namedRoute = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function get($path, $callable, $name = null): Route
    {
        return $this->add($path, $callable, $name, 'GET');
    }

    public function post($path, $callable, $name = null): Route
    {
        return $this->add($path, $callable, $name, 'POST');
    }

    private function add($path, $callable, $name, $method): Route
    {
        $route = new Route($path, $callable);
        $this->routes[$method][] = $route;

        if ($name) {
            $this->namedRoute[$name] = $route;
        }

        return $route;
    }

    public function run()
    {
        if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
            throw new RouterException('No routes matches');
        }
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->match($this->url)) {
                return $route->call();
            }
        }
        throw new RouterException('No matching routes');
    }

    public function url($name, $params = [])
    {
        if (!isset($this->namedRoute[$name])) {
            throw new RouterException('No route matches this name');
        }

        return $this->namedRoute[$name]->getUrl($params);
    }
}