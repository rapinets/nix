<?php


namespace app\core;


class Controller
{
    public string $layout = 'main';

    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function getModel($name)
    {
        $name = 'app\\models\\' . ucfirst($name);
        $model = new $name();
        return $model;
    }
}