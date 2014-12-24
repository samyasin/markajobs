<?php
require_once 'includes/header.php';
require_once 'includes/jobsModel.php';
$jobModel = new job();
$jobsSet = array_shift($jobModel->fetchById($_GET['id']));
?>
<!-- webSite Content Start-->
<div class="main-header"></div>
<div class="block">
    <div class="main-title bottom-space">
        <div class="txt-area">
            <p><span class="orange">Current Openings</span> / <?php echo $jobsSet['job_title']; ?></p>
        </div>
        <div class="btn-area">
            <a target="_blank" href="job_apply.php?job_id=<?php echo $_GET['id']; ?>">Apply Now</a>
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
            <p><?php echo $jobsSet['job_desc']; ?></p>
        </div>        
    </div>
    <div class="work bottom-space">
        <h1 class="orange">Job Responsibilities</h1>
            <p><?php echo $jobsSet['job_respo']; ?></p>
    </div>
    <div class="bottom-space"></div>
    <div class="work bottom-space">
        <h1 class="orange">Job Requirements</h1>
            <p><?php echo $jobsSet['job_req']; ?></p>
    </div>
    <div class="bottom-space padding-space clear"></div>
</div>
<div class="block">
    <div class="main-title bottom-space v-align">
        <p style="padding-bottom: 70px;">If you don't see the position you're looking for, <a href='' class="orange">click here.</a></p>
    </div>
</div>
 <!-- webSite Content End-->
 <?php require_once 'includes/footer.php'; ?>