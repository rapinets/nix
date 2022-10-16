<?php


namespace app\core;


abstract class Model
{
    protected $id;

    public function getId(): int
    {
        return $this->id;
    }

    public static function getAll(): array
    {
        $db = new Db();
        return $db->query("SELECT * FROM `" . static::getTableName() . "`;");
    }

    public static function getById(int $id): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "SELECT * FROM `" . static::getTableName() . "` WHERE id=:id;",
            [':id' => $id]
        );
        return $entities ? $entities[0] : null;
    }

    abstract protected static function getTableName(): string;

//    protected $table_name;
//    protected $id_column;
//    protected $db;
//    protected $data = [];
//
//    public function getDb()
//    {
//        return $this->db = new Db();
//    }
//
//    public function all()
//    {
//        $sql = 'select * from ' . $this->table_name;
//        $this->data = $this->getDb()->query($sql);
//
//        return $this->data;
//    }
//
//
//    public function getPrimaryKeyName(): string
//    {
//        return $this->id_column;
//    }
//
//    public function getId()
//    {
//        return filter_input(INPUT_GET, 'id');
//    }
}