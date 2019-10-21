<?php include_once 'config/init.php'; ?> 
    
<?php
    $jobs = new Job;

    $template = new Template('templates/frontpage.php');
    //Check if isset category get request
    $category = isset($_GET['category']) ? $_GET['category'] : null;

    if($category) {
        $template->jobs = $jobs->getByCategory($category);
        $template->title = 'Jobs In '. $jobs->getCategory($category)->name;
    } else {
        $template->title = 'Latest Jobs';
        $template->jobs = $jobs->getAllJobs(); //Get all jobs from the database
    }
    //Get all categories
    $template->categories = $jobs->getCategories(); 
    
    echo $template;
?>




