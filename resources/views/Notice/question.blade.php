@extends('layout')


@section('content')
<title>자주하는질문 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-top">
        자주하는 질문
    </div>
    @if(!empty($question) && $question->count())
    @foreach($question as $key => $value)
    <div class="question">
        <i class="fa-solid fa-circle-question"></i> {{$value -> question}}
    </div>
    <div class="answer">
        <i class="fa-solid fa-arrow-right"></i> {{$value -> answer}}
    </div>
    @endforeach
    @endif

</div>


@endsection