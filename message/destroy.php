<?php
    require_once dirname(__FILE__) . "\..\config\app.php";
    require_once dirname(__FILE__) . "\..\config\database.php";

    //初始值
    $userId = $_SESSION["id"];
    
    $id = $_GET["id"];
    $sql = "DELETE FROM `messages` WHERE id = ". $id ."";

    $result = mysqli_query($con , $sql) ?? die('MySQL query error');
    echo "<script type='text/javascript'>";
    echo "alert('刪除留言成功');";
    echo "location.href='/index.php';";
    echo "</script>";
?>