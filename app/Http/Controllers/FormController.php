<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class FormController extends Controller
{
    // public function educationForm(){
    //     return view('education-form');
    // }

    // public function workForm(){
    //     return view('work-form');
    // }

    // public function licenceForm(){
    //     return view('licence-form');
    // }

    // public function summaryForm(){
    //     return view('summary-form');
    // }

    // public function otherForm(){
    //     return view('other-form');
    // }

    // public function dinamicForm(){
    //     return view('dinamic-form');
    // }

    public function resume(){
        return view('resume');
    }

    public function carousel(){
        return view('carousel');
    }

    public function store(Request $request){
        $inputs = $request->all();
        $education = array();
        if(isset($inputs['education_year']) && isset($inputs['education_month']) && isset($inputs['education_background'])) {
            
            foreach (array_map(NULL, $inputs['education_year'],$inputs['education_month'],$inputs['education_background']) as [ $year, $month, $background ]) {
                array_push($education, ['year' => $year, 'month' => $month, 'background' => $background]);
            }
            $inputs += array('education' => $education);
            unset($inputs['education_year'],$inputs['education_month'],$inputs['education_background']);
        }

        $work = array();
        $work2 = array();
        if(isset($inputs['work_year']) && isset($inputs['work_month']) && isset($inputs['work_background'])){
            foreach (array_map(NULL, $inputs['work_year'],$inputs['work_month'],$inputs['work_background']) as $index => [ $year, $month, $background ]) {
                if(($index + 1) + count($education) < 20) array_push($work, ['year' => $year, 'month' => $month, 'background' => $background]);
                else array_push($work2, ['year' => $year, 'month' => $month, 'background' => $background]);
            }
            $inputs += array('work' => $work);
            if(count($work2) > 0) $inputs += array('work2' => $work2);
            unset($inputs['work_year'],$inputs['work_month'],$inputs['work_background']);
        }

        if(isset($inputs['licence_year']) && isset($inputs['licence_month']) && isset($inputs['licence_background'])){
            $licence = array();
            foreach (array_map(NULL, $inputs['licence_year'],$inputs['licence_month'],$inputs['licence_background']) as [ $year, $month, $background ]) {
                array_push($licence, ['year' => $year, 'month' => $month, 'background' => $background]);
            }
            $inputs += array('licence' => $licence);
            unset($inputs['licence_year'],$inputs['licence_month'],$inputs['licence_background']);
        }

        //dd(compact('education',));
        // return view('resume',compact('inputs'));
        // foreach ($inputs["education"] as $key1 => $value1) {
        //     foreach ($value1 as $key2 => $value2) {
        //         var_dump($value2); //「.」は文字列連結
        //     }
        // }
        dd($inputs);
    }
}
