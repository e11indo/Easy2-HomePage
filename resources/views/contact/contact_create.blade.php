@extends('layout')


@section('content')
<title>문의글 작성 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-top">
        문의글 작성
    </div>
    <form action="contact_save" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            작성자 :  {{Auth::user() -> nickname}}
            {{-- <input type="hidden" name="nickname" id="" value="{{Auth::user() -> nickname}}">  위에꺼와 같음 --}}
        </div>
        <div>
            제목 : <input type="text" name="title" id="">
        </div>
        <div>
            내용 : <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="file" name="picture">
        <input type="submit" name="save" id="">
    </form>

</div>

@endsection