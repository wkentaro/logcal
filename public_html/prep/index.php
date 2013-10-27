<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="LogCal, ログカル, Googleカレンダー, ライフログ, ライフスタイル, 時間管理">
<meta name="description" content="Googleカレンダーでライフログ、LogCalでライフ時間管理をしよう！">
<meta property="og:title" content="LogCal">
<meta property="og:type" content="website">
<meta property="og:description" content="Googleカレンダーでライフログ、LogCalでライフ時間管理をしよう！">
<meta property="og:url" content="http://logcal.ddo.jp">
<meta property="og:image" content="http://logcal.ddo.jp/assets/img/logcal_large.png">
<meta property="og:site_name" content="LogCal">
<title>ログカル｜LogCal- ログで時間管理</title>
<link rel="index" href="/" title="LogCal">
<link rel="shortcut icon" href="favicon.ico">
<link href="../assets/css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen">
<link href="../assets/css/docs.css" type="text/css" rel="stylesheet">
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/holder.js"></script>
<script src="../assets/js/application.js"></script>
<script src="../assets/js/widgets.js"></script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-42819052-1']);
_gaq.push(['_trackPageview']);
(function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script>
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<a class="navbar-brand" href="..">LogCal</a>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="nav-collapse collapse navbar-responsive-collapse">
<ul class="nav navbar-nav">
<li><a href="..">Home</a></li>
<li class="active"><a href=".">準備をしよう</a></li>
<li><a href="../tips/">Tips</a></li>
</ul>
<ul class="nav navbar-nav pull-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Language</a>
<ul class="dropdown-menu">
<li><a href="../en/">英語</a></li>
<li><a href="../zh/">中国語</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>

<div class="container bs-docs-container">
<div class="row">
<div class="col-lg-3">
<div class="bs-sidebar affix">
<ul class="nav bs-sidenav">
<li><a href="#account">Googleアカウントを作る</a></li>
<li><a href="#calendars">カレンダーを作る</a></li>
<li><a href="#events">予定を入力する</a></li>
<li><a href="#logcal">ログカルで確認する</a></li>
</ul>
</div>
</div>
<div class="col-lg-9">
<div class="bs-docs-section">
<div class="page-header">
<h1 id="account">Googleアカウントを作る</h1>
</div>
<p class="lead">まずはGoogleアカウントを作りましょう。</p>
<p><a href="https://accounts.google.com/SignUp?continue=http%3A%2F%2Fwww.google.com%2F%3Fhl%3Dja&hl=ja">アカウント作成ページ</a>でアカウントを作成してください。</p>
<div class="bs-example">
<div class="row">
<div class="col-lg-3">
<a href="https://accounts.google.com/SignUp?continue=http%3A%2F%2Fwww.google.com%2F%3Fhl%3Dja&hl=ja">
<img src="../assets/img/account_m_demo.png" class="img-responsive demo-m-collapse">
</a>
</div>
<div class="col-lg-9">
<a href="https://accounts.google.com/SignUp?continue=http%3A%2F%2Fwww.google.com%2F%3Fhl%3Dja&hl=ja">
<img src="../assets/img/account_demo.png" class="img-responsive demo-collapse">
</a>
</div>
</div>
</div>
</div>
<div class="bs-docs-section">
<div class="page-header">
<h1 id="calendars">カレンダーを作る</h1>
</div>
<p class="lead">ログを分けるカレンダーをGoogleカレンダーに追加しましょう。</p>
<p>追加するカレンダーの名前を入力し、ボタンを押して作成してください。<br/>デフォルトのカレンダー名は変更可能です。また、空欄のカレンダーは追加されません。</p>
<div class="bs-example">
<form method="POST" class="form-horizontal" action="createcal/">
<div class="form-group">
<label for="inputCal" class="col-lg-2 control-label">カレンダー1</label>
<div class="col-lg-4">
<input type="text" name="cal1" class="form-control" id="inputCal" value="ライフ">
</div>
</div>
<div class="form-group">
<label for="inputCal" class="col-lg-2 control-label">カレンダー2</label>
<div class="col-lg-4">
<input type="text" name="cal2" class="form-control" id="inputCal" value="スクール">
</div>
</div>
<div class="form-group">
<label for="inputcal" class="col-lg-2 control-label">カレンダー3</label>
<div class="col-lg-4">
<input type="text" name="cal3" class="form-control" id="inputCal" value="アクティビティ">
</div>
</div>
<div class="form-group">
<label for="inputcal" class="col-lg-2 control-label">カレンダー4</label>
<div class="col-lg-4">
<input type="text" name="cal4" class="form-control" id="inputCal" value="ホビー">
</div>
</div>
<div class="form-group">
<div class="col-offset-2 col-lg-10">
<button type="submit" class="btn btn-primary">カレンダーを作る</button>
</div>
</div>
</form>
</div>
</div>
<div class="bs-docs-section">
<div class="page-header">
<h1 id="events">予定を入力する</h1>
</div>
<p class="lead">作成したカレンダーに予定を入力しましょう。</p>
<p><a href="https://www.google.com/calendar/render?tab=wc">Googleカレンダー</a>にログを書き込みます。</p>
<div class="bs-example">
<div class="row">
<div class="col-lg-3">
<img src="../assets/img/cal_m_demo.png" class="img-responsive demo-m-collapse">
</div>
<div class="col-lg-9">
<img src="../assets/img/cal_demo.png" class="img-responsive demo-collapse">
</div>
</div>
</div>
</div>
<div class="bs-docs-section">
<div class="page-header">
<h1 id="logcal">ログカルで確認する</h1>
</div>
<p class="lead">ログカルで時間の計算結果を確認しましょう。</p>
<p><a href="http://logcal.ddo.jp/logcal.php">こちら</a>で確認できます。</p>
<div class="bs-example">
<div class="row">
<div class="col-lg-3">
<img src="../assets/img/logcal_m_demo.png" class="img-responsive demo-m-collapse">
</div>
<div class="col-lg-9">
<img src="../assets/img/logcal_demo.png" class="img-responsive demo-collapse">
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container">
<footer class="footer-logcal">
Created by Kentaro Wada
©2013 UT Startup Gym
</footer>
</div>

</body>
</html>

