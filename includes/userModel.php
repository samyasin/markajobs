<?php require_once 'pdo.php'; ?>
<?php
/*
 * User Class will make User CRUD 
 */
class user 
{
    public $userId;
    public $username;
    public $password;
    public $firstName;
    public $lastName;
    
    // this method will fetch all users from DB
    public static function fetchAll(){
        $database = new Database();
        $statement = $database->query("select * from users");
        $database->execute();
        $rows = $database->fetchAll();                
        return $rows;        
    }
    
    // this method will fetch user by id 
    public static function fetchById($id){
        $database = new database();
        $result   = $database->query("SELECT * FROM users WHERE user_id = $id"); 
        $userSet  = $database->fetchArray($result);
        if(isset($userSet)){
            return $userSet;
        }else{
            return FALSE;
        }
    }
    
    //create new user
    public function create(){
        $database = new database();
        $result = $database->query("INSERT INTO users (username,password,first_name,last_name)
                                    VALUES('$database->filter($this->username)',
                                           '$database->filter($this->password)',
                                           '$database->filter($this->firstName)',
                                           '$database->filter($this->lastName)')
                                  ");
        return (($database->affectedRows() !=0) ?  TRUE : FALSE);
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
        $sql = "DELETE FROM users WHERE user_id = $id";
        $database->query($sql);
        return (($database->affectedRows() !=0) ?  TRUE : FALSE);
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


?>