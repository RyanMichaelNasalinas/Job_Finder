<?php include "inc/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?= $jobs->job_title; ?></h2>
            <h5><?= $jobs->location; ?></h5>
            <small>Posted By: <?= $jobs->contact_user;?></small>
            <hr>
            <p class="lead"><b>Job Description:</b><br>
            <?= $jobs->description; ?></p>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item">Company: <?= $jobs->company; ?></li>
                    <li class="list-group-item">Salary: <?= $jobs->salary; ?></li>
                    <li class="list-group-item">Contact Email: <?= $jobs->contact_email; ?></li>
                </ul>
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col-md-12">
                <a href="index.php">Go Back</a>
            </div>
        </div> 
</div>


<?php include "inc/footer.php"; ?>

