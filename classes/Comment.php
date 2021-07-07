<?php 
class Comment {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function addComments($name, $email, $body, $id) {
        if (!empty($body)) {
            $query = mysqli_query($this->con, "INSERT INTO comments (comment_name, comment_email, body, status, post_id)VALUES('$name', 
            '$email', '$body', 'Unapproved', $id);");
            if(!$query) {
                die("Failed " . mysqli_error($this->con));
            }
        } else {
            return false;
        }
    }

    public function getApprovedComments($id) {
        $query = mysqli_query($this->con, "SELECT * FROM comments WHERE post_id = $id AND status = 'Approved';");
        $str = "";
        while($row = mysqli_fetch_assoc($query)) {
            $id = $row['id'];
            $post_id = $row['post_id'];
            $name = $row['comment_name'];
            $body = $row['body'];

            $str .= "<li class='comment'>
                        <div class='vcard'>
                            <img src='images/personIcon.png' alt='Image placeholder'>
                        </div>
                        <div class='comment-body'>
                            <h3>$name</h3>
                            <p>$body</p>
                            <p><a href='#' class='reply rounded'>Reply</a></p>
                        </div>
                    </li>";
        }
        echo $str;
    }

    public function getComments() {
        $query = mysqli_query($this->con, "SELECT * FROM comments ORDER BY id DESC;");
        $str = "";
        while ($row = mysqli_fetch_array($query)) {
            $id = $row['id'];
            $name = $row['comment_name'];
            $body = $row['body'];
            $email = $row['comment_email'];
            $status = $row['status'];
            $post_id = $row['post_id'];

            $str .= "<tr>
                     <td>$id</td>
                     <td>$name</td>
                     <td>$body</td>
                     <td>$email</td>
                     <td>$status</td>
                     <td>$post_id</td>
                     </tr>";
        }
        echo $str;
    }
}
?>