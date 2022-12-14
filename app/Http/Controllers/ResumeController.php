<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resume;
use App\Models\Education;
use App\Models\Work;
use App\Models\Licence;

class ResumeController extends Controller
{
    public function index(){
        $resumes = Auth::user()->resumes;
        // dd($resumes);
        return view('resume.index',compact('resumes'));
    }

    public function show($id){
        $resume = Resume::find($id);
        return view('resume.show',compact('resume'));
    }

    public function create(){
        return view('resume.create');
    }

    public function store(Request $request){

        // dd($request);
        $resume = Resume::create([
            'users_id' => Auth::user()->id,
            'title' => $request->title,
            'commuting_hour' => $request->hour,
            'commuting_minutes' => $request->minutes,
            'is_spouse' => $request->is_spouse,
            'is_spouse_dependent' => $request->is_spouse_dependent,
            'spouse_num' => $request->family_num,
            'self_pr' => $request->summary,
            'other' => $request->other,
        ]);

        if(isset($request->education_year)){
            $education_params = [];
            for($i = 0; $i < count($request->education_year); $i++){
                $education_params[] = [
                    'resumes_id' => $resume->id,
                    'year' => $request->education_year[$i],
                    'month' => $request->education_month[$i],
                    'background' => $request->education_background[$i],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            Education::insert($education_params);
        }

        if(isset($request->work_year)){
            $work_params = [];
            for($i = 0; $i < count($request->work_year); $i++){
                $work_params[] = [
                    'resumes_id' => $resume->id,
                    'year' => $request->work_year[$i],
                    'month' => $request->work_month[$i],
                    'background' => $request->work_background[$i],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            Work::insert($work_params);
        }

        if(isset($request->licence_year)){
            $licence_params = [];
            for($i = 0; $i < count($request->licence_year); $i++){
                $licence_params[] = [
                    'resumes_id' => $resume->id,
                    'year' => $request->licence_year[$i],
                    'month' => $request->licence_month[$i],
                    'background' => $request->licence_background[$i],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            Licence::insert($licence_params);
        }
        return redirect()->route('resumes.index');
    }
}
