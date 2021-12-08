<?php


class Controler
{

    // props
    private $server = 'localhost';
    private $username = 'root';
    private $password;
    private $dbname = 'final_project';


    // constructor
    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        } catch (Exception $e) {
            echo "Something's gone wrong " . $e->getMessage();
        }
    }
}
