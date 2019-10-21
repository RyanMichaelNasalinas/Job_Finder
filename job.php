<?php 
    include_once 'config/init.php'; 
    
    $jobs = new Job;

    if(isset($_POST['del_id'])) {
        $del_id = $_POST['del_id'];

        if($jobs->delete($del_id)) {
            redirect("index.php","Job Deleted","success");
        } else {
            redirect("index.php","Job Not Delete","danger");
        }
    }

    $template = new Template('templates/job-single.php');
    //Check if isset category get request
    $job_id = isset($_GET['id']) ? $_GET['id'] : null;

    //Get all Jobs
    $template->jobs = $jobs->getJob($job_id); 
    
    echo $template;
?>




