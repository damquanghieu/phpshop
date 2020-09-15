<?php
require_once "Database.php";

class BaseModel extends Database
{

    protected $connection;
    protected $lastInsertId;

    private function query($sql)
    {
        mysqli_query($this->connection, $sql);
    }

    public function getAll($table)
    {
        $sql = "SELECT * FROM ${table}";
        $result = mysqli_query($this->connect(), $sql);
        $array = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($array, $row);
        }
        // var_dump($ $test);
        // die();
        // var_dump($result);
        return $array;
    }
    public function insert($table, $data)
    {
      
        $column = implode(",", array_keys($data));
        $values = array_values($data);

        $newValues = array_map(function ($value) {
            return "'" . $value . "'";
        }, $values);

        $newValues = implode(',', $newValues);

        $sql = "INSERT INTO ${table}(${column}) VALUES(${newValues})";
        $result = mysqli_query($this->connect(), $sql);
        
        // $this->lastInsertId = $this->getConn();
        // var_dump(mysqli_insert_id($this->lastInsertId));
        // die;

        return $result;
    }
    public function insertOneToMany($table, $data)
    {
        foreach ($data as $key => $value) {

            $column = implode(",", array_keys($value));
           
            $values = array_values($value);
          
            // $newValues = array_map(function ($value) {
            //     return "'" . $value . "'";
            // }, $values);

             $newValues = implode($values);

            $sql = "INSERT INTO ${table}(${column},product_id) VALUES('${newValues}', 1)";
            $result = mysqli_query($this->connect(), $sql);
        } 
        return $result;

    }

    public function find($table, $id)
    {
        $sql = "SELECT * FROM ${table} WHERE id =${id} LIMIT 1";
        $result = mysqli_query($this->connect(), $sql);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }

    public function updates($data, $id)
    {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= $key . "=" . "'" . $value . "'" . ",";
        }
        $set = chop($set, ",");

        $sql = "UPDATE categories SET ${set} WHERE id = ${id}";
        $result = mysqli_query($this->connect(), $sql);
        return $result;
    }

}

// $test = new BaseModel();
// echo "<pre>";
// print_r($test->getAll("categories"));
