<?php
// Simples roteador embutido
class Router {
    private $routes = [];

    public function get($uri, $action) {
        $this->addRoute('GET', $uri, $action);
    }

    public function post($uri, $action) {
        $this->addRoute('POST', $uri, $action);
    }

    private function addRoute($method, $uri, $action) {
        $uri = '/' . trim($uri, '/');
        $this->routes[] = ['method' => $method, 'uri' => $uri, 'action' => $action];
    }

    public function run() {
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $base = '/sistema-login-2025';
        $currentUri = '/' . trim(str_replace($base, '', $requestUri), '/');
        $currentUri = $currentUri === '' ? '/' : $currentUri;

        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['uri'] === $currentUri && $route['method'] === $method) {
                return is_callable($route['action'])
                    ? call_user_func($route['action'])
                    : require $route['action'];
            }
        }

        http_response_code(404);
        echo "Página não encontrada.";
    }
}
