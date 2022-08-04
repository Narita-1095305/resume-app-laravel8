<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('confirm',compact('inputs'));
        // dd($request->all());
    }
}
