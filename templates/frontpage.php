<?php include "inc/header.php"; ?>

</div>
<main role="main">
 <div class="container">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron text-center">
    <div class="container">
      <h1 class="display-3">Find a Job</h1>
        <form action="index.php" method="get">
        <div class="form-group">
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                  <option value=<?= $category->id; ?>><?= $category->name; ?></option>
                <?php endforeach; ?>
            </select>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-lg btn-success" value="Find">
            </div>
        </form>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-md-12 text-center">
      <h3><?= $title; ?></h3>
    </div>
    <hr/>
  </div>
  
    <!-- Example row of columns -->
    <?php foreach($jobs as $job): ?>
    <div class="row">
      <div class="col-md-10">
        <h2><?= $job->job_title; ?></h2>
        <p><?= $job->description; ?></p>
      </div>
      <div class="col-md-2 text-center">
        <a href="job.php?id=<?= $job->id; ?>" class="btn btn-primary">View</a>
      </div>
    </div>
    <?php endforeach; ?>

    <hr>

  </div> <!-- /container -->

</main>


<?php include "inc/footer.php"; ?>
