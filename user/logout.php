<?php

    session_start();
    if(isset($_SESSION["id"])){
        session_unset();
        echo "<script type='text/javascript'>";
        echo "alert('登出成功');";
        echo "location.href='/index.php';";
        echo "</script>";
    }

?>