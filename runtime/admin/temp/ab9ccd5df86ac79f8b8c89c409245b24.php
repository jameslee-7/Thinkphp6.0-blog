<?php /*a:1:{s:46:"C:\wamp64\www\blog\view\admin\login\index.html";i:1660057886;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP6.0Demo --登录</title>

    <!-- 引入 Bootstrap CSS --> 
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/src/blog/css/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/src/blog/css/style.css" />

    <!-- 移动设备优先 --> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <!--登录UI--> 
<div class="d-flex  justify-content-center align-items-center vw-100 vh-100 ">
    <form action="<?php echo url('/admin/login_check'); ?>"  method="post" class="p-5 m-5 shadow">
        <fieldset >
            <!--用户名-->
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label text-right">用户名:</label>
                <div class="col-6">
                <input type="text" id="name" name="name" class="form-control" placeholder="请输入用户名">
                </div>
                <span class="col-2 text-danger col-form-label">*</span>
            </div>
            <!--密码-->
            <div class="form-group row">
                <label for="password" class="col-4 col-form-label text-right">密码:</label>
                <div class="col-6">
                <input type="password" id="password" name="password" class="form-control" placeholder="请输入密码">
                </div>
                <span class="col-2 text-danger col-form-label">*</span>
            </div>
            <!--验证码-->
           
            <div class="form-group row">
                <label class="col-4 col-form-label text-right" style="position:relative;top:-10px;"  ><?php echo captcha_img(); ?> </label>    
                <div class="col-6">
                <input type="text" id="code" name="code" class="form-control" placeholder="请输入验证码">
                </div>
                <span class="col-2 text-danger col-form-label">*</span>
            </div>
            
            <!--登录-->
            <div class="form-group row">
                <label class="col-2 col-form-label"></label>
                <div class="col-8">
                    <input type="hidden" value="<?php echo token(); ?>" name="__token__">
                <button class="btn btn-success w-100">登录</button>
                </div>  
            </div>
        </fieldset>
    </form>
</div>
    <!-- 引入 JS 文件 --> 
    <script type="text/javascript" src="http://localhost:8000/src/blog/js/jquery-3.3.1.min.js"></script> <script type="text/javascript" src="http://localhost:8000/src/blog/js/bootstrap.bundle.min.js"></script>
</body>
</html>