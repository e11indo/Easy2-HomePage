@extends('layout')


@section('content')
<title>문의 게시글 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-top">
        문의 게시글
    </div>

    @if (!empty($contact) && $contact->count())
        @foreach ($contact as $key => $value)
            <div>
                <a href="{{Route('contact_view', $value -> id)}}">{{$value ->title}}</a> 
                <span style="font-weight: 200; font-size:8px; color:red">{{$value -> commentcount}} </span>
                {{$value ->nickname}}
            </div>
        @endforeach
    
    @else
        글이 없습니다.
    @endif
    <a href="{{Route('contact_create')}}">글 작성</a>
{{--     <form action="/test" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="picture">
        <input type="submit" name="upload" id="" value="테스트">
    </form> --}}
</div>
@endsection