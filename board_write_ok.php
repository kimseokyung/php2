<?php
require './dbconfig.php';
header("Content-Type:text/html;charset=utf-8");

$title = $_POST['name'];
$contents = $_POST['contents'];
//$author = $_POST['author'];

$sql = "INSERT INTO user(`name`,contents) values('$title','$contents')";
$result = mysqli_query($conn, $sql);

?>
<script>alert("글이 등록되었습니다"); window.location.replace("board.php")</script>