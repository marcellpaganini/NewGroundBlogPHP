<?php 
include "admin/includes/db.php";

function show_cat(){
    global $dbLink;

    $query = "SELECT * FROM categories";
    $result = mysqli_query($dbLink, $query);
    while($row = mysqli_fetch_array($result)){
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<a class='dropdown-item' href='category.php?cat_id=$cat_id'>{$cat_title}</a>";
    }
}
?>