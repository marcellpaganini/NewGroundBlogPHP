<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div style="margin-right:5%; margin-left:5%; margin-top:2%;">
    <h1 class="text-center">Welcome to the administration panel</h1>
    <hr>
    <br />
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Body</th>
            <th>Status</th>
            <th>Post ID</th>
            </thead>
            <tbody>
            <?php 
                require '../classes/Comment.php';
                $comment_obj = new Comment($dbLink);
                $comment_obj->getComments();
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php' ?>
