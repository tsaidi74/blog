<?php
abstract class Connect
{
    private $db;
    protected function getDb()
    {
    if($this->db === null){
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=blog;charset=utf8', 'root', '');
        $this->db = $bdd;
        }
    return $this->db;
    }
}