<!doctype html>
<html>
<head>
    <meta charset="utf8">
    <title>阿拉蕾专用index</title>
    <link rel="stylesheet" href="script/layui-v2.6.8/layui/css/layui.css">
    <link rel="stylesheet" href="base.css">
    <script src="script/jquery-1.9.1/jquery-1.9.1.min.js"></script>
    <script src="script/layui-v2.6.8/layui/layui.js"></script>
    <script src="base.js"></script>
    <style>
        a:hover {
            color: beige;
            background-color: beige;
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background-color: #f0ad4e;
        }
        #rb{
            margin: 0px auto;
        }
    </style>
<!--    <script type="text/javascript">-->
<!--        function check() {-->
<!--            // var User = document.getElementByld("username_id").value;-->
<!--            // var Password = document.getElementByld("password_id").value;-->
<!--            // var tijiao = document.getElementByld("rb");-->
<!--            var user = $("#username_id").val();-->
<!--            var pwd = $("#password_id").val();-->
<!--            if (user === "dachuanghanfu" && pwd === "123456") {-->
<!--                alert("登录成功! ");-->
<!--                window.open("知识名片.php");-->
<!--            } else {-->
<!--                alert("用户名或密码错误!请点击知识名片进入");-->
<!--            }-->
<!--        }-->
<!--    </script>-->
    <script>
        function check() {
            // var bt=document.getElementById("bt")
            window.open("知识名片.php")

        }
    </script>
</head>
<body background="网站素材/图片1.png">
<div>
    <div id="header" style="background-color: blanchedalmond;">
        <div id="nav" class="flex fyc w1300 cbox">
            <ul class="flex" style="font-size: 25px;font-family: 幼圆 ">
                <li><a href="index.php" class="inlineblock p8 tc black">首页</a></li>
                <li><a href="知识名片.php" class="inlineblock p8 tc black">知识名片</a></li>
                <li><a href="搭配组合.php" class="inlineblock p8 tc black">搭配组合</a></li>
                <li><a href="我来百搭.php" class="inlineblock p8 tc black">我来百搭</a></li>
            </ul>
        </div>
    </div>
    <div class="mt350">
        <form id="fm" action="" class=" layui-form w550 cbox " enctype="multipart/form-data">

<!--            <div  class="flex mt50">-->
<!--                <label class="fmlabel" style="font-size: 25px;">账号</label>-->
<!--                <input  id="username_id" type="text" class="flex1 fminput" name="xingming" placeholder="" autocomplete="off">-->
<!--            </div>-->
<!--            <div class="flex mt50">-->
<!--                <label class="fmlabel" style="font-size: 25px;">密码</label>-->
<!--                <input id="password_id"  type="password" class="flex1 fminput" name="mima" placeholder="" autocomplete="off">-->
<!--            </div>-->
            <div  class="flex">
                <button id="rb" class="layui-btn layui-btn-radius layui-btn-warm w440" onclick="check()">进&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;入</button>
            </div>
    </div>

    </form></div>
<div id="footer" class=" mt2 tc lh32 p10 fz12 gray00" style="background-color: #FBEC88 ">
    <p>
        版权来源
    </p>
    <p>
        <span>首页背景图片：站酷网（ZCOOL）用户“小草棚”
</span> <span class="ml10"></span> 电话其他背景图片：小红书用户“木每三少”
        <span>汉服知识图片来源：小红书用户“汉服小纸条”
</span>
    </p>
</div>
</body>