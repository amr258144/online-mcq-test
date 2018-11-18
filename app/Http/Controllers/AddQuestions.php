<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionsChoice;
use App\QuestionsTable;
use Illuminate\Support\Facades\DB;

class AddQuestions extends Controller
{
    public function insert(Request $request) {
    	$data = $request->all();
    	array_shift($data);
    	if(empty($data['ans'])) {
    		return redirect()->back()->withInput()->withError(['msg' => 'Please select the right answer']);
    	}
		$k = array_keys($data);

    	$choices = [];

    	foreach ($data as $key => $value) {
    		if(substr($key, 0, 3) == 'opt') {
    			// array_push($choices, [$key => $value]);
    			$choices[$key] = $value;
    		}
    	}

    	$qId = QuestionsTable::insertGetId(['questions' => $data['question']]);

    	$insert = [];
    	$ans = 1;	// enum value 1 is 0, 2 is 1 as in database
    	foreach ($choices as $key => $value) {
    		$ans = 1;
    		if($key == $data['ans']) {
    			$ans = 2;
    		}
    		array_push($insert, [
				'q_id' => $qId,
				'choice' => $value,
				'is_correct_choice' => $ans
			]);
    	}

    	$choice = QuestionsChoice::insert($insert);
    	return redirect('/add-questions')->withSuccess('Question Inserted Successfully');

    }
}
