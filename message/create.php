<!DOCTYPE html>
<html lang="zh-Hant-TW">
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>留言板範例-新增留言</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"  />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <a href="javascript:history.back()" >回上一頁</a>
        <h1>新增留言</h1>
        <form action="store.php" method="post">
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">內容</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
            </div>
            <button>送出</button>
        </form>
    </div>
</body>
</html>  