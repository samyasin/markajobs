<?php require_once 'pdo.php'; ?>
<?php
/*
 * User Class will make job CRUD 
 */
ini_set( 'date.timezone', 'America/New_York' );
class job 
{
    public $jobId;
    public $jobTitle;
    public $location;
    public $dept;
    public $jobDesc;
    public $jobReq;
    public $jobRespo;
    public $created;
    public $active;
    
    // this method will fetch all open Vacancies from DB
    public static function fetchAll(){
        $database = new Database();
        $database->query("select * from jobs Where active = :active");
        $database->bind(':active', 1, PDO::PARAM_INT);
        $database->execute();
        $rows = $database->fetchAll();                
        return $rows;        
    }

    public static function fetchAllDept(){
        $database = new Database();
        $database->query("SELECT DISTINCT dept FROM jobs WHERE active = :active");
        $database->bind(':active', 1, PDO::PARAM_INT);
        $database->execute();
        $rows = $database->fetchAll();                
        return $rows;        
    }   
    
    public static function fetchByDept($dept){
        $database = new Database();
        $database->query("select * from jobs Where dept = :dept");
        $database->bind(':dept', $dept, PDO::PARAM_STR);
        $database->execute();
        $rows = $database->fetchAll();                
        return $rows;        
    }
    
    // this method will fetch user by id 
    public static function fetchById($id){
        $database = new Database();
        $database->query("select * from jobs Where job_id = :job_id");
        $database->bind(':job_id', $id, PDO::PARAM_INT);
        $database->execute();
        $rows = $database->fetchAll();                
        return $rows; 
    }
    
    //create new job
    public function create(){
        $database = new database();
        $this->created = date("Y-m-d");
        $database->query("INSERT INTO jobs (job_title,location, dept, job_desc, job_respo, job_req, created)"
                        . " values(:job_title, :location, :dept, :job_desc, :job_respo, :job_req, :created)");        
        $database->bind(':job_title', $this->jobTitle, PDO::PARAM_STR);
        $database->bind(':location', $this->location , PDO::PARAM_STR);
        $database->bind(':dept', $this->dept , PDO::PARAM_STR);
        $database->bind(':job_desc' , $this->jobDesc , PDO::PARAM_STR);
        $database->bind(':job_respo', $this->jobRespo, PDO::PARAM_STR);
        $database->bind(':job_req'  , $this->jobReq  , PDO::PARAM_STR);
        $database->bind(':created'  , $this->created);       
        $database->execute();
        $database->lastInsertId()? TRUE : FALSE;
    }
    
    // update user method
    public function update($id){
        $database = new database();
        //echo '<pre>';print_r(get_class_methods($database));die;
        $sql = "UPDATE users SET
                username      = '{$database->filter($this->username)}',
                password      = '{$database->filter($this->password)}',
                first_name    = '{$database->filter($this->firstName)}',
                last_name     = '{$database->filter($this->lastName)}'
                WHERE user_id = {$database->filter($id)}";        
        $result = $database->query($sql);
        return (($database->affectedRows() !=0) ?  TRUE : FALSE);
        
    }
    
    // Delete User 
    public function delete($id){
        $database = new database();
        $database->query("update jobs set active = 0 where job_id = :jobid");
        $database->bind("jobid", $id);
        $database->execute();
        return $database->rowCount() == 0 ? FALSE : TRUE;
    }
    
    // Authintacete Will check if the user exist or not
    public function Auth($username= '' , $password=''){        
        $database = new database();
        $sql = "SELECT user_id FROM users WHERE 
                username = :username AND password = :password ";                
        $result = $database->query($sql);        
        $database->bind(':username', $username, PDO::PARAM_STR);
        $database->bind(':password', $password, PDO::PARAM_STR);
        $database->execute();
        $userSet = $database->fetchOne();        
        if(isset($userSet['user_id'])){
            return $userSet['user_id'];
        }else{
            return FALSE;
        }        
    }
}