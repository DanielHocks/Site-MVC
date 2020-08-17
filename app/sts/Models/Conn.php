<?php


namespace App\sts\Models;

if (!defined('URL')):
    header("Location: http://localhost/celkeEp2-v2/");
endif;

class Conn{

    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "";
    private int    $port = 3306;
    private object $connect;

    protected function connect(){
        try {
             $this->connect = $this->connect = new \PDO($this->db . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
             return $this->connect;
            //$this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname, $this->user, $this->pass);
        }catch (\Exception $ex){
            die("Erro" . $ex);
        }
    }


}
