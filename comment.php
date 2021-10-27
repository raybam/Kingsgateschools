<?php 
require 'admin/config.php';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(isset($_POST['postcomment'])){
        $postid = $_POST['id'];
        $blog_title = $_POST['blog_title'];
        $username = $_POST['username'];
        $comment = $_POST['comment'];

        if($comment != ""){
            $query = "INSERT INTO comments (post_id, blog_title, username, comment) VALUES ('$postid', '$blog_title','$username', '$comment')";
            $query_run = mysqli_query($connection, $query);
            if($query_run){
                header("Location:blog.php");
            }
        }else{
            header("Location:index.php");
        }
    }
?>