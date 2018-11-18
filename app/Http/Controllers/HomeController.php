<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\QuestionsChoice;
use App\QuestionsTable;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getQuestions = QuestionsTable::select('q_id', 'questions');
        if($getQuestions->exists()) {
            $qstns = $getQuestions->get()->toArray();
            
            $getChoices = QuestionsChoice::select('qc_id', 'q_id', 'choice', 'is_correct_choice')->get()->toArray();
            // echo "<pre>"; 
            // print_r($qstns); print_r($getChoices);

            $choices = $newArr = [];

            foreach ($qstns as $key => $qstn) {
                
                foreach ($getChoices as $Ckey => $choice) {
                    
                    if($qstn['q_id'] == $choice['q_id']) {
                        array_push($choices, $choice);
                    }

                }
                shuffle($choices);
                array_push($newArr, [$qstn['questions'], $choices]);

                $choices = [];
            }
            shuffle($newArr);
            // print_r($newArr); exit;

            return view('home')->withData($newArr);
        }

        return view('home')->withData([]);
    }

    public function output(Request $request) {
        
        $data = $request->all();
        array_shift($data);
        $arr = [];
        foreach ($data as $key => $value) {
            array_push($arr, $this->questionAnswer($value));
        }
        
        $questionId = array_column($arr, 'questionId');

        $getChoices = QuestionsChoice::select('qc_id', 'q_id', 'choice', 'is_correct_choice')->where('is_correct_choice', '=', '1')->whereIn('q_id', $questionId)->get()->toArray();

        $res = [];
        foreach ($getChoices as $choice) {
            foreach ($arr as $value) {
                if($value['questionId'] == $choice['q_id']){
                    if($value['answerId'] == $choice['qc_id']){
                        array_push($res, 1);
                    }
                }
            }
        }

        $output = (count($res)/count($arr)) * 100;
        
        return view('result')->withResult($output);
    }

    public function questionAnswer($input) {
        $qa = explode('|', $input);
        $arr = [];
        $arr['questionId'] = $qa[0];
        $arr['answerId'] = $qa[1];

        return $arr;
    }
}
