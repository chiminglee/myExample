<?php 
require_once dirname(__FILE__) . "/config/app.php";
require_once dirname(__FILE__) . "/config/database.php";

$sql = "SELECT m.id, m.content, u.name, m.user_id
        FROM `messages` AS m 
        JOIN users u ON u.id = m.user_id";
$result = mysqli_query($con , $sql) ?? die('MySQL query error');
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>留言板範例</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <h1>留言板</h1>
    <?php
        if(isset($_SESSION["id"]) && $_SESSION["id"] != ""):
    ?>
        <a href="message/create.php">新增留言</a>|
        <a href="user/logout.php">登出</a>
    <?php
        else:
    ?>
        <a href="user/create.php">註冊</a>|
        <a href="user/login.php">登入</a>
    <?php
        endif;
    ?>
    <table class="table table-hover">
        <tr>
            <th >#</th>
            <th >留言者</th>
            <th >內容</th>
            <th >管理</th>
        </tr>
        <?php
            if(isset($result)):
                while($row = mysqli_fetch_assoc($result)){
                    echo "<pre>";
                    print_r($row);
                    echo "</pre>";
                    $messages[] = $row;
                }
                    
				//while($messages = mysqli_fetch_assoc($result)):
                
                
                foreach($messages as $message){
        ?>
                <tr>
                    <td><?php echo ($message["id"]); ?></td>
                    <td><?php echo ($message["name"]); ?></td>
                    <td><?php echo ($message["content"]); ?></td>
                    <td>
						<?php
						
							if(isset($_SESSION["id"]) && $_SESSION["id"] == $message["user_id"]):
						?>
								<a href="message/edit.php?id=<?php echo $message['id']; ?>">修改</a> 
								<a href="message/destroy.php?id=<?php echo $message['id']; ?>">刪除</a> 
						<?php
							endif;
						?>
                    </td>
                </tr>
        <?php
				//endwhile;
                }
				mysqli_free_result($result);
            endif;
            //Closing the statement
            
            //Closing the connection
            mysqli_close($con);
        ?>
    </table>
</div>
</body>
</html>  