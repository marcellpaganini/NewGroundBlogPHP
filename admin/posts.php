<?php include 'includes/header.php' ?>
<?php include 'includes/nav.php' ?>

<div style="margin-right:5%; margin-left:5%; margin-top:2%;">
    <h1 class="text-center">Welcome to the administration panel</h1>
    <hr>
    <br />
    
    <?php
        if(isset($_GET['source'])) {
            $source = $_GET['source'];
            switch ($source) {
                case 'add_new':
                    include "includes/add_post.php";
                    break;
                default:
                    include "includes/view_post.php";
                    break;
            }
        }
        
    ?>

</div>

<?php include 'includes/footer.php' ?>
