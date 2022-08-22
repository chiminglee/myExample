<?php
    require_once dirname(__FILE__) . "\..\config\database.php";

    //初始值
    $email = $_POST["email"];
    $password = md5($_POST["user_password"]);
    $userName = $_POST["user_name"];

    $sql = "SELECT * FROM `users` WHERE email = '". $email . "'";
    
    $result = mysqli_query($con , $sql) ?? die("MySQL query error");
    $user = mysqli_fetch_array($result);

    if($user != "") {
        echo "<script type='text/javascript'>";
        echo "alert('已經辦過帳號囉');";
        echo "location.href='login.php';";
        echo "</script>";
    }
    else{
        $sql = "INSERT INTO `users` (`email`, `password`, `name`) VALUES ('" . $email . "', '" . $password . "', '" . $userName . "')";
        
        //$result = mysqli_query($con , $sql) or die("MySQL query error");
        $result = mysqli_query($con , $sql) ?? die("MySQL query error");

        $sql="SELECT * FROM `users`
            WHERE email = '$email' AND password = '$password'";
        
        $result = mysqli_query($con , $sql) or die('MySQL query error');
		
        $user = mysqli_fetch_array($result);
		if( $user ) {
			session_start();

			// 註冊成功，就直接登入
			$_SESSION["id"] = $user["id"];
			echo "<script type='text/javascript'>";
			echo "alert('註冊成功');";
			echo "location.href='/index.php';";
			echo "</script>";
		}else {
			// 註冊沒成功
			echo "<script type='text/javascript'>";
			echo "alert('註冊失敗');";
			echo "location.href='/index.php';";
			echo "</script>";
		}
    }
?>