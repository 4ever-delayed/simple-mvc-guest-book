<?php

class Model
{
    protected $db;
    protected $table;

    public function __construct(){
        $this->db = Database::getInstance();
        $this->table = 'guest_book';

    }

}
