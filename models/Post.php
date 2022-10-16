<?php


namespace app\models;

use app\core\Model;

class Post extends Model
{
    public static function getTableName(): string
    {
        return 'posts';
    }

    /*public function __construct()
    {
        $this->table_name = "posts";
        $this->id_column = "id";
    }*/
}