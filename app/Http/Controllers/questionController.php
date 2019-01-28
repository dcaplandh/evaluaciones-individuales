<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class questionController extends Controller
{
    public function showquestion1(){
      return view('pages.question1');
    }

    public function showquestion2(){
      return view('pages.question2');
    }

    public function storequestion1(Request $request){

      $answer = new Answer;
      $answer->user_id = \Auth::user()->id;
      $answer->module_id = 1;
      $correct = 0;
      $questions = 0;

      if($request->input('prop') == 'float'){
        $correct += 1;
      }
      $questions += 1;

      if($request->input('value') == 'left'){
        $correct += 1;
      }
      $questions += 1;

      $answer->answer = $correct."/".$questions;
      $answer->save();

      return view('pages.question2');
    }

    public function storequestion2($response){
      $answer = new Answer;
      $answer->user_id = \Auth::user()->id;
      $answer->module_id = 2;
      if($response == 'correct'){
        $answer->answer = "1/1";
      }else{
        $answer->answer = "0/1";
      }
      $answer->save();

      return view('pages.question3');
    }

    public function answers(){
      $answers = Answer::all();

      return view('pages.answers')->with(compact('answers'));
    }
}
