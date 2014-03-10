@extends('layouts.base')

@section('content')
<div id="am-content">
<div class="am-container">

<div class="am-qna-question">
<div class="am-row">


    <div class="am-qna-profile">
        <div class="am-qna-profile-pic"></div>
        <div class="am-qna-profile-name">タンク</div>
        <div class="am-qna-profile-description">ご自由に, 睡觉达人いえみえ</div>
        <div class="am-qna-profile-stats">
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
    </div>
    <div class="am-qna-content">
        <div class="am-triangle"></div>
        <div class="am-qna-content-top">
            <div class="am-qna-content-question"><span>質問</span>：{{{ $question->title or 'No Title' }}}</div>
            <div class="am-qna-content-description">{{{ $question->content or 'No content' }}}</div>
            <div class="am-qna-content-tag">
                <div class="am-tag">#眉</div>
                <div class="am-tag">#メイクアップ</div>
                <div class="am-tag">#美容液</div>
            </div>
        </div>

        <div class="am-qna-content-optionbar">
            <i class="fa fa-comments fa-fw"></i>45コメント
            <i class="fa fa-share fa-fw"></i>シェアル
            <i class="fa fa-volume-up fa-fw"></i>誰に聞く
            <span class="pull-right"><i class="fa fa-flag fa-fw"></i>報告</span>
        </div>
    </div>
    <div class="am-qna-optionbar">
        <div class="am-qna-optionbar-vote">
            <i class="fa fa-flag fa-fw"></i>
            <span>{{{ $question->voting_point or '0' }}}</span><br>
            <span>投票</span>
        </div>
        <div class="am-qna-optionbar-watch"><i class="fa fa-eye fa-fw"></i></div>
    </div>
</div>
</div>

<div class="am-qna-answer">
<div class="am-row">

    @foreach ($answers as $answer)
    <div class="am-qna-answer-oneitem">
        <div class="am-qna-optionbar">
            <div class="am-qna-optionbar-voteup">
                <i class="fa fa-sort-desc fa-fw"></i>
                <span>{{{$answer->voting_point}}}</span>
            </div>
            <div class="am-qna-optionbar-votedown"><i class="fa fa-sort-down fa-fw"></i></div>
        </div>

        <div class="am-qna-content am-qna-content-bestanswer">
            <div class="am-triangle-right"></div>
            <div class="am-qna-content-top">
                <div class="am-qna-content-question"><span>答え：</span>{{{$answer->content}}}</div>
                <div class="am-qna-content-tag">
                    <div class="am-tag">#眉</div>
                    <div class="am-tag">#メイクアップ</div>
                    <div class="am-tag">#美容液</div>
                </div>
            </div>

            <div class="am-qna-content-optionbar">
                <i class="fa fa-comments fa-fw"></i>45コメント
                <i class="fa fa-share fa-fw"></i>シェアル
                <i class="fa fa-volume-up fa-fw"></i>誰に聞く
                <span class="pull-right"><i class="fa fa-flag fa-fw"></i>報告</span>
            </div>
        </div>

        <div class="am-qna-profile">
            <div class="am-qna-profile-pic"></div>
            <div class="am-qna-profile-name">タンク</div>
            <div class="am-qna-profile-description">ご自由に, 睡觉达人いえみえ</div>
            <div class="am-qna-profile-stats">
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
        </div>
    </div>

    <div class="am-qna-content-comment" id="am-qna-content-comment{{{$answer->id}}}">
        <div class="am-qna-content-comment-triangle">
            <i class="fa fa-sort-desc"></i><span></span>
        </div>
        <div class="am-qna-content-comment-oneitem">
            <div class="am-qna-content-comment-oneitem-vote">12</div>
            <div class="am-qna-content-comment-oneitem-options">
                <i class="fa fa-sort-desc fa-fw"></i>
                <i class="fa fa-flag fa-fw"></i>
            </div>
            <div class="am-qna-content-comment-oneitem-content">
                <div class="am-qna-content-comment-oneitem-content-answer">らだろのますうと煩悶ぶつかって話。</div>
                <div class="am-qna-content-comment-oneitem-content-answerer">タンク  12秒前</div>
            </div>
        </div>
        <div class="am-qna-content-comment-oneitem">
            <div class="am-qna-content-comment-oneitem-vote">0</div>
            <div class="am-qna-content-comment-oneitem-options">
                <i class="fa fa-sort-desc fa-fw"></i>
                <i class="fa fa-flag fa-fw"></i>
            </div>
            <div class="am-qna-content-comment-oneitem-content">
                <div class="am-qna-content-comment-oneitem-content-answer">らだろのますうと煩悶ぶつかって話、さんへただそれだけできなものらしくでた。</div>
                <div class="am-qna-content-comment-oneitem-content-answerer">タンク  12秒前</div>
            </div>
        </div>
        <div class="am-qna-content-comment-oneitem">
            <div class="am-qna-content-comment-oneitem-vote">65</div>
            <div class="am-qna-content-comment-oneitem-options">
                <i class="fa fa-sort-desc fa-fw"></i>
                <i class="fa fa-flag fa-fw"></i>
            </div>
            <div class="am-qna-content-comment-oneitem-content">
                <div class="am-qna-content-comment-oneitem-content-answer">らだろのますうと煩悶ぶつかって話。</div>
                <div class="am-qna-content-comment-oneitem-content-answerer">タンク  12秒前</div>
            </div>
        </div>
    </div>
    @endforeach


    <form role="form" id="am-answer-question" method="POST">
        <div class="am-qna-answer">
            <textarea class="form-control" name="content" id="am-qna-answer-input-content"></textarea>
            <button type="submit" class="btn btn-success btn-block">答え</button>
        </div>
    </form>

</div>
</div>

</div>
</div>

<script>
    $("#am-answer-question").validate({
        submitHandler: function(form) {
            $.ajax("http://tan-c.allmenz.jp/public/answer_question",{
                type: "post",
                data: { "content": $("#am-qna-answer-input-content").val(),
                        "question_id": {{{ $question->id}}},
                        "answerer_id": {{{ Session::get('user')->id }}}
                },
                success: function(response) {
//                    window.location.href="http://tan-c.allmenz.jp/public/question/"+response;
                    console.log(response);
                }
            });
        }
    });

    // Display comment only upon clicking
    $(".am-qna-content-comment").css("display","none");
    $(".am-qna-content-optionbar .fa-comments").on("click", function(){
        $(this).closest(".am-qna-answer-oneitem").next().toggle("slow");
    });


</script>


@stop