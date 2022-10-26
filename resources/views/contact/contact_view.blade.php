@extends('layout')


@section('content')
<title>문의 게시글 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-top">
        문의 게시글
    </div>
    <div>
        별명 : {{$contact -> nickname}}
    </div>
    <div>
        제목 : {{$contact -> title}}
    </div>
    <div>
        내용 : {{$contact -> content}}
    </div>
    @if(($contact -> image_name) != null)
        <img src="{{asset('storage/images/'.$contact -> image_name)}}" alt="1">
        <a href="{{asset('storage/images/'.$contact -> image_name)}}" download="">다운로드</a>
    @endif
    @if(Auth() -> check())
        @if (($contact -> userId) == (Auth::user() -> id))
            <form action="/Contact_delete/{{$contact -> id}}" method="POST">
                @csrf
                <input type="submit" name="delete" id="" value="글 삭제">
            </form>
    
        @endif
        <form action="/Comment/{{$contact -> id}}" method="POST">
            @csrf
            <input type="text" name="comment" id="">
            <input type="hidden" name="contact_Id" id="" value="{{$contact -> id}}"> 
    
            <input type="submit" name="" id="" value="댓글 작성">
        </form>
    
        @if (!empty($comment && $comment->count()))
            @foreach ($comment as $key)
                <div style="display: flex">
                    {{$key -> content}}
                    @if(($key -> userId) == (Auth::user() ->id))
                    <form action="/Comment_delete/{{$key -> id}}" method="POST">
                        @csrf
                        <input type="submit" name="" id="" value="댓글 삭제">
                    </form>
                    @endif
                </div>
            @endforeach
        @else
            댓글이 없습니다.
        @endif
    
    @else
        @if (!empty($comment && $comment->count()))
        @foreach ($comment as $key)
            <div style="display: flex">
                {{$key -> content}}
            </div>
        @endforeach
        @else
            댓글이 없습니다.
        @endif
    
    @endif

</div>
@endsection