<html>
<head>
    <style>
        form{
            text-align: center;
            margin: 0 auto;
        }
        .login-box{
              background-color: #26D846;
             width: 300px;
            margin: 0 auto;
        }
        .textbox{
            
        }
        .fa{
            font-size: 20px;
            font-style: oblique;    
        }
    </style>
</head>
<body>
<form action="adminvalidation.php" method="post" >
    <div class="login-box">
        <h1>Đăng nhập</h1>
        <div class="textbox"> <i class="fa fa-user" aria-hidden="true">Tài khoản: </i>
            <input type="text" placeholder="Adminname"
                         name="adminname" value="">
        </div>
        <div class="textbox"> <i class="fa fa-lock" aria-hidden="true">Mật khẩu: </i>
            <input type="password" placeholder="Password"
                         name="password" value="">
        </div><br>
        <input class="button" type="submit"
                     name="login" value="Đăng nhập">
        <br><br>
        <a href="../../index.php"> back to HOME PAGE </a>
    </div>
    
</form>
</body>
</html>