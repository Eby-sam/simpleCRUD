<?php


final class DbConnect
{
    private static  $instance = null;
    private ?PDO $pdo;

    public function __construct()
    {
        try {

         $this->pdo= new PDO(Config::DSN, Config::DB_USERNAME, Config::DB_PASSWORD);
         $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
    }

    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            try {
              self::$instance = new DbConnect();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }

    public function getPdo()
    {
        return $this->pdo;
    }





}