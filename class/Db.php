<?php
class Db
{
    public $conn, $tableName;
    function __construct($tableName)
    {
        $hostname = "localhost";
        $username = "wkk";
        $password = "asdfasdf";
        $database = "lists";
        $this->conn = mysqli_connect($hostname, $username, $password, $database);
        $this->tableName = $tableName;
    }
    function create(array $data): void
    {
        //INSERT INTO USERS () VALUES ();
        $key = "(" . join(",", array_keys($data)) . ")";
        $value = "(" . "'" . join("','", array_values($data)) . "'" . ")";
        $sql = "INSERT INTO $this->tableName $key VALUE $value";
        mysqli_query($this->conn, $sql);
    }
    function index(): array
    {
        //SELECT * FROM users ;
        $sql = "SELECT * FROM $this->tableName";
        $query = mysqli_query($this->conn, $sql);
        $rows = [];
        while ($row = mysqli_fetch_object($query)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function show(int $id): array
    {
        //SELECT * FROM users WHERE id=$id ;
        $sql = "SELECT * FROM $this->tableName WHERE id=$id";
        $query = mysqli_query($this->conn, $sql);
        $rows = [];
        while ($row = mysqli_fetch_object($query)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function delete(int $id): void
    {
        //SELECT * FROM USER WHERE id=$id;
        $sql = "DELETE FROM $this->tableName WHERE id=$id";
        mysqli_query($this->conn, $sql);
    }
}
