<?php
require_once 'includes/header.php';
require_once 'includes/jobsModel.php';
$jobModel = new job();
$jobsSet = $jobModel->fetchAll();
?>
<!-- webSite Content Start-->
<div class="main-header"></div>
<div class="block">
    <div class="main-title bottom-space">
        <h1>MarkaVIP Open Positions</h1>
        <p>Our people are our passion. We seek talented and innovative thinkers in a company that we love </p>
        <p class="orange">You'll will be challenged. You'll will be inspired. And you'll be proud.</p>
    </div>  
    <div class="main-title bottom-space">
        <p><b>Discover how can you make a difference because whatever your job is here, you'll be part of something big<b></p>
    </div>
    <hr>
    <div class="bottom-space"></div>
    <div class="bottom-space jobs-grid">
        <?php
        if (isset($jobsSet) && !empty($jobsSet)) {                        
                echo "<div class='bottom-space'>";                                
                echo "<table class='table'>";
                echo "<tr class='orange'><td>Title</td><td>Department</td><td>Country</td><td>Date</td></tr>";                                    
                foreach ($jobsSet as $row) {                   
                    echo "<tr>";
                    echo "<td><a href='job.php?id={$row['job_id']}'>{$row['job_title']}</a></td>";
                    echo "<td>{$row['location']}</td>";
                    echo "<td>{$row['dept']}</td>";
                    echo "<td>".date("M d", strtotime($row['created']))."</td></tr>";
                }
                echo "</table></div>";
            }        
        ?>
            <div class="bottom-space padding-space"></div>

    </div>    
</div>

<div class="block">
    <div class="main-title bottom-space v-align">
        <p style="padding-bottom: 70px;">If you don't see the position you're looking for, <a href='apply.php' class="orange">click here.</a></p>
    </div>
</div>
<!-- webSite Content End-->
<?php require_once 'includes/footer.php'; ?>