<?php
    require_once dirname(__FILE__) . "\..\config\app.php";
    require_once dirname(__FILE__) . "\..\config\database.php";

    //初始值
    $userId = $_SESSION["id"];
    $content = nl2br($_POST["content"]);
    $today = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `messages` (user_id, content, created_at, updated_at) 
            VALUES ('". $userId ."', '" . $content . "', '". $today . "', '". $today . "')";
    global $con;
    $result = mysqli_query($con , $sql) ?? die('MySQL query error');
    echo "<script type='text/javascript'>";
    echo "alert('新增留言成功');";
    echo "location.href='/index.php';";
    echo "</script>";
?>