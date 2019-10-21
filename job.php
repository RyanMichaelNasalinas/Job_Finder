<?php include_once 'config/init.php'; ?> 
    
<?php
    $jobs = new Job;

    $template = new Template('templates/job-single.php');
    //Check if isset category get request
    $job_id = isset($_GET['id']) ? $_GET['id'] : null;


    $template->jobs = $jobs->getJob($job_id); //Get all categories
    
    echo $template;
?>




