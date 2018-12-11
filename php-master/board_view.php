<?php
require './dbconfig.php';
header("Content-Type:text/html;charset=utf-8");

/**
 * Board Table
 * id INT(11),
 * title VARCHAR(255),
 * contents TEXT(),
 * author VARCHAR(255),
 * reg_date TIMESTAMP
 */
$id = $_GET['id'];

$sql = "SELECT * FROM board WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result)

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Database</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="/">Database</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="board.php">게시판</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col p-5">
                <h1>게시판</h1>
                <form action="board_modify.php" method="GET">
                    <table class='table table-striped table-hover table-sm'>
                        <thead class='thead-dark'>
                            <tr>
                                <th class="text-center" colspan="2">내용보기</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn btn-warning">수정</button>
                                    <a href="board_remove.php?id=<?php echo $_GET['id'];?>" class="btn btn-danger">삭제</a>
                                    <a href="board.php" class="btn btn-primary">돌아가기</a>
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><?php echo $row['id']; ?></td>
                            </tr>
                            <tr>
                                <td>제목</td>
                                <td><?php echo $row['title']; ?></td>
                            </tr>
                            <tr>
                                <td>내용</td>
                                <td><?php echo $row['contants']; ?></td>
                            </tr>
                            <tr>
                                <td>작성자</td>
                                <td><?php echo $row['author']; ?></td>
                            </tr>
                            <tr>
                                <td>등록일</td>
                                <td><?php echo $row['reg_date']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
