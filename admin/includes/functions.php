<?php include "db.php"?>

<?php

    function redirect_to($location = NULL){
        if($location != NULL){
            header("Location: $location");
            exit;
        }
    }

    function add_category(){
        global $dbLink;

        if (isset($_POST['cat_add'])) {
            if (empty($_POST['cat_title'])) {
                header("Location: ../categories.php?Field_cannot_be_empty");
            }else{
                $cat_title = $_POST['cat_title'];
                $query = "INSERT INTO categories(cat_title)VALUES('$cat_title')";
                $result = mysqli_query($dbLink, $query);

                if (!$result) {
                    die("Could not send data " . mysqli_error($dbLink));
                }else{
                    header("Location: ../categories.php?category_added");
                }
            }
        }
    }
    add_category();

    function show_category(){
        global $dbLink;
        $query = "SELECT * FROM categories";
        $result = mysqli_query($dbLink, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            echo "<tr>";
            echo "<td>{$cat_id}</td>";
            echo "<td>{$cat_title}</td>";
            echo "<td><a href='categories.php?delete_cat={$cat_id}'>Delete</a></td>";
            echo "</tr>";
        }
    }

    function delete_category(){
        global $dbLink;
        if(isset($_GET['delete_cat'])){
            $cat_id = $_GET['delete_cat'];
            $query = "DELETE FROM categories WHERE cat_id = $cat_id";
            $result = mysqli_query($dbLink, $query);
            if(!$result) {
                die("Could not delete data " . mysqli_error($dbLink));
            } else {
                header("Location: categories.php?category_deleted");
            }
        }
    }
    delete_category();

    function add_post(){
        global $dbLink;
        if(isset($_POST['publish'])){
            $post_title = $_POST['title'];
            $post_author = $_POST['author'];
            $post_category = $_POST['category'];
            $post_category_id = $_POST['category_id'];
            $post_content = mysqli_real_escape_string($dbLink, $_POST['content']);
            $post_tags = $_POST['tags'];
            $post_status = $_POST['status'];

            $date = date("l d F Y");
            $post_views = 0;
            $post_comment_count = 0;

            if (isset($_FILES['post_image'])) {
                $dir = "../images/";
                $target_file = $dir.basename($_FILES['post_image']['name']);
                if(move_uploaded_file($_FILES['post_image']['tmp_name'], $target_file)) {
                    echo "Image was uploaded";
                }else{
                   echo "Something went wrong";
                    /*echo "<pre>";
                    print_r($_FILES['post_image']);
                    echo "</pre>";*/
                }
            }
            $query = "INSERT INTO posts(post_title, post_author, post_category, post_category_id,
                                  post_content, post_image, post_date, post_comment_count,
                                  post_views, post_tags, post_status)VALUES('$post_title',
                                  '$post_author', '$post_category', '$post_category_id', 
                                  '$post_content', '$target_file', '$date', '$post_comment_count', 
                                  '$post_views', '$post_tags', '$post_status')";
            $result = mysqli_query($dbLink, $query);
            if (!$result){
                die("Could not send data " . mysqli_error($dbLink));
                header("Location: ../posts.php?source=add_new");
            }else{
                header("Location: ../success.php?Post_added");
            }
        }
    }
    add_post();

    function show_posts(){
        global $dbLink; 
        $query = "SELECT * FROM posts";
        $result = mysqli_query($dbLink, $query);

        while ($row = mysqli_fetch_assoc($result)){
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_category = $row['post_category'];
            $post_category_id = $row['post_category_id'];
            $post_content = substr($row['post_content'], 0, 150) . " ...";
            $post_tags = $row['post_tags'];
            $post_status = $row['post_status'];
            $post_image = $row['post_image'];
            $date = $row['post_date'];
            $post_views = $row['post_views'];
            $post_comment_count = $row['post_comment_count'];

            echo "<tr>";
            echo "<td>{$post_id}</td>";
            echo "<td>{$post_title}</td>";
            echo "<td>{$post_author}</td>";
            echo "<td>{$post_category}</td>";
            echo "<td>{$post_status}</td>";
            echo "<td><img src='images/{$post_image}' width='50px'></td>";
            echo "<td>{$post_content}</td>";
            echo "<td>{$date}</td>";
            echo "<td>{$post_tags}</td>";
            echo "<td>{$post_comment_count}</td>";
            echo "<td>{$post_views}</td>";
            echo "<td><a href='posts.php?approve_post=$post_id'>Approve</a></td>";
            echo "<td><a href='posts.php?unapprove_post=$post_id'>Unapprove</a></td>";
            echo "<td><a href='posts.php?edit_post=$post_id'>Edit</a></td>";
            echo "<td><a href='posts.php?delete_post=$post_id'>Delete</a></td>";
            echo "</tr>";
        }
    }
?>
