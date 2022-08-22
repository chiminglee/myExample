<?php
    require_once dirname(__FILE__) . "\..\config\app.php";
    require_once dirname(__FILE__) . "\..\config\database.php";

    //初始值
    $userId = $_SESSION["id"];
    $id = $_GET["id"];

    $content = $_POST["content"];
    $today = date("Y-m-d H:i:s");
    $sql = "UPDATE `messages` SET content = '" . $content . "', updated_at = '" . $today . "' WHERE id = " . $id . "";
    global $con;
    $result = mysqli_query($con , $sql) or die('MySQL query error');
    echo "<script type='text/javascript'>";
    echo "alert('編輯留言成功');";
    echo "location.href='/index.php';";
    echo "</script>";
?>