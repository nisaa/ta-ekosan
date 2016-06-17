<?php
namespace App;

use PDO;

class Connection
{
    private $driver = DB_DRIVER;
    private $host = DB_HOST;
    private $database = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;

    public $db = null;

    public function __construct()
    {
        $dsn = $this->driver . ':dbname=' . $this->database . ';host=' . $this->host;

        $this->db = new PDO($dsn, $this->username, $this->password);
    }
}
