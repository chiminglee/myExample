<?php
    require_once dirname(__FILE__) . "\..\config\database.php";
    //初始值
    $email = $_POST["email"];
    $password = md5($_POST["user_password"]);

    $sql = "SELECT * FROM `users` WHERE email = '". $email . "' AND password = '". $password ."'";
    global $con;
    $result = mysqli_query($con , $sql) or die('MySQL query error');
    $user = mysqli_fetch_array($result);
    if($user == ""){
        echo "<script type='text/javascript'>";
        echo "alert('帳密錯誤');";
        echo "location.href='/user/login.php';";
        echo "</script>";
    }else{
        session_start();
        $_SESSION["id"] = $user['id'];
        echo "<script type='text/javascript'>";
        echo "alert('登入成功');";
        echo "location.href='/index.php';";
        echo "</script>";
    }
?>