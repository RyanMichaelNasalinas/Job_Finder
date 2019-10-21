<?php include_once 'config/init.php'; ?> 
    
<?php
    $jobs = new Job;

      $job_id = isset($_GET['id']) ? $_GET['id'] : null;

     if(isset($_POST['submit'])) {
        //Pass the value on a array
        $data = [];
        $data['category_id'] = $_POST['category'];
        $data['company'] = $_POST['company'];
        $data['job_title'] = $_POST['job_title'];
        $data['description'] = $_POST['description'];
        $data['salary'] = $_POST['salary'];
        $data['location'] = $_POST['location'];
        $data['contact_user'] = $_POST['contact_user'];
        $data['contact_email'] = $_POST['contact_email'];
       
        if($jobs->update($job_id,$data)) {
            redirect('index.php','Your job has been updated','success');
        } else {
            redirect('index.php','Something went wrong ','error');
        }
    }

    $template = new Template('templates/job-edit.php');
    $template->jobs = $jobs->getJob($job_id); 
   //Get all categories
    $template->categories = $jobs->getCategories(); 
    
    echo $template;
?>




