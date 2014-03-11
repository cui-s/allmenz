<?php

class QuestionController extends BaseController {


    public function postQuestion(){

        $input = Input::all();
        $date = new \DateTime;
        Eloquent::unguard();

        Question::create(array(
            'asker_id'      =>  '1',
            'title'         =>  $input['title'],
            'content'       =>  $input['description'],
            'tag'           =>  $input['tag'],
            'created_at'    =>  $date,
            'updated_at'    =>  $date
        ));

        // Get the id of the route
        $question_id =  DB::table('question')->max('id');

//        return Redirect::to('http://tan-c.allmenz.jp/public/question/'.$question_id);
//        return Response::make( '', 302 )->header( 'Location', 'http://tan-c.allmenz.jp/public/question/1' );
//        return Redirect::route('question/'.$question_id)->with("quesiton",Question::find($question_id));
//        header("Location: http://tan-c.allmenz.jp/public/question/$question_id", true, '302');
//        return Redirect::action('QuestionController@show');
//        return Redirect::to('tutorial');

        return $question_id;
    }


    public function answerQuestion(){

        $input = Input::all();
        $date = new \DateTime;

        Eloquent::unguard();

        Answer::create(array(
            'answerer_id'   =>  $input['answerer_id'],
            'question_id'   =>  $input['question_id'],
            'content'       =>  $input['content'],
            'created_at'    =>  $date,
            'updated_at'    =>  $date
        ));
    }

    public function vote(){

        $input = Input::all();
        $vote_history = UserVotingHistory::where("type", $input['type'])
                                         ->where("direction", $input['direction'])
                                         ->where("user_id", $input['voter_id'])
                                         ->where("answer_id", $input['answer_id'])
                                         ->where("question_id", $input['question_id'])
                                         ->first();

        // Only insert where there is no current data
        if(!isset($vote_history-> user_id)){
            $date = new \DateTime;
            Eloquent::unguard();

            if($input['type'] == "answer")
                $target = Answer::where("id", $input['answer_id'])->firstOrFail();
            else if($input['type'] == "question")
                $target = Question::where("id", $input['question_id'])->firstOrFail();

            if($input['direction'] == "up")
                $target -> voting_point +=1;
            else
                $target -> voting_point -=1;
            $target -> save();

            // TODO: update the history data base
            UserVotingHistory::create(array(
                'user_id'       =>  $input['voter_id'],
                'answer_id'     =>  $input['answer_id'],
                'question_id'   =>  $input['question_id'],
                'type'          =>  $input['type'],
                'direction'     =>  $input['direction'],
                'created_at'    =>  $date,
                'updated_at'    =>  $date
            ));

            // TODO: choose a different color scheme or something for items already voted!

            // return the current voting_point of the item to be correctly reflected
            return $target -> voting_point;
        }
        else
            Log::info("You already have this record!");



    }
}
