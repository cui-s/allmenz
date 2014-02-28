@extends('layouts.base')

@section('content')
<div id="am-content">

    <!----------------------------------------------------------------------
    | SLIDER
    |---------------------------------------------------------------------->
    <div id="am-index-slider">
        <div class="am-container">
            <div id="am-index-slider-content">
                <div id="am-index-slider-mainbar">
                    <div class="am-row text-center">
                    <span id="am-index-slider-searchicon">
                        <i class="fa fa-search fa-inverse"></i>
                    </span>
                        <span class="am-h0 am-index-slider-entry">__________________にせわしましょう！</span>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div id="am-index-slider-options">
                    <div class="am-row text-left">
                        <span class="am-h3">まゆ</span><br>
                        <span class="am-h3">たいもう</span><br>
                        <span class="am-h3">顔</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!----------------------------------------------------------------------
    | TUTORIAL
    |---------------------------------------------------------------------->
    <div id="am-index-tutorial">
        <div class="am-container">
            <div class="am-row text-center">
                <p class="am-h0">ALLMENZへようこそ!
                    <!-- <i class="fa fa-spinner fa-1x fa-spin"></i>-->
                </p>
            </div>

            <div class="am-row text-center">
                <span class="am-h3">髪型か脚ケアまで、なんでも、こたえをみつけろう</span>
            </div>

            <div class="am-row">
                <div class="col-md-4 am-index-tutorial-onestep-block">
                    <div class="col-md-3 am-index-tutorial-icon">
                        <i class="fa fa-search am-header-icon"></i>
                    </div>
                    <div class="col-md-9">
                        <span class="am-h3"><strong>探す</strong></span><br>
                        <span class="am-h4">まず関心する内容読む</span>
                    </div>
                </div>
                <div class="col-md-4 am-index-tutorial-onestep-block">
                    <div class="col-md-3 am-index-tutorial-icon">
                        <i class="fa fa-eye am-header-icon"></i>
                    </div>
                    <div class="col-md-9">
                        <span class="am-h3"><strong>お問い合わせ</strong></span><br>
                        <span class="am-h4">ホストにメッセージ</span>
                    </div>
                </div>
                <div class="col-md-4 am-index-tutorial-onestep-block">
                    <div class="col-md-3 am-index-tutorial-icon">
                        <i class="fa fa-users am-header-icon"></i>
                    </div>
                    <div class="col-md-9">
                        <span class="am-h3"><strong>ソーシャル</strong></span><br>
                        <span class="am-h4">なかよくになる</span>
                    </div>
                </div>
            </div>


            <div class="clearfix"></div>
            <div class="am-hr-white"></div>
            <div class="am-row text-center">
                <div id="am-index-tutorial-link-label"><strong>ALLMENZご利用の流れ»</strong></div>
            </div>
        </div>

    </div>


    <!----------------------------------------------------------------------
    | CATEGORY
    |---------------------------------------------------------------------->
    <div id="am-index-category">
        <div class="am-container">
            <div class="am-row">
                <div class="am-title-bar">
                    <div class="am-title am-h0">
                        カテゴリ
                    </div>

                    <ul class="am-title-bar-tab nav nav-tabs">
                        <li class="active pull-right"><a href="#home" data-toggle="tab">ボディケア</a></li>
                        <li class="pull-right"><a href="#profile" data-toggle="tab">ファッション</a></li>
                        <li class="pull-right"><a href="#messages" data-toggle="tab">コスメ</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div class="tab-pane active" id="home">
                            <div class="col-md-6">
                                <div id="am-index-category-featured-picture">
                                    <div id="am-index-category-featured-text" class="text-right">
                                        <span class="am-h2"><strong>スキン</strong></span><br>
                                        200 タグ<br>
                                        120 トピック<br>
                                        3451 フォロワー
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div id="am-index-category-featured-tag">
                                    <div class="col-md-4">
                                        <span class="am-h3"><strong>種類</strong></span><br>
                                        #敏感<br>
                                        #オイリー<br>
                                        #普通<br>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="am-h3"><strong>ケア</strong></span><br>
                                        #モイスチャー<br>
                                        #洗顔料<br>
                                        #トナー<br>
                                        #乳化剤
                                    </div>
                                    <div class="col-md-4">
                                        <span class="am-h3"><strong>ブランド</strong></span><br>
                                        #Estee Launder<br>
                                        #SK2<br>
                                        #Biotherm
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="am-index-category-unfeatured-block">
                                    <div class="am-index-category-unfeatured-text">
                                        <div class="col-md-3">
                                            <div class="am-index-category-unfeatured-logo"><i class="fa fa-2x fa-arrow-circle-o-right"></i></div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="am-index-category-unfeatured-details">
                                                100 タグ<br>
                                                21トピック<br>
                                                333 フォラワー
                                            </div>
                                        </div>
                                    </div>
                                    <div id="am-index-category-unfeatured-block1">
                                        <div class="am-index-category-unfeatured-title">
                                            <span class="am-h3"><strong>髭</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <br>

                                <div class="am-index-category-unfeatured-block">
                                    <div class="am-index-category-unfeatured-text">
                                        <div class="col-md-3">
                                            <div class="am-index-category-unfeatured-logo"><i class="fa fa-2x fa-arrow-circle-o-right"></i></div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="am-index-category-unfeatured-details">
                                                100 タグ<br>
                                                21トピック<br>
                                                333 フォラワー
                                            </div>
                                        </div>
                                    </div>
                                    <div id="am-index-category-unfeatured-block2">
                                        <div class="am-index-category-unfeatured-title">
                                            <span class="am-h3"><strong>髪型</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <br>

                                <div class="am-index-category-unfeatured-block" id="am-index-category-unfeatured-block3">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="am-index-category-unfeatured-block" id="am-index-category-unfeatured-block4">
                                    <div class="am-index-category-unfeatured-title">
                                        <span class="am-h3"><strong>PUA</strong></span>
                                    </div>
                                </div>
                                <br>

                                <div class="am-index-category-unfeatured-block" id="am-index-category-unfeatured-block5">
                                </div>
                                <br>

                                <div class="am-index-category-unfeatured-block" id="am-index-category-unfeatured-block6">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="profile">...</div>
                        <div class="tab-pane" id="messages">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!----------------------------------------------------------------------
    | STARUSER
    |---------------------------------------------------------------------->
    <div id="am-index-staruser">
        <div class="am-container">
            <div class="am-row">
                <div class="col-md-5" id="am-index-staruser-circlelist">
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle1"></div></div>
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle2"></div></div>
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle3"></div></div>
                    <br>
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle4"></div></div>
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle5"></div></div>
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle6"></div></div>
                    <br>
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle7"></div></div>
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle8"></div></div>
                    <div class="col-md-4"><div class="am-index-staruser-circle" id="am-index-staruser-circle9"></div></div>

                </div>

                <div class="col-md-7">
                    <div class="am-triangle am-index-startuser-details-triangle"></div>
                    <div id="am-index-staruser-details">
                        <div id="am-index-staruser-details-stats">
                                <div class="col-md-3"><div id="am-index-staruser-details-stats-photo"></div></div>
                                <div class="col-md-9" id="am-index-staruser-details-stats-text">

                                    <span class="am-h3">タンク、ALLMENZ達人</span><br>
                                    <span class="am-h5 am-additional-text">1367質問に答え、167944のファローワ</span>
                                </div>
                        </div>
                        <div class="clearfix"></div>

                        <div id="am-index-staruser-details-question">
                            <div class="am-index-staruser-details-question-item">
                                <div class="col-md-2">
                                    <div class="am-index-staruser-details-question-view text-center"><span class="am-h4">123</span></div>
                                </div>
                                <div class="col-md-10 am-index-staruser-details-question-topic">
                                    <span class="am-h4">どのように迅速に知識のフィールドを手を出すに迅速に知識？</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="am-index-staruser-details-question-item">
                                <div class="col-md-2">
                                    <div class="am-index-staruser-details-question-view text-center"><span class="am-h4">53</span></div>
                                </div>
                                <div class="col-md-10 am-index-staruser-details-question-topic">
                                    <span class="am-h4">に迅速に知速に知識？</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="am-index-staruser-details-question-item">
                                <div class="am-index-staruser-details-question-item">
                                <div class="col-md-2">
                                    <div class="am-index-staruser-details-question-view text-center"><span class="am-h4">31</span></div>
                                </div>
                                <div class="col-md-10 am-index-staruser-details-question-topic">
                                    <span class="am-h4">識のフィール?</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div id="am-index-staruser-details-summary">
                            タンクは
                            <div class="am-tag">対人コミュニケーション</div> 、<div class="am-tag">マーケティング</div> 、<div class="am-tag">職場</div> 、その他のト
                            ピックで50316是認を受けた。
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>

@stop