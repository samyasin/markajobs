<?php

require_once 'config.php';
/*
 * PDO Database Class
 *
 * Dealing with Database according to PDO 
 * 
 * @copyright  Copyright (c) 2014 Salameh Yssin 
 * @version    Release: 1.0
 * @author     Salameh Yasin <salameh.yasin@yahoo.com>
 */

class Database {

    private $host = DBSERVER;
    private $user = DBUSER;
    private $pass = DBPASS;
    private $dbname = DBNAME;
    private $stmt;

    public function __construct() {
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        // Create a new PDO instanace
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        // Catch any errors
        catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }
    
    /*
     *  prepare our sql method will send these values for it 
     *  $param : record name  ex: 'name'
     *  $value : record value want to search on it  ex: 'salameh Yasin'
     *  $type  : parameter datatype ex: int  
     */
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    
    // excute your query 
    public function execute(){        
        return $this->stmt->execute();
    }
    
    // fetch all as associative array 
    public function fetchAll(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //fetch single recore from DB
    public function fetchOne(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    //return numeber of affected row 
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    
    //return last inserted ID as string
    public function lastInsertId(){
       return $this->dbh->lastInsertId();
    }    

}