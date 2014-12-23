<?php
require_once 'includes/header.php';
require_once 'includes/candidateModel.php';
require_once 'includes/jobsModel.php';
$jobModel = new job();
$jobsSet = array_shift($jobModel->fetchById($_GET['job_id']));
if(isset($_POST['submit'])){
    // validations cv, firstname,familyname,mobile,email
    $errors = array();
    $flag = TRUE;
    if($_FILES['cv']['error'] == 4){
        $errors['cv'] = "* Your Resume is Rquired";
        $flag = FALSE;
    }    
    if(empty($_POST['firstname'])){
        $errors['firstname'] = "* First Name is Required";
        $flag = FALSE;
    }
    if(empty($_POST['familyname'])){
        $errors['familyname'] = "* Family Name is Required";
        $flag = FALSE;
    }
    if(empty($_POST['phone'])){
        $errors['phone'] = "* Phone is Required";
        $flag = FALSE;
    }
    if(empty($_POST['email'])){
        $errors['email'] = "* Email is Required";
        $flag = FALSE;
    }
    
    if($flag == TRUE){
        $candidMoel = new candidite();
        $candidMoel->jobId      = $_POST['job_id'];
        $candidMoel->firstName  = $_POST['firstname'];
        $candidMoel->familyName = $_POST['familyname'];
        $candidMoel->email      = $_POST['email'];
        $candidMoel->phone      = $_POST['phone'];
        $result = $candidMoel->createProcess($_FILES);        
        if($result){
            header("location:success.php");            
        }else{
            $errors['upload'] = "Error Happends please try again";
        }
    }
//echo '<pre>';
//print_r($_FILES);
//print_r($_POST);
//die;
    
}
?>
<!-- webSite Content Start-->
<div class="main-header"></div>
<div class="block">
    <div class="main-title bottom-space">
        <div class="txt-area">
            <p><span class="orange">Current Openings</span> / <span class="orange"><?php echo $jobsSet['job_title']; ?></span> / Apply</p>
        </div>
        <div class="bottom-space clear"></div>
    </div>
    <hr>
    <div class="bottom-space jobs-grid">       
        <div class="bottom-space"></div>
        <div class='bottom-space'>
            <h1 class="title"><?php echo $jobsSet['job_title']; ?></h1>
            <h3 class="orange"><?php echo $jobsSet['dept']." | ".$jobsSet['location']; ?></h3>
        </div>
        <div class="work bottom-space">
            <p>Thank you for considering a career at MarkaVIP. Please take a minute to fill out the following form.
                After you have completed your application a confirmation email will be sent to you.</p>
        </div>        
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']."?job_id=".$jobsSet['job_id']; ?>" method="POST" enctype="multipart/form-data">
    <div class="fileUpload">
                <?php if(isset($errors['cv'])){ echo "<p class='orange'>{$errors['cv']}</p>";} ?>
                <label class="upload-label">Resume<span class="dept">*</span></label>
                <div class="file_upload">
                    <input type="file" name="cv" id="file_upload" class="required-entry">
                </div>
                <label style="margin-left: 80px;" class="upload-label">Cover Letter</label>
                <div class="file_upload">
                    <input type="file" name="letter" id="file_upload">
                    <input type="hidden" name="job_id" value="<?php echo $jobsSet['job_id']  ?>">
                </div>
                <div class="bottom-space"></div>
     </div>
    <hr>    
    <div class="bottom-space"></div>
    <div class="work bottom-space">
        <h1>Personal Information</h1>
        <div class="bottom-space">
            <?php if(isset($errors['firstname'])){ echo "<p class='orange'>{$errors['firstname']}</p>";} ?>
            <?php if(isset($errors['familyname'])){ echo "<p class='orange'>{$errors['familyname']}</p>";} ?>  
            <?php if(isset($errors['email'])){ echo "<p class='orange'>{$errors['email']}</p>";} ?>
            <?php if(isset($errors['phone'])){ echo "<p class='orange'>{$errors['phone']}</p>";} ?>    
            <?php if(isset($errors['upload'])){ echo "<p class='orange'>{$errors['upload']}</p>";} ?>    
        </div>
    <div class="form-col">                                    
        <label class="required upload-label">First name<em class="orange">*</em></label>
            <div class="input-box">
                <input type="text" class="input-text required-entry plh txt-big" title="First Name"  name="firstname" onclick="return {placeholder:'First Name'};" id="firstname">
            </div>
    </div>
    <div class="form-col">            
            <label class="required upload-label">Family name<em class="orange">*</em></label>
            <div class="input-box">
                <input type="text" class="input-text required-entry plh txt-big" title="Family Name"  name="familyname" onclick="return {placeholder:'Family Name'};" id="familyname">                
            </div>
    </div>  
    <div class="form-col">
        <label class="required upload-label" style="padding-left:36px;">Email<em class="orange">*</em></label>
            <div class="input-box">
                <input type="email" class="input-text required-entry plh txt-big" title="Email"  name="email" onclick="return {placeholder:'Email'};" id="email">            
            </div>            
    </div>
    <div class="form-col">
        <label class="required upload-label" style="padding-left:36px;">Phone<em class="orange">*</em></label>
            <div class="input-box">
                <input type="text" class="input-text required-entry plh txt-big" title="Phone"  name="phone" onclick="return {placeholder:'Phone'};" id="phone">                
            </div>        
    </div>
    <div class="form-col"></div>
    <div class="form-col" style="float: right;width: 38%">
        <input class="submit-orange" type="submit" name="submit" value="SEND APPLICATION"/>
    </div>
<!--    <div class="btn-area">
        <button class="btn-area">SEND APPLICATION</button>
        <input class="btn-area" type="submit" name="submit" value="SEND APPLICATION"/>
   </div>-->
   <div class="clear"></div> 
   <div class="bottom-space"></div>
</div>
    <div class="bottom-space">        
    </div>
</div>
<div class="block">
    <div class="main-title bottom-space v-align">
        <p>If you don't see the position you're looking for, <a href='' class="orange">click here.</a></p>
    </div>
</div>
<!-- webSite Content End-->
<?php require_once 'includes/footer.php';