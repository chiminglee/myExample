<?php

    session_start();
    if(isset($_SESSION["id"])){
        session_unset();
        echo "<script type='text/javascript'>";
        echo "alert('η»εΊζε');";
        echo "location.href='/index.php';";
        echo "</script>";
    }

?>