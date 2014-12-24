<?php
	require_once('partials/head.php');
	require_once('partials/header.php');
	require_once('partials/sidebar.php');
        require_once ('../includes/jobsModel.php');
        require_once ('../includes/candidateModel.php');
?>
<?php
$jobModel = new job();
$jobsSet = $jobModel->fetchAll();
if(isset($_POST['submit'])){     
    $job_id = $_POST['job'];
    if(!empty($job_id)){
        $applianModel = new candidite();
        $applianSet   = $applianModel->fetchByJobId($job_id);
    }       
}
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">                        
                        Active Vacancies                        
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                    </header>                     
                    <div class="panel-body">    
                        <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']."?a=true"; ?>">  
                            <div class="form-group">
                                <div class="col-sm-12">                       
                                    <label class="control-label">Job Name</label>                                          
                                    <select name="job" class="form-control m-bot15" required>
                                        <option>Select Job..</option>
                                        <?php
                                        if(isset($jobsSet) && !empty($jobsSet)){
                                            foreach ($jobsSet as $job){
                                                echo "<option value='{$job['job_id']}'>{$job['job_title']}</option>";
                                            }                                            
                                        }
                                        ?>
                                    </select>
                                </div>                          
                            </div>                           
                            <div class="form-group">          
                                <div class="col-sm-2">   
                                    <label class="col-sm-5 control-label">&nbsp;</label>  
                                    <input type="submit" class="btn  btn-primary form-control" name="submit" value="Seach"/>                                       
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
                        Appliances
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
                                    <th>First Name</th>
                                    <th>Family Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Resume</th>                                   
                                    <th>Cover Letter</th>                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php                                
                                if (isset($applianSet) && !empty($applianSet)) {
                                    $output = "";
                                    foreach ($applianSet as $applian) {
                                        $output .= "<tr><td>{$applian['firstname']}</td>";
                                        $output .= "<td>{$applian['familyname']}</td>";
                                        $output .= "<td>{$applian['email']}</td>";
                                        $output .= "<td>{$applian['phone']}</td>";
                                        $output .= "<td><a href='../uploads/{$applian['cv_url']}' target='_blank'>View</a></td>";
                                        if(empty($applian['cover_url'])){
                                            $output .= "<td>NA</td>";
                                        }else{
                                            $output .= "<td><a href='../uploads/{$applian['cover_url']}' target='_blank'>View</a></td>";
                                        }                                        
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
<script src="js/lib/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<?php require_once('partials/footer.php'); ?>