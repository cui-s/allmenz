<!DOCTYPE html>
<html>
<head>
    <title>「ALLMENZ」へよこそう</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="http://tan-c.allmenz.jp/app/views/css/main.css">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://tan-c.allmenz.jp/app/views/js/holder.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>  <!--jquery form validation-->
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
                <span class="am-h4"><a href="{{ URL::to('tag') }}">タグ</a></span>
            </div>

        </div>

        <div id="am-header-content-login" class="pull-right am-h4" data-toggle="modal" data-target="#modalLogIn">
            ログイン
        </div>

        <div id="am-header-content-user" class="pull-right">

            <a href="{{ URL::to('logout') }}"
               style="position:absolute;position: absolute;
                margin-left: -220px;
                background: red;
                padding: 5px;
                border-radius: 5px;">Logout</a>

            <a href="{{ URL::to('user/pinboard') }}" style="float:left;margin-right:130px">
                <div class="am-profile">
                    <div class="am-profile-badge" class="pull-right">
                        <span class="am-profile-gold"></span>
                        <span class="am-profile-gold-number">123</span>
                        <span class="am-profile-silver"></span>
                        <span class="am-profile-silver-number">123</span>
                        <span class="am-profile-bronze"></span>
                        <span class="am-profile-bronze-number">123</span>
                    </div>
                    <div class="am-profile-reputation" class="pull-right">1324</div>
                    <div class="am-profile-photo" class="pull-right"><img src="holder.js/35x35"></div>
                </div>
            </a>


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
                <div class="btn btn-primary btn-default" class="pull-right am-h4" data-toggle="modal" data-target="#modalAskQuestion">
                    質問
                </div>
            </form>

        </div>

    </div>
</div>
</div>


<div class="content" style="overflow: auto;">
@yield('content')
</div>


<div id="am-footer">
<div class="clearfix"></div>

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
                <span class="col-md-2"><i class="fa fa-facebook fa-inverse" style="font-size: 1.4em;"></i></span>
                <span class="col-md-10 am-modal-dialog-socialbar">Facebookでログインする</span>
            </button>

            <button type="button" class="btn btn-primary btn-block" style="background-color: #3498e1;" id="aw-twitterLogin">
                <a href="{{ URL::to('login_twitter') }}">
                    <span class="col-md-2"><i class="fa fa-twitter fa-inverse" style="font-size: 1.4em;"></i></span>
                    <span class="col-md-10 am-modal-dialog-socialbar">Twitterでログインする</span>
                </a>
            </button>

           <div class="am-modal-dialog-divider">まだは</div><hr>

           <form action="" id="am-modal-form-login" method="POST">
               <div class="input-group am-modal-dialog-input">
                   <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                   <input class="form-control" type="text" name="email" placeholder="メールアドレス">
               </div>
               <div class="input-group am-modal-dialog-input">
                   <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                   <input class="form-control" type="password" name="password" placeholder="パスワード">
               </div>
               <div class="checkbox">
                   <label>
                       <input type="checkbox"> ログイン情報を記憶する
                   </label>
               </div>
               <button type="submit" class="btn btn-success btn-block" id="normalLogin">ログイン</button>
           </form>
        </div>

        <div class="modal-footer">
                <div id="am-modal-modal-footer">
                    <span class="label label-primary">ALLMENZ</span>のアカウントはお持ちですか？
                    <div id="am-modal-dialog-login-label"><strong>新規登録</strong></div>
                </div>

            <form role="form" id="am-modal-form-signup" action="" method="POST" style="display: none;">

                <div class="input-group am-modal-dialog-input">
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    <input class="form-control" type="text" name="firstname" id="am-modal-register-firstname" placeholder="名">
                </div>
                <div class="input-group am-modal-dialog-input">
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    <input class="form-control" type="text" name="lastname" id="am-modal-register-lastname" placeholder="姓">
                </div>
                <div class="input-group am-modal-dialog-input">
                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    <input class="form-control" type="text" name="email" id="am-modal-register-email" placeholder="メールアドレス">
                </div>
                <div class="input-group am-modal-dialog-input">
                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                    <input class="form-control" type="password" name="password" id="am-modal-register-password" placeholder="パスワード">
                </div>
                <div class="input-group am-modal-dialog-input">
                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                    <input class="form-control" type="password" name="password_confirmation" id="am-modal-register-password_confirmation" placeholder="パスワードを確認する">
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


<!----------------------------------------------------------------------
| POST QUESTION MODAL
|---------------------------------------------------------------------->
<div class="modal fade" id="modalAskQuestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog am-modal-dialog-askquestion">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabelLogIn">質問する</h4>
        </div>

        <div class="modal-body">
            <div class="am-modal-askquestion-question">
                <div class="am-modal-askquestion-title">
                    <span>質問</span>
                    <div class="am-modal-askquestion-title-description">具体的に、関連性がある</div>
                </div>
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="聞きたいこと">
                </div>
                <div class="am-modal-askquestion-searchresult">
                    <table>
                        <tbody>
                            <tr>
                                <th>あなたの質問はすでに答えを持っている可能性<span class="am-modal-askquestion-searchresult-noofanswer">50答え</span></th>
                                <th><i class="fa fa-angle-down"></i></th>
                            </tr>
                            <tr>
                                <th>私も元来いくらその永続人というのの上で聴いたた?<span class="am-modal-askquestion-searchresult-noofanswer">10答え</span></th>
                                <th><i class="fa fa-angle-down"></i></th>
                            </tr>
                            <tr>
                                <th>必ずしも先刻と卒業者は現にこの成就だたじゃでしてならますをも下宿起っないでば、さっそくに
                                    はよったないなう? <span class="am-modal-askquestion-searchresult-noofanswer">10答え</span></th>
                                <th><i class="fa fa-angle-up"></i></th>
                            </tr>
                            <tr class="am-modal-askquestion-searchresult-expanded-oneitem">
                                <th>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-vote">56</div>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-name">谷口</div>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-details">
                                        <span>の私をいったい実蹂躙としてあれ世間が大話が許さようにとうとうご発展におくないでし
                                        て、はたしておそらく矛盾で始まったていしてないうます。。。</span>
                                        <span class="am-modal-askquestion-searchresult-expanded-oneitem-readmore">すべで読む>></span>
                                    </div>
                                </th>
                            </tr>
                            <tr class="am-modal-askquestion-searchresult-expanded-oneitem">
                                <th>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-vote">6</div>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-name">山本</div>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-details">
                                        <span>主義でしたものはもしほかがはたしてないうます。。</span>
                                        <span class="am-modal-askquestion-searchresult-expanded-oneitem-readmore">すべで読む>></span>
                                    </div>
                                </th>
                            </tr>
                            <tr class="am-modal-askquestion-searchresult-expanded-oneitem">
                                <th>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-vote">123</div>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-name">畑山</div>
                                    <div class="am-modal-askquestion-searchresult-expanded-oneitem-details">
                                        <span>てない主義でしたものはもしほかがはたしてないうますてないてない。。。</span>
                                        <span class="am-modal-askquestion-searchresult-expanded-oneitem-readmore">すべで読む>></span>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="am-modal-askquestion-searchresult-expanded-seeall">
                                        すべての答えを見る
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th>私も元来いくらその永続人というのの上で聴いたた?<span class="am-modal-askquestion-searchresult-noofanswer">10答え</span></th>
                                <th><i class="fa fa-angle-down"></i></th>
                            </tr>
                            <tr>
                                <th>道この責任私か影響がというお?<span class="am-modal-askquestion-searchresult-noofanswer">10答え</span></th>
                                <th><i class="fa fa-angle-down"></i></th>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="am-modal-askquestion-description">
                <div class="am-modal-askquestion-title">
                    <span>記述</span><div class="am-modal-askquestion-title-description-left">オプショナル</div>
                </div>
                <textarea class="form-control" placeholder="詳細。。。" rows="3"></textarea>
            </div>

            <div class="am-modal-askquestion-tag">
                <div class="am-modal-askquestion-title">
                    <span>タグ</span><div class="am-modal-askquestion-title-description">分野の専門家があなたの質問を参照するのはに</div>
                </div>
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="詳細。。。">
                </div>


                <div class="am-modal-askquestion-tag-guideline">
                    <i class="fa fa-sort-desc"></i>
                    <div class="am-modal-askquestion-tag-guideline-bgbox"></div>
                    <div class="am-modal-askquestion-tag-guideline-title">タグとは、</div>
                    <span>
                        ►既存の人気のあるタグを好む、新しいタグを作成しないように<br>
                        ►は、一般的な略語を使用する<br>
                        ►は同義語が含まれていません<br>
                        ►はダッシュのシングルワードに複数の単語を組み合わせるグ、タグごとに25文字<br>
                        ►タグ文字：[。-Z0-9+＃ - ]<br>
                        ►は、スペース、セミコロン、またはカンマでタグを区切る
                    </span>
                </div>

                <input type="checkbox" id="signUpNewsletterInput"><span class="am-h6">自分の質問を答える</span><br>
                <input type="checkbox" id="signUpNewsletterInput"><span class="am-h6">匿名にポスト</span>

            </div>
        </div>

        <div class="modal-footer am-modal-askquestion-footer">
            <div class="am-modal-askquestion-footer-social">
                シェアー：
                <i class="fa fa-twitter fa-fw "></i>
                <i class="fa fa-facebook fa-fw"></i>
            </div>
            <div class="am-modal-askquestion-footer-action">
                キャンセル<div class="btn btn-primary btn-sm">ポスト</div>
            </div>

        </div>

    </div>
</div>
</div>

</body>

<div id="fb-root"></div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://tan-c.allmenz.jp/app/views/js/facebook.js"></script>

@if (Auth::check())
<script>
$(document).ready(function(){
    $("#am-header-content-login").hide();
    $("#am-header-content-user").show();
});
</script>
@else
<script>
$(document).ready(function(){
    $("#am-header-content-login").show();
    $("#am-header-content-user").hide();
});
</script>
@endif

<script>

    // -------------------------------------------
    // Form validation
    // -------------------------------------------

    $("#am-modal-dialog-login-label").on("click", function(){
        $("#am-modal-form-signup").fadeIn('slow');
        $(".am-modal-dialog-signup .modal-body").css('display','none');
        $("#am-modal-modal-footer").css('display',"none");
        $(".am-modal-dialog-signup .modal-footer").css("border-top","0px");
    });

    //TODO: when modal dismissed return to the display state:

    $("#am-modal-form-login").validate({
        errorClass: "am-error",
        errorPlacement: function(error, element) {
            error.insertAfter(element.parent("div"));
        },
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 4
            }
        },

        messages: {
            email: {
                required: "メールアドレスが必要です",
                email: "有効なメールアドレスを入力してください"
            },
            password: {
                required: "パスワードが必要です",
                minlength: jQuery.format("少なくとも {0} 文字")
            }
        },

        submitHandler: function(form) {
            $.ajax("http://tan-c.allmenz.jp/public/login",{
                type: "post",
                data: $('#am-modal-form-login').serialize(),
                success: function(response) {
                    if(response=="OK")
                        LoginPostProcessing();
                    else
                        $("#am-modal-form-login").prepend("<span class='am-error-top'>"+response+"</span>");
                }
            });
        }

    });

    $("#am-modal-form-signup").validate({
        errorClass: "am-error",
        errorPlacement: function(error, element) {
            error.insertAfter(element.parent("div"));
        },
        rules: {
            firstname: {
                required: true
            },
            lastname:{
                required: true
            },
            email:{
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 4
            },
            password_confirmation: {
                equalTo: "#am-modal-register-password"
            }
        },

        messages: {
            firstname: {
                required: "姓が必要です"
            },
            lastname: {
                required: "名が必要です"
            },
            email: {
                required: "メールアドレスが必要です",
                email: "有効なメールアドレスを入力してください"
            },
            password: {
                required: "パスワードが必要です",
                minlength: jQuery.format("少なくとも {0} 文字")
            },
            password_confirmation: {
                equalTo: "パスワードが一致する必要があります"
            }
        },

        submitHandler: function(form) {
            $.ajax("http://tan-c.allmenz.jp/public/signup",{
                type: "post",
                data: $('#am-modal-form-signup').serialize(),
                success: function(response) {
                    LoginPostProcessing();
                }
            });
        }
    });



    // -------------------------------------------
    // SNS login function
    // -------------------------------------------
    $("#aw-facebookLogin").on("click", function(){
        Login(FBLoginProcess);
    });


    function FBLoginProcess(){
        $.ajax("http://tan-c.allmenz.jp/public/signup",{
            type: "post",
            data: {
                "email":JSON.parse(localStorage.userInfo).email,
                "name":JSON.parse(localStorage.userInfo).name,
                "method":"facebook"
            },
            success: function(response) {
                LoginPostProcessing();
            }
        });
    }

    function LoginPostProcessing(){
        $("#am-header-content-login").hide();
        $('#modalLogIn').modal('hide')
        $("#am-header-content-user").show();
    }
</script>

</html>

