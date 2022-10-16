<?php


namespace app\core;


interface DbModelInterface
{
    public function getPrimaryKeyName(): string;

    public function getId();

}