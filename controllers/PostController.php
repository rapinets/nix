<?php


namespace app\controllers;


use app\core\Controller;

class PostController extends Controller
{
    public function index()
    {
        $model = $this->getModel('Post');
        $posts = $model->all();
        return $this->render('posts', $posts);
    }

}