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
}
