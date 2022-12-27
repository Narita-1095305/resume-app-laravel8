@extends('layouts.common')

@section('content')
    <h1>学歴</h1>
    @isset($inputs['education'])
        @foreach($inputs['education']['education_year'] as $education_year)
            <p>{{ $education_year }}</p>
        @endforeach
        @foreach($inputs['education']['education_month'] as $education_month)
            <p>{{ $education_month }}</p>
        @endforeach
        @foreach($inputs['education']['education_background'] as $education_background)
            <p>{{ $education_background }}</p>
        @endforeach
    @else
        <p>送信されていません。</p>
    @endif

    <h1>職歴</h1>
    @isset($inputs['work'])
        @foreach($inputs['work']['work_year'] as $work_year)
        <p>{{ $work_year }}</p>
        @endforeach
        @foreach($inputs['work']['work_month'] as $work_month)
        <p>{{ $work_month }}</p>
        @endforeach
        @foreach($inputs['work']['work_background'] as $work_background)
        <p>{{ $work_background }}</p>
        @endforeach
    @else
        <p>送信されていません。</p>
    @endisset


    <h1>資格</h1>
    @isset($inputs['licence'])
        @foreach($inputs['licence']['licence_year'] as $education_year)
            <p>{{ $education_year }}</p>
        @endforeach
        @foreach($inputs['licence']['licence_month'] as $education_month)
            <p>{{ $education_month }}</p>
        @endforeach
        @foreach($inputs['licence']['licence_background'] as $education_background)
            <p>{{ $education_background }}</p>
        @endforeach
    @else
        <p>送信されていません。</p>
    @endisset

    {{ $inputs['summary'] }}
@endsection