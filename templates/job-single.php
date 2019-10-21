<?php include "inc/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?= $jobs->job_title; ?></h2>
            <h5><?= $jobs->location; ?></h5>
            <small>Posted By: <?= $jobs->contact_user;?> on <?= substr($jobs->post_date,0,10); ?></small>
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
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="index.php">Go Back</a>
            </div>
        </div>

        <div class="row mt-5">
           <div class="card" style="width: 100%;">
                <div class="card-body text-center">
                    <h5 class="card-title">Actions</h5>
                    <a href="edit.php?id=<?= $jobs->id; ?>" class="card-link btn btn-dark">Edit</a>
                    <form action="" method="post" style="display:inline" action="job.php">
                        <input type="hidden" name="del_id" value="<?= $jobs->id; ?>">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div> 
</div>


<?php include "inc/footer.php"; ?>

