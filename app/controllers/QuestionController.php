<?php

class QuestionController extends BaseController {
    public function postQuestion(){

        $input = Input::all();

        Eloquent::unguard();

        Question::create(array(
            'asker_id'      =>  '1',
            'title'         =>  $input['title'],
            'content'       =>  $input['description'],
            'tag'           =>  $input['tag'],
            'created_at'    =>  date('Y/m/d H:i:s')
            
        ));
    }
}
