@extends('layouts.user')

@section('content_user_right')


            <div class="am-title-bar">
                <div class="am-title am-h0">
                    プロファイル
                </div>

                <ul class="am-title-bar-tab nav nav-tabs">
                    <li class="active pull-right"><a href="#edit" data-toggle="tab">編集</a></li>
                    <li class="pull-right"><a href="#pinboard" data-toggle="tab">ピンボード</a></li>
                    <li class="pull-right"><a href="#overview" data-toggle="tab">活動一覧</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="edit">
                        <div id="am-useredit-newsletter">
                            <div id="am-useredit-newsletter-header"><strong>週刊メールマガジン</strong></div>
                            <div id="am-useredit-newsletter-content" class="am-h6">
                                毎週電子メールで登録：<br><br>

                                - トップ質問と回答<br>
                                - 重要なアナウンス<br>
                                - 未回答の質問<br>
                                - 例のニュースレターを参照してください<br>
                            </div>
                            <div id="am-useredit-newsletter-subscribe">
                                <i class="fa fa-square"></i>
                                <span><strong>週刊ニュースレターを送る</strong></span>
                            </div>

                        </div>

                        <div class="am-useredit-form">
                            <div class="am-useredit-form-oneitem">
                                <span>表示名前</span>
                                <input type="text" class="form-control" id="inputEmail3" placeholder="タンク。。。">
                            </div>
                            <div class="am-useredit-form-oneitem">
                                <span>メール</span>
                                <input type="text" class="form-control" id="inputEmail3" placeholder="tanchen@gmail.com">
                            </div>
                            <div class="am-useredit-form-oneitem">
                                <span>実名</span>
                                <input type="text" class="form-control" id="inputEmail3" placeholder="みえみえみえ...">
                            </div>

                            <div class="am-useredit-form-oneitem">
                                <span>住所</span>
                                <input type="text" class="form-control" id="inputEmail3" placeholder="東京都、２３区">
                            </div>

                            <div class="am-useredit-form-oneitem">
                                <span>誕生日</span>
                                <input type="text" class="form-control" id="inputEmail3" placeholder="YYYY/MM/DD, 年齢の表示のためだけ">
                            </div>
                            <div class="am-useredit-form-oneitem">
                                <span>自己紹介</span>
                                <div class="form-control" id="am-useredit-form-editor"></div>
                            </div>
                        </div>



                    </div>



                    <div class="tab-pane" id="pinboard">

                    </div>


                    <div class="tab-pane" id="overview">
                        asdfasd
                    </div>

                </div>
            </div>


    <div class="am-title-bar">
        <div class="am-title am-h0">
            選好
        </div>

        <ul class="am-title-bar-tab nav nav-tabs">
            <li class="active pull-right"><a href="#notification" data-toggle="tab">通知</a></li>
            <li class="pull-right"><a href="#favtag" data-toggle="tab">選好のタグ</a></li>
            <li class="pull-right"><a href="#updates" data-toggle="tab">更新</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="notification">
                <p><strong>メールの設定</strong></p>
                <div class="am-useredit-form">
                    <div class="am-useredit-form-oneitem">
                        <span style="width: 20%;">メールアドレス</span>
                        <input type="text" class="form-control" id="inputEmail3" placeholder="mie。。。">
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="favtag">
                1
            </div>
            <div class="tab-pane" id="updates">
                2
            </div>

        </div>
    </div>

@stop


