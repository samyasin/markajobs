<?php

require_once ('../includes/jobsModel.php');
$jobModel = new job();
$jobModel->delete($_GET['id']);
header("location:vacancy.php");