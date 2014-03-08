@extends('layouts.base')

@section('content')
<div id="am-content">

<div class="am-non-index-spacer"></div>

<div class="am-container">
<div class="am-row">

<!----------------------------------------------------------------------
| USER PROFILE
|---------------------------------------------------------------------->
<div id="am-usermain-left">

    <div class="am-usermain-well">
        <div class="am-usermain-well-oneitem">
            <div id="am-usermain-well-profile-pic"></div>
            <div id="am-usermain-well-profile-name" class="am-h4">タンク</div>
            <div id="am-usermain-well-profile-description">ご自由に… blah</div>
            <div class="am-usermain-well-profile-list-oneitem am-h6">
                <i class="fa fa-map-marker fa-fw"></i>
                <span>23区</span>
            </div>
            <div class="am-usermain-well-profile-list-oneitem am-h6">
                <i class="fa fa-envelope fa-fw"></i>
                <span>miemie@gmail.com</span>
            </div>
            <div class="am-usermain-well-profile-list-oneitem am-h6">
                <i class="fa fa-clock-o fa-fw"></i>
                <span>2013-01-01 から</span>
            </div>
        </div>
        <div class="am-usermain-well-oneitem">
            <div class="am-usermain-well-profile-stats-oneitem">
                <div>23</div>
                <span>フォロワン</span>
            </div>
            <div class="am-usermain-well-profile-stats-oneitem">
                <div>13</div>
                <span>フォロワー</span>
            </div>
            <div class="am-usermain-well-profile-stats-oneitem">
                <div>23</div>
                <span>ポスト</span>
            </div>
        </div>

        <div class="am-usermain-well-oneitem">
            <a href="{{ URL::to('user/edit') }}">
                <div class="am-btn-mid-secondary">編集</div>
            </a>
        </div>

    </div>


    <div class="am-usermain-well">
        <div class="am-usermain-well-title">概要</div>
        <div class="am-usermain-well-summary-oneitem">
            <i class="fa fa-question am-usermain-well-profile-summary-oneitem-question"></i>
            <div>
                <strong>20408</strong><span>質問</span><br>
                <span>最近ポスト: 14-01-02 03:41PM</span>
            </div>
        </div>
        <div class="am-usermain-well-summary-oneitem">
            <i class="fa fa-pencil-square-o am-usermain-well-profile-summary-oneitem-answer"></i>
            <div>
                <strong>8123</strong><span>答え</span><br>
                <span>最近ポスト: 14-01-02 03:41PM</span>
            </div>
        </div>
        <div class="am-usermain-well-summary-oneitem">
            <i class="fa fa-thumbs-up am-usermain-well-profile-summary-oneitem-reputation"></i>
            <div>
                <strong>123</strong><span>レピュテーション</span><br>
                <span>最近ポスト: 14-01-02 03:41PM</span>
            </div>
        </div>
        <div class="am-usermain-well-summary-oneitem">
            <i class="fa fa-bookmark am-usermain-well-profile-summary-oneitem-badge"></i>
            <div>
                <strong>23</strong><span>バッジ</span><br>
                <span>最近ポスト: 14-01-02 03:41PM</span>
            </div>
        </div>
        <div class="am-usermain-well-summary-oneitem">
            <i class="fa fa-tags am-usermain-well-profile-summary-oneitem-tag"></i>
            <div>
                <strong>583</strong><span>タグ</span><br>
                <span>最近ポスト: 14-01-02 03:41PM</span>
            </div>
        </div>
        <div class="am-usermain-well-summary-oneitem">
            <i class="fa fa-flag am-usermain-well-profile-summary-oneitem-vote"></i>
            <div>
                <strong>3</strong><span>投票</span><br>
                <span>最近ポスト: 14-01-02 03:41PM</span>
            </div>
        </div>


    </div>

    <div class="am-usermain-well">
        <div class="am-usermain-well-title">ピンボード</div>
        <div class="am-usermain-well-oneitem">
            <span>種類で</span>
            <div class="am-usermain-well-pinboard-typebar">
                <div class="am-usermain-well-pinboard-typebar-oneitem">カテゴリ</div>
                <div class="am-usermain-well-pinboard-typebar-oneitem">タグ</div>
                <div class="am-usermain-well-pinboard-typebar-oneitem">すべて</div>
            </div>
        </div>
        <div class="am-usermain-well-oneitem">
            <span>カテゴリで</span>
            <ul class="fa-ul am-usermain-well-pinboard-list">
                <li><i class="fa-li fa fa-square"></i><span>すべて</span></li>
                <li><i class="fa-li fa fa-check-square"></i><span>カテゴリ</span></li>
                <li><i class="fa-li fa fa-square"></i><span>タグ</span></li>
            </ul>
        </div>
        <div class="am-usermain-well-oneitem">
            <span>タグで</span>
            <span class="am-tag-small">トーナ<span class="glyphicon glyphicon-remove"></span></span>
            <span class="am-tag-small">トーナケア<span class="glyphicon glyphicon-remove"></span></span>
            <span class="am-tag-small">メンズトーナケア<span class="glyphicon glyphicon-remove"></span></span>
            <span class="am-tag-small">メンズ<span class="glyphicon glyphicon-remove"></span></span>
            <span class="am-tag-small">ケア<span class="glyphicon glyphicon-remove"></span></span>
        </div>
    </div>

    <div class="am-usermain-well">
        <div class="am-usermain-well-title">ヘルプ</div>
        <div class="am-usermain-well-help-oneitem">
            <i class="fa fa-book fa-fw"></i>
            <div class="am-btn-mid-secondary">マニュアル</div>
        </div>
        <div class="am-usermain-well-help-oneitem">
            <i class="fa fa-thumbs-o-up fa-fw"></i>
            <div class="am-btn-mid-primary">バッジ</div>
        </div>


    </div>

</div>


<div id="am-usermain-right">
    @yield('content_user_right')
</div>
</div>
</div>
</div>

</div>

@stop