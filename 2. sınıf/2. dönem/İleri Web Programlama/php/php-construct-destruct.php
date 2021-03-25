<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class DB {
    
    private $db;

    // kurucu metod
    public function __construct($host, $kadi, $sifre = 'root')
    {
        $this->db = new PDO('mysql:host=' . $host, $kadi, $sifre);
    }

    public function getData()
    {
        return 'dbden gelen data' . PHP_EOL;
    }

    // yıkıcı metod
    public function __destruct()
    {
        $this->db = null;
    }

}

$db = new DB('localhost', 'root');
echo $db->getData();

?>