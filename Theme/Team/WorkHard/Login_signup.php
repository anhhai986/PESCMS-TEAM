<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>注册帐号 - PESCMS TEAM</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="alternate icon" type="image/png" href="/Theme/Team/WorkHard/assets/i/favicon.png">
        <link rel="stylesheet" href="/Theme/Team/WorkHard/assets/css/amazeui.min.css"/>
        <style>
            .header {
                text-align: center;
            }
            .header h1 {
                font-size: 200%;
                color: #333;
                margin-top: 30px;
            }
            .header p {
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <div class="am-g">
                <h1>帐号注册</h1>
                <p>我不入地狱，谁入地狱<br />Nothing Ventured, Nothing Gained, Who the hell</p>
            </div>
            <hr />
        </div>
        <div class="am-g">
            <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

                <form class="am-form" action="<?= $label->url('Team-Login-signup'); ?>" method="post">
                    <label for="account">帐号:</label>
                    <input type="text" name="account" value="">
                    <br>
                    <label for="password">密码:</label>
                    <input type="password" name="password" value="">
                    <br>
                    <label for="password">确认密码:</label>
                    <input type="password" name="repassword" value="">
                    <br>
                    <label for="account">邮箱地址:</label>
                    <input type="text" name="mail" value="">
                    <br>
                    <label for="account">姓名:</label>
                    <input type="text" name="name" value="">
                    <br>
                    <br />
                    <div class="am-cf">
                        <input type="submit" name="" value="激 活" class="am-btn am-btn-primary am-btn-sm am-fl">
                        <a href="<?= $label->url('Team-Login-index'); ?>" class=" am-fr am-btn am-btn-primary am-btn-sm am-fl">离 开</a>
                    </div>
                </form>
                <hr>
                <p>加入我们，很快你就被炒鱿鱼了!</p>
            </div>
        </div>
    </body>
</html>