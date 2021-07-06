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
}
?>