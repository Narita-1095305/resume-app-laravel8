<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use App\Models\Resume;
use App\Models\Education;
use App\Models\Work;
use App\Models\Licence;
use Illuminate\Support\Facades\Auth;


class FormController extends Controller
{
    public function form(){
        return view('form');
    }

    public function store(Request $request){
        $resume = Resume::create([
            'users_id' => Auth::user()->id,
            'title' => $request->title,
            'is_spouse' => $request->is_spouse,
            'is_spouse_dependent' => $request->is_spouse_dependent,
            'other' => $request->other,
        ]);
        
        $education_params = [];
        for($i = 0; $i < count($request->education); $i += 3){
            $education_params[] = [
                'resumes_id' => $resume->id,
                'year' => $request->education[$i],
                'month' => $request->education[$i + 1],
                'background' => $request->education[$i + 2],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        Education::insert($education_params);
        if(isset($request->work)){
            $work_params = [];
            for($i = 0; $i < count($request->work); $i += 3){
                $work_params[] = [
                    'resumes_id' => $resume->id,
                    'year' => $request->work[$i],
                    'month' => $request->work[$i + 1],
                    'background' => $request->work[$i + 2],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            Work::insert($work_params);
        }
        
        if(isset($request->licence)){
            $licence_params = [];
            for($i = 0; $i < count($request->licence); $i += 3){
                $licence_params[] = [
                    'resumes_id' => $resume->id,
                    'year' => $request->licence[$i],
                    'month' => $request->licence[$i + 1],
                    'background' => $request->licence[$i + 2],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            Licence::insert($licence_params);
        }
        

        return redirect('/dashboard');
    }

    public function preview(Request $request){
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

        return view("resume", compact("inputs"));
    }
}
