<?php
require './dbconfig.php';
header("Content-Type:text/html;charset=utf-8");
$id = $_GET['id'];
$sql = "DELETE FROM board WHERE id ='$id'";
$result = mysqli_query($conn, $sql);

?>
<script>alert("글이 삭제되었습니다"); window.location.replace("board.php")</script>