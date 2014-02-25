<!-- Stored in app/views/layouts/master.blade.php -->


<!DOCTYPE html>
<html>
<head>
    <!--    this part needs to be templat-ized later-->
    <title>Basic Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../app/views/css/main.css">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>



<body>

    <div id="am-header"  class=" navbar-fixed-top" role="navigation">
        <div id="am-header-content">
            <div class="am-row">
                <div id="am-logo">
                    <i class="fa fa-flip-horizontal fa-pagelines"></i>
                </div>
                <div id="am-header-options">
                    <div class="am-header-content-option-item">
                        <i class="fa fa-eye am-header-icon"></i>
                        <span class="am-h4">EXPLORE</span>
                    </div>
                    <div class="am-header-content-option-item">
                        <i class="fa fa-question-circle am-header-icon"></i>
                        <span class="am-h4">質問</span>
                    </div>

                    <div class="am-header-content-option-item">
                        <i class="fa fa-tags am-header-icon"></i><span class="am-h4">タグ</span>
                    </div>
                </div>

                <div id="am-header-content-login" class="pull-right am-h4">ログイン
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        @yield('content')
    </div>


    <div id="am-footer">
        <div id="am-footer-content">
            <div class="am-row" id="am-footer-above">
                <div id="am-footer-biglogo"><i class="fa fa-user"></i></div>

                <div class="col-md-5">

                    <div id="am-footer-above-newsletter">
                        <span id="am-footer-above-newsletter-label">情報配信</span>

                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </div>

                </div>

                <div class="col-md-7">
                    <i class="fa fa-arrow-circle-down am-footer-icon pull-right am-footer-above-icon"></i>
                    <button type="button" class="btn btn-primary btn-sm pull-right">IOSアプリ</button>
                </div>

            </div>

            <div class="clearfix"></div>
            <hr>

            <div class="am-row" id="am-footer-below">
                <div class="col-lg-6">
                    会社概要 | 利用規約 | プライバシー | ヘルプ | 公式ブログ
                </div>
                <div class="col-lg-6 ">
                    <i class="fa fa-twitter-square am-footer-icon pull-right"></i>
                    <i class="fa fa-facebook-square am-footer-icon pull-right"></i>
                    <span class="pull-right">© ALLMENZ Corporation</span>
                </div>
            </div>
        </div>
    </div>



</body>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</html>

