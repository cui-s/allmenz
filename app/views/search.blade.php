@extends('layouts.base')

@section('content')
<div id="am-content">

<div class="am-non-index-spacer"></div>

<div class="am-container">
<div class="am-row">

<div class="am-title-bar">
    <div class="am-title am-h0">
        捜索
    </div>

    <div id="am-search-input">
        <div class="form-group" id="am-search-input-box">
            <input type="text" class="form-control" placeholder="何をしりたい？。。。">
        </div>

        <div class="btn btn-primary" id="am-search-go">GO</div>
        <div class="btn btn-primary">高度捜索</div>
    </div>


    <div id="am-search-result-number" class="am-h3">6,354 結果</div>

    <ul class="am-title-bar-tab nav nav-tabs" id="am-search-result-content">
        <li class="pull-right"><a href="#hot" data-toggle="tab">HOT</a></li>
        <li class="active pull-right"><a href="#relevance" data-toggle="tab">関連</a></li>
        <li class="pull-right"><a href="#latest" data-toggle="tab">最新</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        <div class="tab-pane active" id="relevance">
            <div class="am-search-oneitem">
                <div class="am-search-oneitem-stats">
                    <div class="am-search-oneitem-stats-oneitem">
                        <span class="glyphicon glyphicon-flag"></span>
                        <span class="am-search-oneitem-stats-oneitem-number">527</span>
                        <span>投票</span>
                    </div>
                    <div class="am-search-oneitem-stats-oneitem">
                        <span class="glyphicon glyphicon-edit"></span>
                        <span class="am-search-oneitem-stats-oneitem-number">527</span>
                        <span>回答</span>
                    </div>
                </div>
                <div class="am-qnacommon-oneitem-content">
                    <div class="am-qnacommon-oneitem-title am-h4">
                        ウォーズウォースをしかし岡田さんにまたいろいろなりなのなけれうた。
                    </div>
                    <div class="am-qnacommon-oneitem-details">
                        19世紀以降、西洋諸国の影響がアジア、アフリカ等へも広まるにつれて、当時の西洋諸国の髪形が広く普及するようになる。
                        男性の髪型は、比較的短く又は長い場合は結髪する等して、活動の邪魔にならないようになされることが多い。他方、女性の
                        髪は長いことが比較的多い。
                    </div>
                    <div class="am-qnacommon-oneitem-tag">
                        <div class="am-tag">#眉</div>
                        <div class="am-tag">#メンクアップ</div>
                        <div class="am-tag">#美容液</div>
                    </div>

                    <div class="am-profile-simplified pull-right">
                        <span class="am-profile-name am-h6">タンク</span>
                        <span class="am-profile-pasttime">３時間前</span>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>

            <div class="am-search-oneitem">
                <div class="am-search-oneitem-stats">
                    <div class="am-search-oneitem-stats-oneitem">
                        <span class="glyphicon glyphicon-flag"></span>
                        <span class="am-search-oneitem-stats-oneitem-number">527</span>
                        <span>投票</span>
                    </div>
                    <div class="am-search-oneitem-stats-oneitem">
                        <span class="glyphicon glyphicon-edit"></span>
                        <span class="am-search-oneitem-stats-oneitem-number">527</span>
                        <span>回答</span>
                    </div>
                </div>
                <div class="am-qnacommon-oneitem-content">
                    <div class="am-qnacommon-oneitem-title am-h4">
                        ウォーズウォースをしかし岡田さんにまたいろいろなりなのなけれうた。
                    </div>
                    <div class="am-qnacommon-oneitem-details">
                        19世紀以降、西洋諸国の影響がアジア、アフリカ等へも広まるにつれて、当時の西洋諸国の髪形が広く普及するようになる。
                        男性の髪型は、比較的短く又は長い場合は結髪する等して、活動の邪魔にならないようになされることが多い。他方、女性の
                        髪は長いことが比較的多い。
                    </div>
                    <div class="am-qnacommon-oneitem-tag">
                        <div class="am-tag">#眉</div>
                        <div class="am-tag">#メンクアップ</div>
                        <div class="am-tag">#美容液</div>
                    </div>

                    <div class="am-profile-simplified pull-right">
                        <span class="am-profile-name am-h6">タンク</span>
                        <span class="am-profile-pasttime">３時間前</span>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>


            <div class="am-search-oneitem">
                <div class="am-search-oneitem-stats">
                    <div class="am-search-oneitem-stats-oneitem">
                        <span class="glyphicon glyphicon-flag"></span>
                        <span class="am-search-oneitem-stats-oneitem-number">527</span>
                        <span>投票</span>
                    </div>
                    <div class="am-search-oneitem-stats-oneitem">
                        <span class="glyphicon glyphicon-edit"></span>
                        <span class="am-search-oneitem-stats-oneitem-number">527</span>
                        <span>回答</span>
                    </div>
                </div>
                <div class="am-qnacommon-oneitem-content">
                    <div class="am-qnacommon-oneitem-title am-h4">
                        ウォーズウォースをしかし岡田さんにまたいろいろなりなのなけれうた。
                    </div>
                    <div class="am-qnacommon-oneitem-details">
                        19世紀以降、西洋諸国の影響がアジア、アフリカ等へも広まるにつれて、当時の西洋諸国の髪形が広く普及するようになる。
                        男性の髪型は、比較的短く又は長い場合は結髪する等して、活動の邪魔にならないようになされることが多い。他方、女性の
                        髪は長いことが比較的多い。
                    </div>
                    <div class="am-qnacommon-oneitem-tag">
                        <div class="am-tag">#眉</div>
                        <div class="am-tag">#メンクアップ</div>
                        <div class="am-tag">#美容液</div>
                    </div>

                    <div class="am-profile-simplified pull-right">
                        <span class="am-profile-name am-h6">タンク</span>
                        <span class="am-profile-pasttime">３時間前</span>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>


        </div>

        <div class="tab-pane" id="hot">
                .1.2.31.23
        </div>

        <div class="tab-pane" id="latest">
                12312321
        </div>

    </div>




</div>
</div>
</div>
</div>


</div>

@stop