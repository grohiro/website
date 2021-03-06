<?php
session_start();
$_SESSION['csrf.token'] = sha1(time()." ".microtime()." ".uniqid());
?>

<!DOCTYPE html>
<html lang="ja">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>株式会社グローク</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/growk-custom.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon" />

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">メニュー</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">株式会社グローク</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#business">業務内容</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">サービス</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#company">会社情報</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">お問い合わせ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="startup.html">スタートアップ向け</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Growing software</h1>
                <hr>
                <p>
                育てるようにソフトウェアを開発する。<br />
                私たちはシステムの導入後も成長するソフトウェアの開発を目指しています。
                </p>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="business">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">業務内容</h2>
                    <hr class="light">
                    <p class="text-faded">
                    コンピュータシステム・ソフトウェアの設計・開発、ウェブサイトの制作、ITに関するコンサルティング
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">サービス</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-mobile wow bounceIn text-primary"></i>
                        <h3>スマホアプリの開発</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-building wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>業務システムの開発</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>ウェブサービス開発</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>ECサイトの運用</h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="text-center">
                  <h3><a href="startup.html">スタートアップの開発支援について</a></h3>
              </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
    </aside>

    <section id="company">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">会社情報</h2>
                    <hr class="primary">
                    <p>
                    株式会社グローク
                    <p>
                    <p>
                    Growk, Inc
                    </p>
                    <img src="img/growk-logo.png" width="250" height="250" alt="グローク ロゴ" />
                    <p>
                    <address>東京都文京区千駄木 1-22-30 ヒルハウス601</address>
                    <a href="https://goo.gl/maps/ZDyG2jyLqAP2" target="_blank">地図を開く</a>
                    </p>
                    <p>
                    2012年3月 設立
                    </p>
                    <p>
                    主な事業内容: コンピュータソフトウェアの設計・開発
                    </p>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
    </aside>

    <section id="contact">
    <form class="form">
    <input type="hidden" id="csrfToken" name="csrfToken" value="<?php echo htmlspecialchars($_SESSION['csrf.token']); ?>" />
      <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">お問い合わせ</h2>
                返信のために本文にお名前、連絡先、メールアドレスをご記入ください。
                <div id="message-group" class="form-group">
                  <textarea id="message" name="" cols="30" rows="10" class="form-control"></textarea>
                  <span id="message-help" class="help-block"></span>
                </div>
                <input type="button" id="submitBtn" class="btn btn-primary" data-sending-text="送信中..." value="送信する" />
                <span id="result-text" class="help-block"></span>
            </div>
      </div>
    </form>
    </section>

    <footer role="contentinfo" id="footer">
    <div class="container">
      <a href="https://github.com/grohiro/" target="_blank"><img src="img/GitHub-Mark-32px.png" alt="Github" border="0" class="github-icon" /></a>
    </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script src="js/site/index.js"></script>

</body>

</html>
