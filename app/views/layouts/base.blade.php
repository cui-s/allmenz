<!-- Stored in app/views/layouts/master.blade.php -->


<!DOCTYPE html>
<html>
<head>
    <!--    this part needs to be templat-ized later-->
    <title>「ALLMENZ」へよこそう</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../app/views/css/main.css">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://tan-c.allmenz.jp/app/views/js/holder.js"></script>
</head>



<body>

    <div id="am-header"  class=" navbar-fixed-top" role="navigation">
        <div id="am-header-content">
            <div class="am-row">
                <div id="am-logo">
                    <i class="fa fa-flip-horizontal fa-pagelines"></i>
                </div>
                <div id="am-header-options">



                    <div class="btn-group am-header-content-option-item" id="am-header-explore">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-eye fa-fw am-header-icon"></i>
                            <span class="am-h3">EXPLORE</span>
                        </div>
                        <ul class="dropdown-menu" id="am-header-explore-dropdown">
                            <div class="col-md-4">
                                <div class="am-header-explore-dropdown-header">
                                    <i class="fa fa-star"></i>
                                    <span class="am-h4">注目</span>
                                </div>
                                <div class="am-header-explore-dropdown-featured-oneitem">
                                    <div class="am-header-explore-dropdown-featured-oneitem-img"></div>
                                    <div class="am-header-explore-dropdown-featured-oneitem-text">
                                        東京から25 キロメートルキ
                                        ロメートル以内京から25キ
                                        ロメート
                                    </div>
                                </div>
                                <div class="am-header-explore-dropdown-featured-oneitem">
                                    <div class="am-header-explore-dropdown-featured-oneitem-img"></div>
                                    <div class="am-header-explore-dropdown-featured-oneitem-text">
                                        東京 から 25 キロメートルキ
                                        ロメートル以内の最
                                    </div>
                                </div>
                                <div class="am-header-explore-dropdown-featured-oneitem">
                                    <div class="am-header-explore-dropdown-featured-oneitem-img"></div>
                                    <div class="am-header-explore-dropdown-featured-oneitem-text">
                                        ロメートル以内の最寄り店舗
                                    </div>
                                </div>
                                <div class="am-header-explore-dropdown-seeall">
                                    <div id="am-header-explore-dropdown-seeall-featured">
                                        <i class="fa fa-star"></i>
                                        <span>すべての注目</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="am-header-explore-dropdown-header">
                                    <i class="fa fa-clock-o"></i>
                                    <span class="am-h4">最新<span>
                                </div>
                                <div class="am-header-explore-dropdown-recent-oneitem-text">
                                    東京から25 キロメートルキロメートル以内京から25キ？
                                </div>
                                <div class="am-header-explore-dropdown-recent-oneitem-text">
                                    東京から25 キロメートルキロメートル以内京から25キ？
                                </div>
                                <div class="am-header-explore-dropdown-recent-oneitem-text">
                                    東京から25 キロメートルキロメートル以内京から25キ？
                                </div>
                                <div class="am-header-explore-dropdown-recent-oneitem-text">
                                    東京から25 キロメートルキロメートル以内京から25キ？
                                </div>
                                <div class="am-header-explore-dropdown-seeall">
                                    <div id="am-header-explore-dropdown-seeall-recent">
                                        <i class="fa fa-clock-o"></i>
                                        <span>すべての最新</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="am-header-explore-dropdown-header">
                                    <i class="fa fa-list"></i>
                                    <span class="am-h4">カテゴリ</span>
                                </div>
                                <div class="am-header-explore-dropdown-category-oneline">
                                    <div class="am-header-explore-dropdown-category-oneitem">
                                        <span>皮膚</span>
                                    </div>
                                    <div class="am-header-explore-dropdown-category-oneitem">
                                        <span>スキン</span>
                                    </div>
                                    <div class="am-header-explore-dropdown-category-oneitem">
                                        <span>ひげ</span>
                                    </div>
                                </div>
                                <div class="am-header-explore-dropdown-category-oneline">
                                    <div class="am-header-explore-dropdown-category-oneitem">
                                        <span>皮膚</span>
                                    </div>
                                    <div class="am-header-explore-dropdown-category-oneitem">
                                        <span>スキン</span>
                                    </div>
                                    <div class="am-header-explore-dropdown-category-oneitem">
                                        <span>ひげ</span>
                                    </div>
                                </div>
                                <div class="am-header-explore-dropdown-seeall">
                                    <div id="am-header-explore-dropdown-seeall-recent">
                                        <i class="fa fa-list"></i>
                                        <span>すべてのカテゴリ>?</span>
                                    </div>
                                </div>
                            </div>


                        </ul>
                    </div>

                    <div class="am-header-content-option-item">
                        <i class="fa fa-tags fa-fw am-header-icon"></i>
                        <span class="am-h4">タグ</span>
                    </div>

                </div>

<!--                <div id="am-header-content-login" class="pull-right am-h4" data-toggle="modal" data-target="#modalLogIn">-->
<!--                    ログイン-->
<!--                </div>-->




                <div id="am-header-content-user" class="pull-right">

                    <div class="btn-group">
                        <i class="fa fa-fw fa-signal am-header-icon dropdown-toggle" data-toggle="dropdown" style="margin-top:-3px"></i>
                        <ul class="dropdown-menu am-header-content-dropdown">
                            <div class="am-header-content-dropdown-header">
                                <span>受信箱</span>
                            </div>
                            <div class="am-header-content-dropdown-body">
                                <div class="am-header-content-dropdown-oneitem">
                                    <div class="col-md-1 am-header-content-dropdown-icon">
                                        <span class="glyphicon glyphicon-bullhorn"></span>
                                    </div>
                                    <div class="col-md-11 am-header-content-dropdown-content">
                                        <div class="am-header-content-dropdown-title">
                                            質問
                                        </div>
                                        <div class="am-header-content-dropdown-date am-h6">
                                            2014-02-03 04:50
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="am-header-content-dropdown-question am-h6">
                                            lorem ipsum とは?
                                        </div>
                                        <div class="am-header-content-dropdown-description am-h6">
                                            略してリプサム lipsum ともいうとは、出版、ウェブデザイン、グラフィックデ
                                            ザインなどの
                                        </div>
                                    </div>
                                </div>
                                <div class="am-header-content-dropdown-oneitem">
                                    <div class="col-md-1 am-header-content-dropdown-icon">
                                        <span class="glyphicon glyphicon-comment"></span>
                                    </div>
                                    <div class="col-md-11 am-header-content-dropdown-content">
                                        <div class="am-header-content-dropdown-title">
                                            答え
                                        </div>
                                        <div class="am-header-content-dropdown-date am-h6">
                                            2014-02-03 04:50
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="am-header-content-dropdown-question am-h6">
                                            lorem ipsum とは?
                                        </div>
                                        <div class="am-header-content-dropdown-description am-h6">
                                            略してリプサム lipsum ともいうとは、出版、ウェブデザイン、グラフィックデ
                                            ザインなどの
                                        </div>
                                    </div>
                                </div>
                                <div class="am-header-content-dropdown-oneitem">
                                    <div class="col-md-1 am-header-content-dropdown-icon">
                                        <span class="glyphicon glyphicon-comment"></span>
                                    </div>
                                    <div class="col-md-11 am-header-content-dropdown-content">
                                        <div class="am-header-content-dropdown-title">
                                            答え
                                        </div>
                                        <div class="am-header-content-dropdown-date am-h6">
                                            2014-02-03 04:50
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="am-header-content-dropdown-question am-h6">
                                            lorem ipsum とは?
                                        </div>
                                        <div class="am-header-content-dropdown-description am-h6">
                                            略してリプサム lipsum ともいうとは、出版、ウェブデザイン、グラフィックデ
                                            ザインなどの
                                        </div>
                                    </div>
                                </div>
                                <div class="am-header-content-dropdown-oneitem">
                                    <div class="col-md-1 am-header-content-dropdown-icon">
                                        <span class="glyphicon glyphicon-bullhorn"></span>
                                    </div>
                                    <div class="col-md-11 am-header-content-dropdown-content">
                                        <div class="am-header-content-dropdown-title">
                                            質問
                                        </div>
                                        <div class="am-header-content-dropdown-date am-h6">
                                            2014-02-03 04:50
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="am-header-content-dropdown-question am-h6">
                                            lorem ipsum とは?
                                        </div>
                                        <div class="am-header-content-dropdown-description am-h6">
                                            略してリプサム lipsum ともいうとは、出版、ウェブデザイン、グラフィックデ
                                            ザインなどの
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <i class="fa fa-fw fa-inbox am-header-icon dropdown-toggle" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu am-header-content-dropdown">
                            <div class="am-header-content-dropdown-header">
                                <span>達成</span>
                            </div>
                            <div class="am-header-content-dropdown-body">
                                <div class="am-header-content-dropdown-oneday">
                                    今日<i class="fa fa-chevron-right am-header-content-dropdown-oneday-icon"></i>
                                </div>

                                <div class="am-header-content-dropdown-oneday">
                                    昨日<i class="fa fa-chevron-down am-header-content-dropdown-oneday-icon"></i>
                                    <div class="am-header-content-dropdown-oneitem">
                                        <div class="clearfix"></div>
                                        <div class="col-md-3">
                                            <span class="am-tag">+5</span>
                                        </div>
                                        <div class="col-md-9 am-header-content-dropdown-content">
                                            <div class="am-header-content-dropdown-description am-h6">
                                                略してリプサム lipsum ともいうとは、出版、ウェブデザイン、グラフィックデ
                                                ザインなどの
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-header-content-dropdown-oneitem">
                                        <div class="col-md-3">
                                            <div class="am-badge">
                                                <span class="am-badge-gold"></span>
                                                <span class="am-h7">コスメングル</span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 am-header-content-dropdown-content">
                                            <div class="am-header-content-dropdown-description am-h6">
                                                略してリプサム lipsum ともいうとは、出版、ウェブデザイン、グラフィックデ
                                                ザインなどの
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="am-header-content-dropdown-oneday" style="margin-left: 14px;">
                                    昔<i class="fa fa-chevron-right am-header-content-dropdown-oneday-icon"></i>
                                </div>
                            </div>
                        </ul>
                    </div>



                    <form class="navbar-form" id="am-header-content-search" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary btn-default">質問</button>
                    </form>

                </div>

<!--                <div id="am-header-content-profile">-->
<!--                    <div id="am-header-content-profile-badge" class="pull-right">-->
<!--                        <span class="am-header-content-profile-gold"></span>-->
<!--                        <span class="am-header-content-profile-gold-number">123</span>-->
<!--                        <span class="am-header-content-profile-silver"></span>-->
<!--                        <span class="am-header-content-profile-silver-number">123</span>-->
<!--                        <span class="am-header-content-profile-bronze"></span>-->
<!--                        <span class="am-header-content-profile-bronze-number">123</span>-->
<!--                    </div>-->
<!--                    <div id="am-header-content-profile-reputation" class="pull-right">1324</div>-->
<!--                    <div id="am-header-content-profile-photo" class="pull-right"><img src="holder.js/35x35"></div>-->
<!--                </div>-->

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





    <!----------------------------------------------------------------------
    | SIGNUP MODAL
    |---------------------------------------------------------------------->
    <div class="modal fade" id="modalLogIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog am-modal-dialog-signup">
            <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabelLogIn">ログイン</h4>
               </div>
               <div class="modal-body">
                    <button type="button" class="btn btn-primary btn-block" style="background-color: #1867A0;" id="aw-facebookLogin">
                        <span class="col-md-2">
                            <i class="fa fa-facebook fa-inverse" style="font-size: 1.4em;"></i>
                        </span>
                        <span class="col-md-10 am-modal-dialog-socialbar">
                            Facebookでログインする
                        </span>
                    </button>

                    <button type="button" class="btn btn-primary btn-block" style="background-color: #3498e1;" id="aw-twitterLogin">
                        <span class="col-md-2">
                            <i class="fa fa-twitter fa-inverse" style="font-size: 1.4em;"></i>
                        </span>
                        <span class="col-md-10 am-modal-dialog-socialbar">
                            Twitterでログインする
                        </span>
                    </button>

                   <div class="am-modal-dialog-divider">まだは
                   </div>

                   <hr>


                   <div class="input-group am-modal-dialog-input">
                       <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                       <input class="form-control" type="text" placeholder="メールアドレス">
                   </div>
                   <div class="input-group am-modal-dialog-input">
                       <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                       <input class="form-control" type="password" placeholder="パスワード">
                   </div>
                   <div class="checkbox">
                       <label>
                           <input type="checkbox"> ログイン情報を記憶する
                       </label>
                   </div>

                   <button type="button" class="btn btn-success btn-block" id="normalLogin">ログイン</button>

<!--                    <form role="form" id="form-loginNormal">-->
<!--                        <hr>-->
<!--                        <input type="email" class="form-control" name="loginEmail" id="loginEmail" placeholder="Email">-->
<!--                        <br>-->
<!--                        <input type="password" class="form-control" name="loginPassword" id="loginPassword" placeholder="Password">-->
<!--                        <div class="checkbox">-->
<!--                            <label>-->
<!--                                <input type="checkbox"> ログイン情報を記憶する-->
<!--                            </label>-->
<!--                        </div>-->
<!--                        <br>-->
<!--                        <button type="button" class="btn btn-info btn-block" id="normalLogin">ログイン</button>-->
<!--                    </form>-->
                </div>

                <div class="modal-footer">
                    <div id="registerReminderMessage"><span class="label label-primary">ALLMENZ</span>のアカウントはお持ちですか？</div>
                    <div id="am-modal-register-label"><strong>新規登録</strong></div>


                    <form role="form" id="form-registrationNormal">

                        <div class="input-group am-modal-dialog-input">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input class="form-control" type="text" name="registerFirstName" id="registerFirstName" placeholder="名">
                        </div>
                        <div class="input-group am-modal-dialog-input">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input class="form-control" type="text" name="registerLastName" id="registerLastName" placeholder="姓">
                        </div>
                        <div class="input-group am-modal-dialog-input">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                            <input class="form-control" type="text" name="registerEmail" id="registerEmail" placeholder="メールアドレス">
                        </div>
                        <div class="input-group am-modal-dialog-input">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input class="form-control" type="text" name="registerPassword" id="registerPassword" placeholder="パスワード">
                        </div>
                        <div class="input-group am-modal-dialog-input">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input class="form-control" type="text" name="registerPasswordConfirm" id="registerPasswordConfirm" placeholder="パスワードを確認する">
                        </div>

                        <div class="checkbox" id="signUpNewsletterCheckbox">
                            <label>
                                <input type="checkbox" id="signUpNewsletterInput"><span class="am-h6">耳寄りなALLMENZニュースをお聞かせください！</span>
                            </label>
                        </div>
                        <div class="am-h6"><small>登録することで、ALLMENZのサービス利用規約、個人情報保護ポリシー, ゲスト返金ポリシー、ホスト保証規約に同意したことになります。</small></div>

                        <br>
                        <input class="btn btn-success btn-block submit" type="submit" value="登録" id="normalSignUp">
                    </form>


                </div>

            </div>
        </div>
    </div>

</body>


<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</html>

