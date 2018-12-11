<?php
require './dbconfig.php';
header("Content-Type:text/html;charset=utf-8");

$title = $_POST['title'];
$contents = $_POST['contents'];
$author = $_POST['author'];

$sql = "INSERT INTO board(title,contants,author) values('$title','$contents','$author')";
$result = mysqli_query($conn, $sql);

?>
<script>alert("글이 등록되었습니다"); window.location.replace("board.php")</script>