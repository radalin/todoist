<?php

namespace todoist\Services;


use Psr\Container\ContainerInterface;

class Db
{
    /**
     * @var \PDO
     */
    protected $conn = null;

    public function __construct($pdo, $initSqlContent)
    {
        $this->conn = $pdo;
        $this->conn->query($initSqlContent);
    }

    /**
     * @return \PDO
     */
    public function conn()
    {
        return $this->conn;
    }
}