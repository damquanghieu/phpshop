<?php

class Database
{
    const HOST = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DB_NAME = "phpshop";

    private $conn;
    // public function __construct()
    // {
    //     $this->connect();
    // }
    public function getConn()
    {
        return $this->conn;
    }

    public function connect()
    {
        $this->conn = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);
        mysqli_set_charset($this->conn, "utf-8");
        // echo "<pre>";
        // print_r( $this->conn);
        // die();
        if (mysqli_connect_errno() == 0) {
            return $this->conn;
            var_dump($this->conn);
            die();
        } else {
            echo "Connection to database err!";
        }
    }

}
//$test = new Database();
// echo "<pre>";
// print_r($test->connect());
