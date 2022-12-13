<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resume;

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
}
