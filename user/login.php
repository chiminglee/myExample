<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>留言板範例-註冊使用者</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"  />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <a href="javascript:history.back()" >回上一頁</a>
        <h1>登入</h1>
        <form action="toLogin.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlinput2" class="form-label">password</label>
                <input type="password" class="form-control" id="exampleFormControlinput2" name="user_password">
            </div>
            <button>登入</button>
        </form>
    </div>
</body>
</html>  