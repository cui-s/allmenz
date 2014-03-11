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
    <div class="am-qna-answer-container">
    <div class="am-qna-answer-oneitem">
        <div class="am-qna-optionbar" value="{{{$answer->id}}}">
            <div class="am-qna-optionbar-voteup">
                <i class="fa fa-sort-desc fa-fw"></i>
                <span id="am-qna-answer-vote-{{{$answer->id}}}">{{{$answer->voting_point}}}</span>
            </div>
            <div class="am-qna-optionbar-votedown"><i class="fa fa-sort-down fa-fw"></i></div>
            @if ($question->asker_id === Session::get('user')->id)
            <div class="am-qna-optionbar-bestanswer"><i class="fa fa-check normal-answer"></i></div>
            @endif
        </div>

        <div class="am-qna-content">
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

    <div class="am-qna-content-comment">
        <div class="am-qna-content-comment-triangle">
            <i class="fa fa-sort-desc"></i><span></span>
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
        <div class="am-qna-content-comment-makecomment"  value="{{{$answer->id}}}">
            <form role="form" class="am-comment" method="POST">
                <div><img src="http://pbs.twimg.com/profile_images/418097553192677376/gqwPNjop_normal.jpeg"></div>
                <input type="text" class="form-control" id="am-qna-comment-answer{{{$answer->id}}}" placeholder="コメント">
                <button type="submit" class="btn btn-primary btn-default">コメント</button>
            </form>
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
                }
            });
        }
    });

    $(".am-comment").validate({

        submitHandler: function(form) {
            $.ajax("http://tan-c.allmenz.jp/public/create_comment",{
                type: "post",
                data: {
                    "content": $("#am-qna-comment-answer"+$(form).closest(".am-qna-content-comment-makecomment").attr("value")).val(),
                    "question_id": {{{ $question->id}}},
                    "answer_id": $(form).closest(".am-qna-content-comment-makecomment").attr("value"),
                    "user_id": {{{ Session::get('user')->id }}}
                },
                success: function(response) {
                }
            });
        }
    });

    // Display comment only upon clicking
    $(".am-qna-content-comment").css("display","none");

    $(".am-qna-content-optionbar .fa-comments").on("click", function(){
        $(this).closest(".am-qna-answer-oneitem").next().toggle("slow");
    });


    // Vote up/down function
    $(".am-qna-optionbar .fa-sort-desc").on("click", function(){
        var self = "#am-qna-answer-vote-"+$(this).closest(".am-qna-optionbar").attr("value");
        $.ajax("http://tan-c.allmenz.jp/public/vote_question",{
            type: "post",
            data: {
                    "voter_id":  {{{ Session::get('user')->id }}},
                    "question_id": {{{ $question->id}}},
                    "answer_id": $(this).closest(".am-qna-optionbar").attr("value"),
                    "direction": "up",
                    "type":"answer"
            },
            success: function(response) {
                if(response)
                    $(self).text(response);
            }
        });
    });

    $(".am-qna-optionbar .fa-sort-down").on("click", function(){
        var self = "#am-qna-answer-vote-"+$(this).closest(".am-qna-optionbar").attr("value");
        $.ajax("http://tan-c.allmenz.jp/public/vote_question",{
            type: "post",
            data: {
                    "voter_id":  {{{ Session::get('user')->id }}},
                    "question_id": {{{ $question->id}}},
                    "answer_id": $(this).closest(".am-qna-optionbar").attr("value"),
                    "direction": "down",
                    "type":"answer"
            },
            success: function(response) {
                if(response)
                    $(self).text(response);
            }
       });
    });

    // Best answer would change color upon clicking
    $(".am-qna-optionbar-bestanswer .fa-check").on("click",function(){
        if($(this).hasClass("normal-answer")){
            $(".am-qna-optionbar-bestanswer .fa-check").css("display","none");
            $(this).addClass("best-answer").removeClass("normal-answer").css("display","block");
            $(this).closest(".am-qna-optionbar").next().addClass("am-qna-content-bestanswer");

            // updating database
            $.ajax("http://tan-c.allmenz.jp/public/best_answer",{
                    type: "post",
                    data: {
                           "question_id": {{{ $question->id}}},
                           "answer_id": $(this).closest(".am-qna-optionbar").attr("value"),
                           "is_best":1
                           },
                    success: function(response) {
                       console.log(response)
                    }
                });
            }
        else{
            $(".am-qna-optionbar-bestanswer .fa-check").css("display","block");
            $(this).removeClass("best-answer").addClass("normal-answer");
            $(this).closest(".am-qna-optionbar").next().removeClass("am-qna-content-bestanswer");

            // updating database
            $.ajax("http://tan-c.allmenz.jp/public/best_answer",{
                type: "post",
                data: {
                       "question_id": {{{ $question->id}}},
                       "answer_id": $(this).closest(".am-qna-optionbar").attr("value"),
                       "is_best":0
                },
                success: function(response) {
                    console.log(response)
                }
            });
        }
    })


    $(document).ready(function(){
       // Sort the answers based on the number of votes
        var parent = $(".am-qna-answer .am-row");
        var children = $(".am-qna-answer-container");

        parent.fadeOut('slow', function() {
            sortUsingNestedText(parent,children, ".am-qna-optionbar-voteup span", "number");
        });
    });



    function sortUsingNestedText(parent, childSelector, keySelector, typeInput) {
        var items = parent.children(childSelector).sort(function(a, b) {
            var vA = $(keySelector, a).text();
            var vB = $(keySelector, b).text();
            console.log(vA);
            if(typeInput=="text")
                return (vA < vB) ? -1 : (vA > vB) ? 1 : 0;
            else if(typeInput=="number")
                return (parseInt(vA, 10) > parseInt(vB, 10)) ? -1 : (parseInt(vA, 10) < parseInt(vB, 10)) ? 1 : 0;
        });
        parent.append(items).fadeIn('fast');
    }
</script>


@stop