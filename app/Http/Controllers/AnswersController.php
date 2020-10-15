<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnswersController extends Controller {

    public function submit(Request $request){

        $validator = Validator::make($request->all(), [
            'answer' => 'required',
            'user_id' => 'required',
            'question_id' => 'required'
        ]);

        if($validator->fails()){

            return array(
                'error' => false,
                'message' => $validator->errors()->all()
            );

        }

        $answer = new Answer();
        $answer->answer = $request->input('answer');
        $answer->question_id = $request->input('question_id');
        $answer->user_id = $request->input('user_id');

        $answer->save();

        return array(
            'error' => false,
            'answer' => $answer
        );

    }

}