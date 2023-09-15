<?php

namespace imp;
use DbConnect;
use serviceDao;
use Services;


class ServiceDaoIMP implements serviceDao
{


    private $conn;

    public function getConn(): \PDO
    {
        return $this->conn;
    }

    public function setConn(?PDO $conn): void
    {
        $this->conn = $conn;
    }

    public function __construct()
    {
        $this->conn = DbConnect::getInstance()->getPdo();
    }

    function getAllService()
    {
        $query = "SELECT * FROM serv";
        return $this->conn->query($query);
    }

    function saveService(Services $Service)
    {
        // TODO: Implement saveService() method.
    }
}