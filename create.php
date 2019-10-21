<?php include_once 'config/init.php'; ?> 
    
<?php
    $jobs = new Job;

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
       
        if($jobs->create($data)) {
            redirect('index.php','Your job has been listed','success');
        } else {
            redirect('index.php','Something went wrong ','error');
        }
    }

    $template = new Template('templates/job-create.php');
   
    $template->categories = $jobs->getCategories(); //Get all categories
    
    echo $template;
?>




