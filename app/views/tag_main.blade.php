@extends('layouts.base')

@section('content')
<div id="am-content">

    <div class="am-non-index-spacer"></div>
    <!----------------------------------------------------------------------
    | CATEGORY
    |---------------------------------------------------------------------->
    <div id="am-index-category">
        <div class="am-container">
            <div class="am-row">
                <div class="am-title-bar">
                    <div class="am-title am-h0">
                        タグ
                    </div>

                    <ul class="am-title-bar-tab nav nav-tabs">
                        <li class="pull-right"><a href="#home" data-toggle="tab">おまかせ表示</a></li>
                        <li class="active pull-right"><a href="#profile" data-toggle="tab">カテゴリで表示</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div class="tab-pane" id="home">

                            <div id="am-tagcommon-description">
                                <span class="am-h3">
                                タグは、他の同様の質問であなたの質問を分類し、キーワードやラベルである。
                                右のタグを使用すると、それが簡単に他の人が見つけ、あなたの質問に答えるよう
                                になります。
                                </span>
                            </div>

                            <div id="am-tagcommon-searchbar">
                                <div id="am-tagcommon-searchbar-backspace"></div>
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="捜索...">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane active" id="profile">
                            <div id="am-tagcommon-description">
                                <span class="am-h3">
                                タグは、他の同様の質問であなたの質問を分類し、キーワードやラベルである。
                                右のタグを使用すると、それが簡単に他の人が見つけ、あなたの質問に答えるよう
                                になります。
                                </span>

                            </div>
                            <div id="am-taglist-categorylist" class="am-h4">
                                <div class="am-tagcommon-categorylist-oneitem">すべて</div>
                                <div class="am-tagcommon-categorylist-oneitem">スキン</div>
                                <div class="am-tagcommon-categorylist-oneitem active">体毛</div>
                                <div class="am-tagcommon-categorylist-oneitem">コスメ</div>
                                <div class="am-tagcommon-categorylist-oneitem">ひげ</div>
                                <div class="am-tagcommon-categorylist-oneitem">オーファンタグ</div>
                                <div class="am-tagcommon-categorylist-search">
                                    <input type="text" class="form-control" placeholder="捜索...">
                                </div>
                            </div>

                            <div id="am-taglist-content">
                                <div class="am-taglist-content-onerow">
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
<!--                                            <div class="am-taglist-content-oneitem-badge-img"></div>-->
                                            <span class="am-h4">#美容液</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x111</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
<!--                                            <div class="am-taglist-content-oneitem-badge-img"></div>-->
                                            <span class="am-h4">#メイクアップ</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x43</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
                                            <div class="am-taglist-content-oneitem-badge-img am-h4"></div>
                                            <span class="am-h4">#眉</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x43131</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>
                                </div>

                                <div class="am-taglist-content-onerow">
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
                                            <div class="am-taglist-content-oneitem-badge-img"></div>
                                            <span class="am-h4">#美容液</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x111</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
                                            <div class="am-taglist-content-oneitem-badge-img"></div>
                                            <span class="am-h4">#メイクアップ</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x43</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
                                            <div class="am-taglist-content-oneitem-badge-img am-h4"></div>
                                            <span class="am-h4">#眉</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x43131</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>
                                </div>



                                <div class="am-taglist-content-onerow">
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
                                            <div class="am-taglist-content-oneitem-badge-img am-h4"></div>
                                            <span class="am-h4">#眉</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x43131</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
<!--                                            <div class="am-taglist-content-oneitem-badge-img"></div>-->
                                            <span class="am-h4">#美容液</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x111</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>
                                    <div class="col-md-4 am-taglist-content-oneitem">
                                        <div class="am-taglist-content-oneitem-badge">
<!--                                            <div class="am-taglist-content-oneitem-badge-img"></div>-->
                                            <span class="am-h4">#メイクアップ</span>
                                        </div>
                                        <div class="am-taglist-content-oneitem-badge-count am-h4">x43</div>
                                        <div class="clearfix"></div>
                                        <div class="am-taglist-content-oneitem-description">
                                            眉毛は顔面に左右一対あり、まぶたの上の、目の上にそれに沿って隆起する部分に目の幅とほぼ同
                                            じくらいにわたって生えている体毛である。一般の体毛と異なり...
                                        </div>
                                        <div class="am-taglist-content-oneitem-stats am-h6">今日738ポスト , 今週は4427 </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@stop