<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>خودشناسی-ازمون bmti</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('1.ico')}}" />

<!--<link rel="stylesheet" type="MTBI/css" href="{{asset('css/MTBI.css')}}">
    <link rel="stylesheet" type="MTBI/css" href="{{asset('css/dezain.css')}}">
    <link rel="stylesheet" type="MTBI/css" href="{{asset('css/dezain2.css')}}">
    <link rel="stylesheet" type="MTBI/css" href="{{asset('css/dezain3.css')}}"> -->

    <style>
        body{
            background-color: #EFEEEF;
            font-size: 13px;
            font-family: Tahoma, Arial, "Times New Roman", "Helvetica Neue", "Lucida Grande", "Segoe UI", Helvetica, Verdana, sans-serif;
            color: #474747;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #menu{
            height: 30px;
            width: 100%;
            margin-bottom: 20px;


        }
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #262728;
        }
        li{
            float: right;
        }

        li a{
            display: block;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration:none;

        }
        li a:hover{
            background-color: #444;
            border: 1px solid #B6B7BC;
            box-shadow: 0 0 10px #000;
            -moz-box-shadow: 0 0 10px #000;
            -webkit-box-shadow: 0 0 10px #000;
            -moz-transition: visibility 0s linear.3s;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }
        header {
            position: relative;
            height: 150px;
            border-bottom: 1px solid #807E7D;
        }

        header > div {
            width: 100%;
            height: 100%;
        }
        #heder{

            width: 100%;
            position: relative;
            height: 120px;
            background: #034A73 url('../Images/Mobile/Header.gif') no-repeat top center;
            background-size: contain;
            padding-top: 20px;
            float: right;
        }
        div.MenuBar {
            width: 100%;
            height: 100px;
            background: url('../Images/Tablet/Menu.png') repeat-x;
        }

        div#menu {
            width: 100%;
            padding: 0;
            margin: 0;
        }

        div#menu a {
            text-decoration: none;
        }

        input[type=button].menuButton {
            font-size: 11px;
            font-weight: 200;
            margin: 34px 0 0 0;
            padding: 0 0 6px 0;
            width: 104px;
            height: 53px;
            line-height: 30px;
            background: url('../Images/Tablet/MenuButton.png') no-repeat 0 0;
            box-shadow: none;
            -moz-box-shadow: none;
            border: none;
            float: right;
        }

        input[type=button].menuButton:hover {
            background: url('../Images/Tablet/MenuButton-Over.png') no-repeat;
            box-shadow: none;
            -moz-box-shadow: none;
            filter: initial;
        }

        .toggled-Menus {
            display: none !important;
        }
        #page {
            padding-left: 2px;

        }


    </style>

</head>
<body style="background-color: rgb(3, 74, 115);">
        <div id="menu">
            <ul>
                <li style="margin-right: 10px"><a href="#">صفحه اصلي</a> </li>
                <li><a href="#">اعضاء</a> </li>
                <li><a href="#">تبليغات</a> </li>
                <li style="margin-left: 62%"><a href="#">تماس با ما</a> </li>
                <li><a href="#">ورود</a> </li>
                <li><a href="#">ثبت نام</a> </li>
            </ul>

        </div>


    <header>
        <div id="heder">

        </div>


    </header>
    <div id="page">
        <div class="MenuBar">
            <div id="menu">
                <input type="button" class="menuButton" value="کهن الگوها" title="آرکتایپهای شخصیتی" onclick='redirectUrl("/ArcheTypes");' />
                <input type="button" class="menuButton" value="قهرمان درون" title="قهرمان درون" onclick='redirectUrl("/HeroWithin");' />
                <input type="button" class="menuButton" value="MBTI" title="تیپهای شخصیتی میرز بریگز" onclick='redirectUrl("/MBTI");' />
                <input type="button" class="menuButton" value="DISC" title="رفتار شناسی DISC" onclick='redirectUrl("/DISC");' />
                <input type="button" class="menuButton" value="مزاج شناسی" title="مزاج شناسی" onclick='redirectUrl("/Temperaments");' />
                <input type="button" class="menuButton" value="گروه های خونی" title="گروه های خونی" onclick='redirectUrl("/BloodGroups");' />
            </div>

        </div>



    </div>




</body>
</html>
