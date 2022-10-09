<?php


namespace app\models;


use app\StorageClass;

class Post
{
    protected array $posts;

    public function __construct()
    {
        $this->posts = (new StorageClass())->all();
    }

    public function all()
    {
        return $this->posts;
    }

}