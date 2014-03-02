@extends('layouts.base')

@section('content')
<div id="am-content">

    <div class="am-container">
        <div class="am-row">


            <div class="am-title-bar">
                <div class="am-title am-h0">
                    活動一覧
                </div>

                <ul class="am-title-bar-tab nav nav-tabs">
                    <li class="pull-right"><a href="#edit" data-toggle="tab">編集</a></li>
                    <li class="pull-right"><a href="#pinboard" data-toggle="tab">ピンボード</a></li>
                    <li class="active pull-right"><a href="#overview" data-toggle="tab">活動一覧<span class="am-number-badge">23</span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="edit">
                    </div>

                    <div class="tab-pane" id="pinboard">
                    </div>


                    <div class="active tab-pane" id="overview">
                        <div id="am-useractivity-left">
                            <div id="am-useractivity-optionbar">

                                <div class="am-useractivity-optionbar-oneitem" id="am-useractivity-optionbar-post">ポスト</div>
                                <div class="am-useractivity-optionbar-oneitem-bg"></div>
                                <div class="am-useractivity-optionbar-oneitem" id="am-useractivity-optionbar-answer">こたえ</div>
                                <div class="am-useractivity-optionbar-oneitem-bg"></div>
                                <div class="am-useractivity-optionbar-oneitem" id="am-useractivity-optionbar-badge">バッジ</div>
                                <div class="am-useractivity-optionbar-oneitem-bg"></div>
                                <div class="am-useractivity-optionbar-oneitem" id="am-useractivity-optionbar-reputation">レーフ</div>
                                <div class="am-useractivity-optionbar-oneitem-bg"></div>
                            </div>

                            <div id="am-useractivity-timeline">
                                <div class="am-useractivity-daybox" id="am-useractivity-timeline-today">今日</div>
                                <span class="am-useractivity-daybox-bg"></span>
                                <div class="am-useractivity-daybox" id="am-useractivity-timeline-yday">昨日</div>
                                <span class="am-useractivity-daybox-bg"></span>
                                <div class="am-useractivity-daybox" id="am-useractivity-timeline-createday">2014-01-01</div>
                                <span class="am-useractivity-daybox-bg"></span>
                            </div>

                            <div id="am-useractivity-content">
                                <div class="am-useractivity-content-oneitem">
                                    <div class="am-useractivity-content-oneitem-stamp">
                                        <div class="am-useractivity-content-oneitem-stamp-time">12:00PM</div>
                                        <div class="am-useractivity-content-oneitem-stamp-logo"><i class="fa fa-pencil-square-o"></i></div>
                                        <div class="am-useractivity-content-oneitem-stamp-logo-bg"></div>
                                        <div class="am-triangle"></div>
                                    </div>
                                    <div class="am-useractivity-content-oneitem-content">
                                        <div class="am-useractivity-content-oneitem">
                                            <div class="am-useractivity-content-oneitem-photo"></div>
                                            <div class="am-useractivity-content-oneitem-description">タンクは スキン でポストしました</div>
                                            <div class="am-useractivity-content-oneitem-question-title">ウォーズウォースをしかし岡田さんに
                                                またいろいろなりなのなけれうた？
                                            </div>
                                            <div class="am-useractivity-content-oneitem-question-detail">
                                                19世紀以降、西洋諸国の影響がアジア、アフリカ等へも
                                                広まるにつれて、当時の西洋諸国の髪形が広く普及する
                                                ようになる。男性の髪型は、比較的短く又は長い場合は
                                                結髪する等して、活動の邪魔にならないようになされる
                                                ことが多い。他方、女性の髪は長いことが比較的多い？
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="am-useractivity-content-oneitem">
                                    <div class="am-useractivity-content-oneitem-stamp">
                                        <div class="am-useractivity-content-oneitem-stamp-time">04:23AM</div>
                                        <div class="am-useractivity-content-oneitem-stamp-logo"><i class="fa fa-pencil"></i></div>
                                        <div class="am-useractivity-content-oneitem-stamp-logo-bg"></div>
                                        <div class="am-triangle"></div>
                                    </div>
                                    <div class="am-useractivity-content-oneitem-content">
                                        <div class="am-useractivity-content-oneitem-question">
                                            <div class="am-useractivity-content-oneitem-photo"></div>
                                            <div class="am-useractivity-content-oneitem-description">タンクは ケルビン さんから答えもらえました</div>
                                            <div class="am-useractivity-content-oneitem-question-title">ウォーズウォースをしかし岡田さんに
                                                またいろいろなりなのなけれうた？
                                            </div>
                                        </div>
                                        <div class="am-useractivity-content-oneitem-answer">

                                            <div class="am-useractivity-content-oneitem-answer-detail">
                                                19世紀以降、西洋諸国の影響がアジア、アフリカ等へも
                                                広まるにつれて、当時の西洋諸国の髪形が広く普及する
                                                ようになる。男性の髪型は、比較的短く又は長い場合は
                                                結髪する等して、活動の邪魔にならないようになされる
                                                ことが多い。他方、女性の髪は長いことが比較的多い？
                                            </div>
                                            <div class="am-useractivity-content-oneitem-answerer-photo"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="am-useractivity-content-oneitem" style="margin-top: 100px;">
                                    <div class="am-useractivity-content-oneitem-stamp">
                                        <div class="am-useractivity-content-oneitem-stamp-time">12:23PM</div>
                                        <div class="am-useractivity-content-oneitem-stamp-logo"><i class="fa fa-tag"></i></div>
                                        <div class="am-useractivity-content-oneitem-stamp-logo-bg"></div>
                                        <div class="am-triangle"></div>
                                    </div>
                                    <div class="am-useractivity-content-oneitem-content">
                                        <div class="am-useractivity-content-oneitem-photo"></div>
                                        <div class="am-useractivity-content-oneitem-description">タンクは
                                                <div class="am-badge">
                                                    <span class="am-badge-gold"></span>
                                                    <span class="am-h7">コスメングル</span>
                                                </div>
                                            もらいました</div>
                                        <div class="am-useractivity-content-oneitem-tag-question">
                                            <div class="am-badge">
                                                <span class="am-badge-gold"></span>
                                                <span class="am-h7">コスメングル</span>
                                            </div>
                                            とは</div>
                                        <div class="am-useractivity-content-oneitem-tag-answer">
                                            19世紀以降、西洋諸国の影響がアジア、アフリカ等へも
                                            広まるにつれて、当時の西洋諸国の髪形が広く普及する
                                            ようになる。
                                        </div>
                                    </div>
                                </div>

                                <div class="am-useractivity-content-oneitem">
                                    <div class="am-useractivity-content-oneitem-stamp">
                                        <div class="am-useractivity-content-oneitem-stamp-time">01:23AM</div>
                                        <div class="am-useractivity-content-oneitem-stamp-logo"><i class="fa fa-angle-up"></i></div>
                                        <div class="am-useractivity-content-oneitem-stamp-logo-bg"></div>
                                        <div class="am-triangle"></div>
                                    </div>
                                    <div class="am-useractivity-content-oneitem-content">
                                        <div class="am-useractivity-content-oneitem-photo"></div>
                                        <div class="am-useractivity-content-oneitem-description">タンクは <span class="am-tag">+5</span> もらいました</div>
                                        <div class="am-useractivity-content-oneitem-rep-question">詳しくは</div>
                                        <div class="am-useractivity-content-oneitem-rep-answer">Q1234はUPVOTEが一つをもらいました。</div>
                                    </div>
                                </div>

                                <div class="am-useractivity-content-oneitem-creation" style="margin-top: 100px;">
                                    <div class="am-useractivity-content-oneitem-photo"></div>
                                    <div class="am-useractivity-content-creation">
                                        <i class="fa fa-user fa-fw"></i>作成した！
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="am-useractivity-right">
                            <div class="am-useractivity-right-oneitem">
                                <div class="am-useractivity-right-title">活動チャット</div>
                                <div class="am-useractivity-right-chart"></div>
                                <div class="am-useractivity-right-chart-description">
                                    <div class="am-profile-badge">
                                        <span class="am-profile-gold"></span>
                                        <span class="am-profile-gold-number">ポスト数量</span>
                                        <span class="am-profile-silver"></span>
                                        <span class="am-profile-silver-number">バッジ数量</span>
                                        <span class="am-profile-bronze"></span>
                                        <span class="am-profile-bronze-number">レピュテーション数量</span>
                                    </div>
                                </div>
                            </div>
                            <div class="am-useractivity-right-oneitem">
                                <div class="am-useractivity-right-title">フォロワー</div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>名前</th>
                                            <th>詳細</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <div class="am-useractivity-right-oneitem-table-profilepic"></div>
                                                <div class="am-useractivity-right-oneitem-table-name">ケルビン</div>
                                                <div class="am-useractivity-right-oneitem-table-logindate">今日　02:21PM</div>
                                            </th>
                                            <th>
                                                <div class="am-useractivity-right-oneitem-table-details">
                                                    <div class="am-useractivity-right-oneitem-table-stats">
                                                        <div class="am-profile-reputation">1324</div>
                                                        <div class="am-profile-badge">
                                                            <span class="am-profile-gold"></span>
                                                            <span class="am-profile-gold-number">13</span>
                                                            <span class="am-profile-silver"></span>
                                                            <span class="am-profile-silver-number">13</span>
                                                            <span class="am-profile-bronze"></span>
                                                            <span class="am-profile-bronze-number">123</span>
                                                        </div>
                                                    </div>
                                                    <div class="am-useractivity-right-oneitem-table-tags">
                                                        <div class="am-badge">
                                                            <span class="am-badge-gold"></span>
                                                            <span class="am-h7">コスメン</span>
                                                        </div>
                                                        <div class="am-badge">
                                                            <span class="am-badge-bronze"></span>
                                                            <span class="am-h7">初心者</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="am-useractivity-right-oneitem-table-profilepic"></div>
                                                <div class="am-useractivity-right-oneitem-table-name">ケルビン</div>
                                                <div class="am-useractivity-right-oneitem-table-logindate">今日　02:21PM</div>
                                            </th>
                                            <th>
                                                <div class="am-useractivity-right-oneitem-table-details">
                                                    <div class="am-useractivity-right-oneitem-table-stats">
                                                        <div class="am-profile-reputation">1324</div>
                                                        <div class="am-profile-badge">
                                                            <span class="am-profile-gold"></span>
                                                            <span class="am-profile-gold-number">13</span>
                                                            <span class="am-profile-silver"></span>
                                                            <span class="am-profile-silver-number">13</span>
                                                            <span class="am-profile-bronze"></span>
                                                            <span class="am-profile-bronze-number">123</span>
                                                        </div>
                                                    </div>
                                                    <div class="am-useractivity-right-oneitem-table-tags">
                                                        <div class="am-badge">
                                                            <span class="am-badge-gold"></span>
                                                            <span class="am-h7">コスメン</span>
                                                        </div>
                                                        <div class="am-badge">
                                                            <span class="am-badge-bronze"></span>
                                                            <span class="am-h7">初心者</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="am-useractivity-right-oneitem-table-profilepic"></div>
                                                <div class="am-useractivity-right-oneitem-table-name">ケルビン</div>
                                                <div class="am-useractivity-right-oneitem-table-logindate">今日　02:21PM</div>
                                            </th>
                                            <th>
                                                <div class="am-useractivity-right-oneitem-table-details">
                                                    <div class="am-useractivity-right-oneitem-table-stats">
                                                        <div class="am-profile-reputation">1324</div>
                                                        <div class="am-profile-badge">
                                                            <span class="am-profile-gold"></span>
                                                            <span class="am-profile-gold-number">13</span>
                                                            <span class="am-profile-silver"></span>
                                                            <span class="am-profile-silver-number">13</span>
                                                            <span class="am-profile-bronze"></span>
                                                            <span class="am-profile-bronze-number">123</span>
                                                        </div>
                                                    </div>
                                                    <div class="am-useractivity-right-oneitem-table-tags">
                                                        <div class="am-badge">
                                                            <span class="am-badge-gold"></span>
                                                            <span class="am-h7">コスメン</span>
                                                        </div>
                                                        <div class="am-badge">
                                                            <span class="am-badge-bronze"></span>
                                                            <span class="am-h7">初心者</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="am-useractivity-right-oneitem">
                                <div class="am-useractivity-right-title">フォロウィン</div>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>名前</th>
                                        <th>詳細</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            <div class="am-useractivity-right-oneitem-table-profilepic"></div>
                                            <div class="am-useractivity-right-oneitem-table-name">ケルビン</div>
                                            <div class="am-useractivity-right-oneitem-table-logindate">今日　02:21PM</div>
                                        </th>
                                        <th>
                                            <div class="am-useractivity-right-oneitem-table-details">
                                                <div class="am-useractivity-right-oneitem-table-stats">
                                                    <div class="am-profile-reputation">1324</div>
                                                    <div class="am-profile-badge">
                                                        <span class="am-profile-gold"></span>
                                                        <span class="am-profile-gold-number">13</span>
                                                        <span class="am-profile-silver"></span>
                                                        <span class="am-profile-silver-number">13</span>
                                                        <span class="am-profile-bronze"></span>
                                                        <span class="am-profile-bronze-number">123</span>
                                                    </div>
                                                </div>
                                                <div class="am-useractivity-right-oneitem-table-tags">
                                                    <div class="am-badge">
                                                        <span class="am-badge-gold"></span>
                                                        <span class="am-h7">コスメン</span>
                                                    </div>
                                                    <div class="am-badge">
                                                        <span class="am-badge-bronze"></span>
                                                        <span class="am-h7">初心者</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="am-useractivity-right-oneitem-table-profilepic"></div>
                                            <div class="am-useractivity-right-oneitem-table-name">ケルビン</div>
                                            <div class="am-useractivity-right-oneitem-table-logindate">今日　02:21PM</div>
                                        </th>
                                        <th>
                                            <div class="am-useractivity-right-oneitem-table-details">
                                                <div class="am-useractivity-right-oneitem-table-stats">
                                                    <div class="am-profile-reputation">1324</div>
                                                    <div class="am-profile-badge">
                                                        <span class="am-profile-gold"></span>
                                                        <span class="am-profile-gold-number">13</span>
                                                        <span class="am-profile-silver"></span>
                                                        <span class="am-profile-silver-number">13</span>
                                                        <span class="am-profile-bronze"></span>
                                                        <span class="am-profile-bronze-number">123</span>
                                                    </div>
                                                </div>
                                                <div class="am-useractivity-right-oneitem-table-tags">
                                                    <div class="am-badge">
                                                        <span class="am-badge-gold"></span>
                                                        <span class="am-h7">コスメン</span>
                                                    </div>
                                                    <div class="am-badge">
                                                        <span class="am-badge-bronze"></span>
                                                        <span class="am-h7">初心者</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="am-useractivity-right-oneitem-table-profilepic"></div>
                                            <div class="am-useractivity-right-oneitem-table-name">ケルビン</div>
                                            <div class="am-useractivity-right-oneitem-table-logindate">今日　02:21PM</div>
                                        </th>
                                        <th>
                                            <div class="am-useractivity-right-oneitem-table-details">
                                                <div class="am-useractivity-right-oneitem-table-stats">
                                                    <div class="am-profile-reputation">1324</div>
                                                    <div class="am-profile-badge">
                                                        <span class="am-profile-gold"></span>
                                                        <span class="am-profile-gold-number">13</span>
                                                        <span class="am-profile-silver"></span>
                                                        <span class="am-profile-silver-number">13</span>
                                                        <span class="am-profile-bronze"></span>
                                                        <span class="am-profile-bronze-number">123</span>
                                                    </div>
                                                </div>
                                                <div class="am-useractivity-right-oneitem-table-tags">
                                                    <div class="am-badge">
                                                        <span class="am-badge-gold"></span>
                                                        <span class="am-h7">コスメン</span>
                                                    </div>
                                                    <div class="am-badge">
                                                        <span class="am-badge-bronze"></span>
                                                        <span class="am-h7">初心者</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

</div>

@stop