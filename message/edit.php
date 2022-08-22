<!DOCTYPE html>
<html lang="zh-Hant-TW">
<?php
require_once dirname(__FILE__) . "/../config/app.php";
require_once dirname(__FILE__) . "/../config/database.php";

$id = $_GET["id"];
$sql = "SELECT * FROM `messages` WHERE id = ". $id . "";
$result = mysqli_query($con , $sql) ?? die('MySQL query error');
$message = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>留言板範例-修改留言</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <a href="javascript:history.back()" >回上一頁</a>
        <h1>修改留言</h1>
        <form action="update.php?id=<?php echo $message["id"]; ?>" method="post">
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">內容</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"><?php echo $message["content"]; ?></textarea>
            </div>
            <button>送出</button>
        </form>
    </div>
</body>
</html>  