@extends('layouts.common')

@section('content')
    <h1>学歴</h1>
    @foreach($inputs['education_year'] as $education_year)
    <p>{{ $education_year }}</p>
    @endforeach
    @foreach($inputs['education_month'] as $education_month)
    <p>{{ $education_month }}</p>
    @endforeach
    @foreach($inputs['education_background'] as $education_background)
    <p>{{ $education_background }}</p>
    @endforeach

    <h1>職歴</h1>
    @foreach($inputs['work_year'] as $work_year)
    <p>{{ $work_year }}</p>
    @endforeach
    @foreach($inputs['work_month'] as $work_month)
    <p>{{ $work_month }}</p>
    @endforeach
    @foreach($inputs['work_background'] as $work_background)
    <p>{{ $work_background }}</p>
    @endforeach

    {{-- <h1>資格</h1>
    @foreach($inputs['licence_year'] as $education_year)
    <p>{{ $education_year }}</p>
    @endforeach
    @foreach($inputs['licence_month'] as $education_month)
    <p>{{ $education_month }}</p>
    @endforeach
    @foreach($inputs['licence_background'] as $education_background)
    <p>{{ $education_background }}</p>
    @endforeach --}}

    {{ $inputs['summary'] }}
@endsection