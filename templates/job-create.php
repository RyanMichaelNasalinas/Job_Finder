<?php include "inc/header.php"; ?>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h2>Create Job Listing</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" name="company" id="company" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="0">Choose Category</option>
                        <?php foreach($categories as $category):?>
                            <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="job_title">Job Title</label>
                    <input type="text" name="job_title" id="job_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                   <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                 <div class="form-group">
                    <label for="location">Location</label>
                   <input type="text" name="location" id="location" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="salary">Salary</label>
                   <input type="text" name="salary" id="salary" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="contact_user">Contact User</label>
                   <input type="text" name="contact_user" id="contact_user" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="contact_email">Contact Email</label>
                   <input type="email" name="contact_email" id="contact_email" class="form-control">
                </div>
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div>
<?php include "inc/footer.php"; ?>