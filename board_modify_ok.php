<?php
require './dbconfig.php';
header("Content-Type:text/html;charset=utf-8");

$id = $_POST['id'];
$title = $_POST['name'];
$contents = $_POST['contents'];


$sql = "UPDATE user SET name='$title', contents='$contents' WHERE id='$id'";
$result = mysqli_query($conn, $sql);

?>
<script>alert("글이 수정되었습니다"); window.location.replace("board_view.php?id=<?php echo $id;?>")</script>