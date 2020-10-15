<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionsController extends Controller {

    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'user_id' => 'required'
        ]);

        if($validator->fails()){
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }

        $question = new Question();
        $question->question = $request->input('question');
        $question->user_id = $request->input('user_id');
        $question->category_id = $request->input('category_id');
        $question->save();

        return array('error' => false, 'question' => $question);

    }

    public function getAll(){

        $questions = Question::all();

        foreach($questions as $question){
            $question['answercount'] = count($question->answers);
            unset($question->answers);
        }

        return array(
            'error' => false,
            'questions' => $questions
        );
    }
}