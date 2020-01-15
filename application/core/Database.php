<?php
/*
 * Singleton
 * */
class Database
{

    private $_host = 'localhost';
    private $_database = 'test';
    private $_username = 'test';
    private $_password = 'Hq3bCIUsMxSPNRCD';
    private static $_instance;
    private $_connection;
    public $result = '';
    public $record = '';

    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username,
            $this->_password, $this->_database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Не удалось подключиться к БД: " . mysql_connect_error(),
                E_USER_ERROR);
        }
        //set encoding
        if (!$this->_connection->set_charset("utf8")) {
            die("Ошибка при загрузке набора символов utf8: " . $this->_connection->error);
        }
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }


    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }

    public function __destruct()
    {
        $this->_connection->close();
    }

    public function query($query)
    {
        $this->result = mysqli_query($this->_connection, $query);
        return $this->result;
    }

    public function next()
    {
        if ($this->record = mysqli_fetch_array($this->result, MYSQLI_ASSOC)) {
            return true;
        } else {
            return false;
        }
    }

    function getValue($val)
    {
        if (isset ($this->record[$val])) {
            return $this->record[$val];
        } else {
            return false;
        }
    }




}
