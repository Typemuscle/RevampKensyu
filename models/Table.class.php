<?php 
namespace pokemon\models;

use pokemon\Bootstrap;

class Table extends PDODatabase
{
    private $db;
    private $tableName;

    protected function __construct()
    {
        $this->db = parent::__construct(Bootstrap::DB_HOST,Bootstrap::DB_PORT,Bootstrap::DB_USER,Bootstrap::DB_PASS,Bootstrap::DB_NAME,Bootstrap::DB_TYPE);
    }

    protected function setTable($tableName)
    {
        $this->tableName = "".$tableName."";
    }
    
    protected function getTable()
    {
        return $this->tableName;
    }
}
?>