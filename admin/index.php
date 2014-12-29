<?php
	require_once('partials/head.php');
	require_once('partials/header.php');
	require_once('partials/sidebar.php');
        require_once ('../includes/jobsModel.php');
?>
<?php
$jobModel = new job();
if(isset($_POST['submit'])){    
    $jobModel->location = $_POST['location'] ? $_POST['location'] : "";
    $jobModel->jobTitle = $_POST['title'] ? $_POST['title'] : "";
    $jobModel->dept     = $_POST['dept'] ? $_POST['dept'] : "";
    $jobModel->jobDesc  = $_POST['dec'] ? $_POST['dec'] : "";
    $jobModel->jobReq   = $_POST['requir'] ? $_POST['requir'] : "";
    $jobModel->jobRespo = $_POST['response'] ? $_POST['response'] : "";
    $result = $jobModel->create();
    if(!$result){
        $erorrs = "Error Happends";
    }   
}
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">                        
                        Add Vacancy
                        <?php if(isset($errors)){echo "<p>{$errors}</p>";} ?>
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                    </header>                     
                    <div class="panel-body">    
                        <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']."?v=true"; ?>">  
                            <div class="form-group">
                                <div class="col-sm-12">                       
                                    <label class="control-label">Job Title</label>      
                                    <input type="text" name="title" class="form-control input-large">
                                </div> 
                                <div class="col-sm-6">                       
                                    <label class="col-sm-1 control-label">Location</label>      
                                    <select name="location" id="brand" class="form-control m-bot15" required>
                                        <option value="Amman, Jordan">Amman, Jordan</option>
                                        <option value="Dubai, United Arab Emirates">Dubai, United Arab Emirates</option>
                                        <option vlaue="Beirut, Lebanon">Beirut, Lebanon</option>
                                        <option vlaue=" Jeddah, Saudi Arabia"> Jeddah, Saudi Arabia</option>                                                                  
                                    </select>   
                                </div> 
                                <div class="col-sm-6">                       
                                    <label class="col-sm-1 control-label">Department</label>      
                                    <select name="dept" id="brand" class="form-control m-bot15" required>
                                        <option value="IT">IT</option>
                                        <option value="HR">HR</option>
                                        <option value="Supply Chain">Supply Chain</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Customer Support">Customer Support</option>
                                        <option value="Call Center">Call Center</option>                                        
                                    </select>   
                                </div> 
                                <div class="col-sm-12">                       
                                    <label class="control-label">Job Description</label>      
                                    <textarea class="form-control t-text-area" name="dec"></textarea>   
                                </div> 
                                <div class="col-sm-12">                       
                                    <label class="control-label">Job Responsibilities</label>      
                                    <textarea class="form-control t-text-area" name="response"></textarea>   
                                </div> 
                                <div class="col-sm-12">                       
                                    <label class="control-label">Job Requirements</label>      
                                    <textarea class="form-control t-text-area" name="requir"></textarea>   
                                </div> 
                            </div>                           
                            <div class="form-group">          
                                <div class="col-sm-2">   
                                    <label class="col-sm-5 control-label">&nbsp;</label>  
                                    <input type="submit" class="btn  btn-primary form-control" name="submit" value="Save"/>                                       
                                </div>                                  
                            </div>
                        </form>               
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Report
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-right" id="nestable_list_menu">                                  
                                </div>
                            </div>                                   
                        </div>
                        <table class="table  table-hover general-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Department</th>
                                    <th>Country</th>
                                    <th>Created</th>
                                    <th>Delete</th>                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $jobsSet = $jobModel->fetchAll();
                                if (isset($jobsSet) && !empty($jobsSet)) {
                                    $output = "";
                                    foreach ($jobsSet as $job) {
                                        $output .= "<tr><td>{$job['job_title']}</td>";
                                        $output .= "<td>{$job['dept']}</td>";
                                        $output .= "<td>{$job['location']}</td>";
                                        $output .= "<td>{$job['created']}</td>";
                                        $output .= "<td><a style='color:#fa8564' href='delete_job.php?id={$job['job_id']}'>Delete</a></td></tr>";                                        
                                    }
                                    echo $output;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-md-12">
            <div class="pagination-container">

            </div>                          
        </div>

    </section>
</section>

<!--Core js-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<?php require_once('partials/footer.php'); ?>