<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div style="margin-right:5%; margin-left:5%; margin-top:2%;">
    <h1 class="text-center">Welcome to the administration panel</h1>
    <hr>
    <br />
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <th class="text-center">ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Body</th>
            <th class="text-center">Status</th>
            <th class="text-center">Post ID</th>
            <?php if($role === "Admin") {
                echo '<th colspan="3" class="text-center">Action</th>';
            } ?>
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
