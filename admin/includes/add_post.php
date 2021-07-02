<?php 
    $sql = "SELECT * FROM categories";
    $res = mysqli_query($dbLink, $sql);
?>
<div style="margin-right:5%; margin-left:5%; margin-top:2%;">
        <h2>Add Posts</h2>
    <hr>
    <br />
</div>
<div class="container">
<div class="col-sm-6">
<form action="includes/functions.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" name="title" placeholder="Post title" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Post Author</label>
        <input type="text" name="author" placeholder="Post author" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <textarea name="content" rows="8" cols="80" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">Post Category</label>
        <select class="form-control" name="category">
            <?php 
                while ($row = mysqli_fetch_array($res)) {
                    $cat_title = $row['cat_title'];
                    echo "<option value='$cat_title'>$cat_title</option>";
                }
            ?>  
        </select>
    </div>
    <div class="form-group">
        <label for="">Post Category Id</label>
        <select class="form-control" name="category_id">
            <?php 
                $sql = "SELECT * FROM categories";
                $res = mysqli_query($dbLink, $sql);

                while ($row = mysqli_fetch_array($res)) {
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];
                    echo "<option value='$cat_id'>$cat_id - $cat_title</option>";
                }
            ?>  
        </select>
    </div>
    <div class="form-group">
        <label for="">Post Tags</label>
        <input type="text" name="tags" placeholder="Separate tags with a comma (,)" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Post Status</label>
        <select class="form-control" name="status">
            <option value="draft">Draft</option>
            <option value="published">Published</option>  
        </select>
    </div>
    <div class="form-group">
        <label for="">Post Image</label>
        <input type="file" name="post_image" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="publish" value="Publish Post" class="btn btn-primary">
    </div>
</form>
</div>
</div>