<?php require_once 'pdo.php'; ?>
<?php
/*
 * User Class will make User CRUD 
 */
ini_set( 'date.timezone', 'America/New_York' );

class candidite 
{
    public $candidId;
    public $jobId;
    public $firstName;
    public $familyName;
    public $email;
    public $phone;
    public $cvUrl;
    public $coverUrl;
    public $created;
    public $active;
    public $location = './uploads/';



    public function createProcess($files){
        return $this->move($files);
    }

    //create new Candidate
    public function create(){
        $database = new database();
        $this->created = date("Y-m-d");
        $result = $database->query("INSERT INTO candidates (job_id,firstname,familyname,email,phone,cv_url,cover_url,created)
                                    VALUES(:job_id, :firstname, :familyname, :email, :phone, :cv_url, :cover_url, :created)");
        $database->bind(':job_id', $this->jobId, PDO::PARAM_INT);
        $database->bind(':firstname', $this->firstName, PDO::PARAM_STR);
        $database->bind(':familyname', $this->familyName, PDO::PARAM_STR);
        $database->bind(':email', $this->email, PDO::PARAM_STR);
        $database->bind(':phone', $this->phone, PDO::PARAM_STR);
        $database->bind(':cv_url', $this->cvUrl, PDO::PARAM_STR);
        $database->bind(':cover_url', $this->coverUrl, PDO::PARAM_STR);
        $database->bind(':created'  , $this->created);        
        $database->execute();
        return $database->lastInsertId()? TRUE : FALSE;
    }
    
    public function move($file){
        $this->cvUrl = $file['cv']['name'];
        if($file['letter']['error'] != 4){
            $this->coverUrl = $file['letter']['name'];
        }else{
            $this->coverUrl = "";
        }
        $move = move_uploaded_file($file['cv']['tmp_name'], $this->location.$this->firstName."_".$this->familyName."_CV".$this->cvUrl);
        $this->cvUrl = $this->firstName."_".$this->familyName."_CV".$this->cvUrl;
        if(isset($this->coverUrl) && !empty($this->coverUrl)){
           move_uploaded_file($file['letter']['tmp_name'], $this->location.$this->firstName."_".$this->familyName."_Letter".$this->coverUrl);
           $this->coverUrl = $this->firstName."_".$this->familyName."_Letter".$this->coverUrl;        }
        if($move){
            return $this->create();
        }else{
            return FALSE;  
        }       
    }
    public function fetchByJobId($id){
        $database = new Database();
        $database->query("select * from candidates Where job_id = :job_id");
        $database->bind(':job_id', $id, PDO::PARAM_INT);
        $database->execute();
        $rows = $database->fetchAll();                
        return $rows; 
    }
    
    
}