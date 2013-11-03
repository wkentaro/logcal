<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="LogCal, Google Calendar, Gcal, Life Log, Life Style, Time Management">
  <meta name="description" content="Manage your time using LogCal with Google Calendar.">
  <meta property="og:title" content="LogCal">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Manage your time using LogCal with Google Calendar.">
  <meta property="og:url" content="http://logcal.ddo.jp/en/">
  <meta property="og:image" content="http://logcal.ddo.jp/en/assets/img/logcal_large.png">
  <meta property="og:site_name" content="LogCal">
  <title>LogCal - Time Calculation</title>
  <link rel="index" href="/" title="LogCal">
  <link rel="shortcut icon" href="/assets/ico/favicon.ico">
  <link href="./dist/css/bootstrap.css" type="text/css" rel="stylesheet">
  <script src="./assets/js/jquery.js"></script>
  <script src="./dist/js/bootstrap.js"></script>
  <style>
    #why-panel {
      background-color: #5cb85c;
      border-color: #7d7d7d;
      padding-top: 0;
      padding-bottom: 10px;
    }
    #how-panel {
      background-color: #5cb85c;
      border-color: #7d7d7d;
      padding-top: 0;
      padding-bottom: 25px;
    }
    #why-table-panel {
      background-color: #5cb85c;
      margin-bottom: 0;
      margin-top: 20px;
    }
    .label {
      border-color: #7d7d7d;
      border-style: solid;
      border-width: .1em;
    }
    body{
      padding-top: 20px;
      padding-bottom: 20px;
      /*background-color: #dddddd;*/
      background-color: #5cb85c;
    }
    .col-sm-12 h2 {
      color: #7d7d7d;
      font-size: 30px;
      padding-top: 20px;
      padding-bottom: 10px;
    }
    #header {
      border-bottom: 1px solid #7d7d7d;
    }
    .jumbotron h1 {
      color: #f8f8f8;
    }
    @media (min-width:767px) {
      .jumbotron h1 {
        font-size: 90px;
        color: #f8f8f8;
      }
      .jumbotron p {
        padding-top: 10px;
        padding-bottom: 10px;
      }
    }
    .navbar {
      border-radius:4px;
      margin-bottom: 20px;
    }
    .jumbotron {
      background-color: #5cb85c;
    }
  </style>
</head>
<body>
<div class="container" id="header">
  <div class="navbar navbar-default navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">LogCal</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">TOP</a></li>
        <li><a href="/">PREP</a></li>
        <li><a href="/">TIPS</a></li>
      </ul>
      <div class="navbar-form navbar-right">
        <a href="#" class="btn btn-primary">Sign in Google</a>
      </div>
    </div>
  </div>
  <div class="jumbotron">
    <div class="container">
      <h1 class="text-center">LogCal</h1>
      <p class="text-center">
        Calculate the time of your life log in Google Calendar
      </p>
      <p class="text-right">offering soon..&nbsp;&nbsp;&nbsp;please vote»&nbsp;&nbsp;&nbsp;
      <span class="pull-right"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://logcal.info" data-text="LogCal | Calculate the time of your life log in Google Calendar" data-size="large">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
    </div>
  </div>
</div>

<div class="container" id="why">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">Why LogCal?</h2>
      <div class="col-sm-4">
        <div class="panel panel-default" id="why-panel">
          <div class="container">
            <h3 class="text-center">Start Today.</h3>
            <p class="text-center"><b>LogCal</b> calculates the time with yesterday's data. You can start from anytime.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default" id="why-panel">
          <div class="container">
            <h3 class="text-center">Review Time Using.</h3>
            <p class="text-center">Using <b>LogCal</b>, review your life style and time using. Gasping the present situation is very important.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default" id="why-panel">
          <div class="container">
            <h3 class="text-center">Think the Time.</h3>
            <p>Be consious the time you have spent and are spending for your activity!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" id="how">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="text-center">How to Use?</h2>
      <div class="col-sm-4">
        <div class="panel panel-default" id="how-panel">
          <div class="container">
            <h3 class="text-center">step1</h3>
            <p class="text-center">Make Calendars you want LogCal to caluculate the time in Google Calendar.</p>
            <div class="text-center">
              <span class="label label-inverse">Life</span>
              <span class="label label-danger">School</span>
              <span class="label label-primary">Activity</span>
              <span class="label label-warning">Hobby</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default" id="how-panel">
          <div class="container">
            <h3 class="text-center">step2</h3>
            <p class="text-center">Input your life log in the Calendars.<br/>this may be hard, but try for a day!</p>
            <div class="panel panel-default" id="why-table-panel">
              <table class="table table-bordered">
                <tbody>
                  <tr><td class="text-center">10:00</td><td style="background-color:#428bca;border-color:transparent;">Event</td><td style="background-color:#d9534f;border-color:transparent;">Class</td></tr>
                  <tr><td class="text-center">11:00</td><td style="background-color:#428bca;border-color:transparent;"></td><td style="background-color:#d9534f;border-color:transparent;"></td></tr>
                  <tr><td class="text-center">12:00</td><td style="border-color:transparent;">Lunch</td><td style="background-color:#d9534f;border-color:transparent;"></td></tr>
                  <tr><td class="text-center">13:00</td><td style="background-color:#f0ad4e;border-color:transparent;">Movie</td><td style="border-color:transparent;">Lunch</td></tr>
                  <tr><td class="text-center">14:00</td><td style="background-color:#f0ad4e;border-color:transparent;"></td><td style="background-color:#d9534f;border-color:transparent;">Class</td></tr>
                  <tr><td class="text-center">15:00</td><td style="background-color:#f0ad4e;border-color:transparent;"></td><td style="background-color:#d9534f;border-color:transparent;"></td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-default" id="how-panel">
          <div class="container">
            <h3 class="text-center">step3</h3>
            <p class="text-center">Check the result!<br/>( the data is of yesterday. )</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
