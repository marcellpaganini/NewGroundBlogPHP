<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div style="margin-right:5%; margin-left:5%; margin-top:2%;">
    <h1 class="text-center">Welcome to the administration panel</h1>
    <hr>
    <br />

    <div class="row">
    <div class="col-md-6">
        <form class="form-horizontal" action="includes/functions.php" method="post">
            <div class="form-group">
                <div class="col-sm-8">
                <input type="text" class="form-control" name="cat_title" id="cat_title" placeholder="Category Title">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2 col-sm-4">
                <button type="submit" class="btn btn-default" name="cat_add">Add Category</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>Category ID</th>
                    <th>Category Title</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php show_category(); ?>
                </tbody>    
            </table>
        </div>
    </div>
</div>



<?php include 'includes/footer.php' ?>
