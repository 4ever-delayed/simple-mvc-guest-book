<?php

class Model
{
    protected $db;
    protected $table;

    function __construct(){
        $this->db = Database::getInstance();
        $this->table = 'guest_book';

    }

}