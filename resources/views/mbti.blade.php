<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>خودشناسی-ازمون bmti</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('1.ico')}}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="MTBI/css" href="{{asset('css/MTBI.css')}}">
    <link rel="stylesheet" type="MTBI/css" href="{{asset('css/dezain.css')}}">
    <link rel="stylesheet" type="MTBI/css" href="{{asset('css/dezain2.css')}}">
    <link rel="stylesheet" type="MTBI/css" href="{{asset('css/dezain3.css')}}">

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
        #header {
            position: relative;
            height: 150px;
            background-color: #7964d5;
            background-size: contain;
            padding-bottom: 1px;

        }

        #main{

            border-radius: 5px;
            height: 700px;
            width: 80%;
            background-color: #ef4138;
            margin: 0 auto;
        }
        #menu{
            border-top-right-radius: 5px;
            border-bottom-right-radius:5px ;
            margin-top: 1px;
            margin-right: 1px;
            float: right;
            width: 25%;
            height: 697px;
            background-color: #0000F0;
        }

        #panel-content {
            width: 80%;
            min-height: 200px;
            overflow: auto;
            padding: 0;
            background: #EFEEEF url('../Images/texture-grey.jpg') repeat-y scroll right 0;
            background-size: 200px;
            border: 1px solid #8D8D8D;
            border-radius: 7px;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            margin: 0 -2px;
            margin: auto;

        }
        .right-panel {
            position: relative;
            float: right;
            top: 0;
            bottom: 0;
            height: auto;
            width: 200px;
            padding: 0 0 50px 0;
        }

        .small-right-panel {
            position: relative;
            float: right;
            top: 0;
            bottom: 0;
            height: auto;
            width: 180px;
            padding: 0 0 50px 0;
        }

        .right-panel h2, .small-right-panel h2 {
            color: #FFF;
            font-size: 14px;
            font-weight: bold;
            padding: 10px 15px 20px 5px;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            /*text-shadow:#000000 0px 1px 0px;*/
            border-bottom: 1px solid #000;
        }

        .right-panel h2 a, .small-right-panel h2 a {
            color: #FFF;
            text-decoration: none;
        }

        .right-panel ul, .small-right-panel ul {
            padding: 0;
            margin: 0;
            border-bottom: 1px solid #494949;
        }

        .right-panel ul li, .small-right-panel ul li {
            font-weight: normal;
            /*text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);*/
            text-shadow: #000000 2px 2px 0px;
            border-top: 1px solid #494949;
            border-bottom: 1px solid #000;
            padding: 20px 30px;
            list-style: none;
        }

        .right-panel ul li a, .small-right-panel ul li a {
            font-size: 13px;
            text-decoration: none;
            color: #A3A3A3;
        }

        .right-panel ul li a:hover, .small-right-panel ul li a:hover {
            text-decoration: none;
            color: #FFF;
        }

        .right-panel ul li.active, .small-right-panel ul li.active {
            color: #FFF;
            font-size: 13px;
            font-weight: bold;
            /*text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);*/
            background: url('../Images/Active-Panel.png') repeat scroll 0 0 rgba(0, 0, 0, 0);
            border-top: 1px solid #000;
            border-bottom: 2px solid #000;
        }

        .right-panel ul li ul, .small-right-panel ul li ul {
            margin: 10px -15px -20px -15px;
            border-bottom: none;
        }

        .right-panel ul li ul li, .small-right-panel ul li ul li {
            font-weight: normal;
            text-shadow: #000000 2px 2px 0px;
            border-top: none;
            border-bottom: none;
            padding: 10px 45px;
            margin: 0 -15px;
            list-style: none;
        }

        .right-panel ul li ul li a, .small-right-panel ul li ul li a {
            font-size: 12px;
        }

        .right-panel ul li ul li.active, .small-right-panel ul li ul li.active {
            font-size: 12px;
            font-weight: bold;
        }
        #left-panel {
            position: relative;
            float: right;
            width: 769px;
            height: auto;
            padding: 0;
            text-align: right;
            margin-right: 20px;
        }

        #large-left-panel {
            position: relative;
            float: right;
            width: 820px;
            height: auto;
            padding: 0;
        }

        #left-panel h1, #large-left-panel h1 {
            padding: 20px 10px 10px 10px;
            margin: 0;
        }
        #breadcrumb {
            background-color: #FFFDEF;
            width: 100%;
            border-top: 1px solid #CCC;
            border-bottom: 1px solid #CCC;
        }

        #breadcrumb div {
            font: normal 11px tahoma;
            padding: 20px;
        }

        #breadcrumb div a {
            color: #828282;
            text-decoration: none;
        }

        #breadcrumb div a:hover {
            color: #000;
        }

        #breadcrumb span {
            padding: 2px;
        }

        .field-validation-valid {
            display: none;
        }

        select.tiny, select.so-tiny {
            width: 70px;
        }
        table td.tiny-cell {
            height: 12px;
        }
        select.tiny, select.so-tiny {
            width: 70px;
        }
        select.small {
            width: 100px;
        }
        .validation-summary-valid {
            display: none;
        }

        select {
            background: #fff;
            color: #333;
            font-family: Tahoma,​Geneva,​sans-serif;
            font-size: 13px;
            font-weight: 400;
            padding: 8px;
            width: 120px;
            height: 30px;
            padding: 4px;
            border: 1px solid #D9D9D9;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }

        select.tiny, select.so-tiny {
            width: 70px;
        }

        select.small {
            width: 100px;
        }

        h1, h2, h3,
        h4, h5, h6 {
            color: #000;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        h1 {
            color: #353535;
            font-size: 22px;
            font-family: BYekan,​B Yekan,​Tahoma,​Arial;
            font-weight: 400;
        }

        h2 {
            font-size: 14px;
            font-weight: bold;
        }

        h3 {
            font-size: 1.2em;
        }

        h4 {
            font-size: 1.1em;
        }

        h5, h6 {
            font-size: 1em;
        }

        h5 a:link, h5 a:visited, h5 a:active {
            padding: 0;
            text-decoration: none;
        }
        .title {
            background: #034A73 url('../Images/Header-Tablet.gif') no-repeat right;
            width: 100%;
            height: 100%;
        }
        .ads {
            display: none;
        }
        .ads-tablet-top  {
            float: left;
        }









    </style>

</head>
<body>
<nav  style="margin-bottom: 2px" class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="#">تماس با ما</a></li>
            <li><a href="#">تبليغات</a></li>
            <li><a href="#">اعضا</a></li>
            <li class="active"><a href="#"><img src="{{asset('Home.png')}}"></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>ثبت نام</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> ورود</a></li>
        </ul>
    </div>

</nav>

<header>
    <div align="center">
        <div class="title">
            <div class="ads">
                <script type="text/javascript">
                    var clickyab_ad = clickyab_ad || [];
                    clickyab_ad['id'] = 3321434780256;
                    clickyab_ad['domain'] = 'khodshenas.ir';
                    clickyab_ad['slot'] = 56074149733;
                    clickyab_ad['width'] = 468;
                    clickyab_ad['height'] = 60;
                    clickyab_ad['responsive'] = 'true';
                    clickyab_ad['effect'] = "";
                </script>
                <script type="text/javascript" src="//a.clickyab.com/show.js"></script>
                <a rel='nofollow' href='https://affstat.adro.co/click/BJM7uB718' target='_blank'>
                    <img style='width:100%;height:100%' src='https://affiliate.digikala.com/PromotionBanners/f177b144-5cc3-48e4-a4e1-45a4cc93a285/b80abb7a-1242-4f52-8170-57a44661c613-300x250.gif'>
                </a>
            </div>
            <div class="ads-tablet-top">
                <a rel='nofollow' href='https://affstat.adro.co/click/BJM7uB718' target='_blank'>
                    <img style='width:100%;height:100%' src='https://affiliate.digikala.com/PromotionBanners/f177b144-5cc3-48e4-a4e1-45a4cc93a285/b80abb7a-1242-4f52-8170-57a44661c613-300x250.gif'>
                </a>
            </div>

        </div>
    </div>
    <div style="padding-top: 30px" class="container">
        <div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-primary">کهن الگوها</a>
            <a href="#" class="btn btn-primary">قهرمان درون</a>
            <a href="#" class="btn btn-primary">MBTI</a>
            <a href="#" class="btn btn-primary">DISC</a>
            <a href="#" class="btn btn-primary">مزاج شناسي</a>
            <a href="#" class="btn btn-primary">گروه هاي خوني</a>
        </div>
    </div>
</header>



<div style="text-align: right" id="panel-content">

    <div style="background-color: #404040" class="right-panel">
        <h2><a href="../MBTI" title="تیپهای شخصیتی ‏MBTI">تیپهای شخصیتی ‏MBTI</a></h2>
        <ul>
            <li>
                <a href="ENFJ" title="تیپ شخصیتی ENFJ">ENFJ</a>
            </li>
            <li>
                <a href="ENFP" title="تیپ شخصیتی ENFP">ENFP</a>
            </li>
            <li>
                <a href="ENTJ" title="تیپ شخصیتی ENTJ">ENTJ</a>
            </li>
            <li>
                <a href="ENTP" title="تیپ شخصیتی ENTP">ENTP</a>
            </li>
            <li>
                <a href="ESFJ" title="تیپ شخصیتی ESFJ">ESFJ</a>
            </li>
            <li>
                <a href="ESFP" title="تیپ شخصیتی ESFP">ESFP</a>
            </li>
            <li>
                <a href="ESTJ" title="تیپ شخصیتی ESTJ">ESTJ</a>
            </li>
            <li>
                <a href="ESTP" title="تیپ شخصیتی ESTP">ESTP</a>
            </li>
            <li>
                <a href="INFJ" title="تیپ شخصیتی INFJ">INFJ</a>
            </li>
            <li>
                <a href="INFP" title="تیپ شخصیتی INFP">INFP</a>
            </li>
            <li>
                <a href="INTJ" title="تیپ شخصیتی INTJ">INTJ</a>
            </li>
            <li>
                <a href="INTP" title="تیپ شخصیتی INTP">INTP</a>
            </li>
            <li>
                <a href="ISFJ" title="تیپ شخصیتی ISFJ">ISFJ</a>
            </li>
            <li>
                <a href="ISFP" title="تیپ شخصیتی ISFP">ISFP</a>
            </li>
            <li>
                <a href="ISTJ" title="تیپ شخصیتی ISTJ">ISTJ</a>
            </li>
            <li>
                <a href="ISTP" title="تیپ شخصیتی ISTP">ISTP</a>
            </li>
            <li class="active">
                آزمون MBTI
            </li>
            <li>
                <a href="Relationships" title="روابط MBTI">روابط MBTI</a>
            </li>
            <li>
                <a href="About" title="درباره MBTI">درباره MBTI</a>
            </li>
        </ul>
    </div>

    <div style="text-align: right" id="left-panel">

        <h1>
            ⌘ آزمون MBTI
        </h1>

        <div id="breadcrumb">
            <div>
                <a href="../MBTI" title="تیپهای شخصیتی ‏MBTI">تیپهای شخصیتی ‏MBTI</a>
                <span>></span>
                آزمون MBTI
            </div>
        </div>

        <div id="content">
            <b>توجه</b>
            <p>
                برای پی بردن به شخصیت خود،
                در پاسخ به سؤالات گزینه ای را انتخاب کنید که ویژگیها و شخصیت واقعی شما را توصیف کند
                و نه ویژگیهایی که می خواهید داشته باشید و یا دیگران از شما توقع دارند.
                <br />

                پاسخ درست یا غلط وجود ندارد.
                به هیچ وجه گزینه ای را که در مورد شما صدق نمی کند، به این دلیل که فکر می کنید گزینه بهتری است انتخاب نکنید،
                چون در این صورت نتیجه بدست آمده مغایر با خود واقعی شما خواهد بود.
                پاسخهای شما فقط بیانگر چگونگی نگرش و نگاه شما به محیط اطراف و چگونگی تصمیم گیری شما در امور مختلف است.
                بنابراین صادقانه پاسخ دهید تا بتوانید به شخصیت واقعی خود پی ببرید.
                <br />

                اگر پاسخ سوالی را اصلا نمی دانید، یکی را انتخاب کنید.
                سوالات طوری طراحی شده که اشتباهات جزئی در نتیجه نهایی در نظر گرفته نمی شود.
            </p>
            <p>
                ابتدا اطلاعات زیر را، جهت یاری ما در تکمیل بانک اطلاعاتی وارد نمایید.
                <br />
                <br />
            </p>
            <form class="form-horizontal" action="/MBTI/Test" method="post">    <p>
                    <label for="Gender">جنسیت</label>
                    <span>(الزامی)</span>
                    <span class="field-validation-valid" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
                    <br />
                    <select class="tiny" data-val="true" data-val-required="جنسیت الزامی است!" id="Gender" name="Gender"><option value="">---</option>
                        <option value="false">مرد</option>
                        <option value="true">زن</option>
                    </select>
                </p>
                <p>
                    <label for="BirthDate">تاریخ تولد</label>
                    <br />
                    <span>سال</span>
                    <select class="tiny" id="BirthDate_Year" name="BirthDate.Year"><option value="1300">1300</option>
                        <option value="1301">1301</option>
                        <option value="1302">1302</option>
                        <option value="1303">1303</option>
                        <option value="1304">1304</option>
                        <option value="1305">1305</option>
                        <option value="1306">1306</option>
                        <option value="1307">1307</option>
                        <option value="1308">1308</option>
                        <option value="1309">1309</option>
                        <option value="1310">1310</option>
                        <option value="1311">1311</option>
                        <option value="1312">1312</option>
                        <option value="1313">1313</option>
                        <option value="1314">1314</option>
                        <option value="1315">1315</option>
                        <option value="1316">1316</option>
                        <option value="1317">1317</option>
                        <option value="1318">1318</option>
                        <option value="1319">1319</option>
                        <option value="1320">1320</option>
                        <option value="1321">1321</option>
                        <option value="1322">1322</option>
                        <option value="1323">1323</option>
                        <option value="1324">1324</option>
                        <option value="1325">1325</option>
                        <option value="1326">1326</option>
                        <option value="1327">1327</option>
                        <option value="1328">1328</option>
                        <option value="1329">1329</option>
                        <option value="1330">1330</option>
                        <option value="1331">1331</option>
                        <option value="1332">1332</option>
                        <option value="1333">1333</option>
                        <option value="1334">1334</option>
                        <option value="1335">1335</option>
                        <option value="1336">1336</option>
                        <option value="1337">1337</option>
                        <option value="1338">1338</option>
                        <option value="1339">1339</option>
                        <option value="1340">1340</option>
                        <option value="1341">1341</option>
                        <option value="1342">1342</option>
                        <option value="1343">1343</option>
                        <option value="1344">1344</option>
                        <option value="1345">1345</option>
                        <option value="1346">1346</option>
                        <option value="1347">1347</option>
                        <option value="1348">1348</option>
                        <option value="1349">1349</option>
                        <option value="1350">1350</option>
                        <option value="1351">1351</option>
                        <option value="1352">1352</option>
                        <option value="1353">1353</option>
                        <option value="1354">1354</option>
                        <option value="1355">1355</option>
                        <option value="1356">1356</option>
                        <option value="1357">1357</option>
                        <option value="1358">1358</option>
                        <option value="1359">1359</option>
                        <option selected="selected" value="1360">1360</option>
                        <option value="1361">1361</option>
                        <option value="1362">1362</option>
                        <option value="1363">1363</option>
                        <option value="1364">1364</option>
                        <option value="1365">1365</option>
                        <option value="1366">1366</option>
                        <option value="1367">1367</option>
                        <option value="1368">1368</option>
                        <option value="1369">1369</option>
                        <option value="1370">1370</option>
                        <option value="1371">1371</option>
                        <option value="1372">1372</option>
                        <option value="1373">1373</option>
                        <option value="1374">1374</option>
                        <option value="1375">1375</option>
                        <option value="1376">1376</option>
                        <option value="1377">1377</option>
                        <option value="1378">1378</option>
                        <option value="1379">1379</option>
                        <option value="1380">1380</option>
                        <option value="1381">1381</option>
                        <option value="1382">1382</option>
                        <option value="1383">1383</option>
                        <option value="1384">1384</option>
                        <option value="1385">1385</option>
                        <option value="1386">1386</option>
                        <option value="1387">1387</option>
                        <option value="1388">1388</option>
                        <option value="1389">1389</option>
                    </select>
                    <span>ماه</span>
                    <select class="small" id="BirthDate_Month" name="BirthDate.Month"><option selected="selected" value="00">---</option>
                        <option value="01">فروردین</option>
                        <option value="02">اردیبهشت</option>
                        <option value="03">خرداد</option>
                        <option value="04">تیر</option>
                        <option value="05">مرداد</option>
                        <option value="06">شهریور</option>
                        <option value="07">مهر</option>
                        <option value="08">آبان</option>
                        <option value="09">آذر</option>
                        <option value="10">دی</option>
                        <option value="11">بهمن</option>
                        <option value="12">اسفند</option>
                    </select>
                    <span>روز</span>
                    <select class="so-tiny" id="BirthDate_Day" name="BirthDate.Day"><option selected="selected" value="00">---</option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </p>
                <p>
                    <label for="BloodGroupID">گروه خونی</label>
                    <br />
                    <select class="tiny" data-val="true" data-val-number="The field گروه خونی must be a number." id="BloodGroupID" name="BloodGroupID"><option selected="selected" value="-1">---</option>
                        <option value="1">O</option>
                        <option value="2">A</option>
                        <option value="3">B</option>
                        <option value="4">AB</option>
                    </select>
                </p>
                <p>
                    <label for="MaritalStatus">وضعیت تاهل</label>
                    <span>(الزامی)</span>
                    <span class="field-validation-valid" data-valmsg-for="MaritalStatus" data-valmsg-replace="true"></span>
                    <br />
                    <select class="small" data-val="true" data-val-required="وضعیت تاهل الزامی است!" id="MaritalStatus" name="MaritalStatus"><option value="">---</option>
                        <option value="false">مجرد</option>
                        <option value="true">متاهل</option>
                    </select>
                </p>
                <p>
                    <label for="EducationDegreeID">تحصیلات</label>
                    <span>(الزامی)</span>
                    <span class="field-validation-valid" data-valmsg-for="EducationDegreeID" data-valmsg-replace="true"></span>
                    <br />
                    <select data-val="true" data-val-number="The field تحصیلات must be a number." data-val-required="تحصیلات الزامی است!" id="EducationDegreeID" name="EducationDegreeID"><option value="-1">---</option>
                        <option value="1">زیر دیپلم</option>
                        <option value="2">دیپلم</option>
                        <option value="3">کاردانی</option>
                        <option value="4">کارشناسی</option>
                        <option value="5">کارشناسی ارشد</option>
                        <option value="6">دکترا</option>
                        <option value="7">فوق دکترا</option>
                    </select>
                </p>
                <div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
                    </ul></div>    <input class="btn btn-success" style="margin-top: 20px" type="submit" value="شروع" title="شروع تست" />
            </form>
            <div style="margin-top: 40px" class="resource-link">
                <a href="Resources" title="مشاهده منابع" target="_blank">منابع</a>
            </div>


        </div>
    </div>
</div>
<footer>

</footer>

</body>
</html>
