<?php


namespace app\controllers;


use app\core\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function index()
    {
       /* $model = $this->getModel('Post');
        $posts = $model->all();*/
        $posts = Post::getAll();
        return $this->render('posts', $posts);
    }

}