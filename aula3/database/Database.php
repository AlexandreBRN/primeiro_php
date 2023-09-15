<?php

Class Database
{
    private string $serverName;
    private string $userName;
    private string $password;
    private string $dbName;
    private mysqli $connection;

    public function __CONSTRUCT()
    {
        $this->serverName = "db";
        $this->userName = "root";
        $this->password = "1q2w3e4r5t";
        $this->dbName = "pw_exemple";
    }

    public function openConnection()
    {
        $this->connection = new mysqli(
            $this->serverName,
            $this->userName,
            $this->password,
            $this->dbName
        );

        if ($this->connection->connect_error){
            die("Conection failed: " . $this->connection->connect_error);
        }
    }

    public function closeConnection()
    {
        $this->connection->close();
    }

    public function executeSelect(string $sq1): array
    {
        $this->openConnection();
        $result = $this->connection->query($sq1);

        $arrayResult = [];
        while ($row = $result->fetch_assoc()) {
            array_push($arrayResult, $row);
        }
        $this->connection->close();
        return $arrayResult;
    }

    public function insert(string $sq1)
    {
        $this->openConnection();
        $result = $this->connection->query($sq1);
        $this->connection->close();
    }
}