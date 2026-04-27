<?php
class Router
{
    protected $routes = [];
    public function registerRoute($method, $uri, $controllers)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controllers
        ];
    }
}
