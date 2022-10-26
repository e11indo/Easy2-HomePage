<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request) //메인페이지 메소드
    {
        $pageNum     = $request->input('page');
        // view에서 넘어온 현재페이지의 파라미터 값.
        $pageNum     = (isset($pageNum)?$pageNum:1);
        // 페이지 번호가 없으면 1, 있다면 그대로 사용
        $startNum    = ($pageNum-1)*10;
        // 페이지 내 첫 게시글 번호
        $writeList   = 10;
        // 한 페이지당 표시될 글 갯수
        $pageNumList = 10;
        // 전체 페이지 중 표시될 페이지 갯수
        $pageGroup   = ceil($pageNum/$pageNumList);
        // 페이지 그룹 번호
        $startPage   = (($pageGroup-1)*$pageNumList)+1;
        // 페이지 그룹 내 첫 페이지 번호
        $endPage     = $startPage + $pageNumList-1;
        // 페이지 그룹 내 마지막 페이지 번호
        $totalCount  = Task::count();
        // 전체 게시글 갯수
        $totalPage   = ceil($totalCount/$writeList);
        // 전체 페이지 갯수
        if($endPage >= $totalPage) {
            $endPage = $totalPage;
        } // 페이지 그룹이 마지막일 때 마지막 페이지 번호
        if($request->input('del')==1) {
            Task::where('id', $request->input('delId'))
            ->update(['memo'=>'삭제된글입니다.']);
        } // 삭제요청
        $comments = Task::orderby('grp', 'DESC')
        ->orderby('sort')->skip($startNum)->take($writeList)->get();
        // 테이블에서 가져온 DB 뷰에서 사용 할 수 있는 변수에 저장.
        return view('tasks.index', [    //경로를 작성할 때 \대신 . 을 사용 , 저 변수들은 이제 뷰에서도 사용가능
            'totalCount'=>$totalCount,
            'comments'=>$comments,
            'pageNum'=>$pageNum,
            'startPage'=>$startPage,
            'endPage'=>$endPage,
            'totalPage'=>$totalPage
        ]);


        return view('tasks.index');
    }



    public function create() //생성페이지 메소드
    {
        return view('tasks.create');
    }



    public function store(request $request) //저장 메소드
    {
        $pageNum = $request->input('page'); //댓글을 작성한 페이지로 돌아가기 위해 필요
        $mode =  $request->input('mode'); // 댓글작성인지 글작성인지 구분하기 위한 변수
        $memo = $request->input('memo');
        $creatorName = $request->input('creator_name');
        $creatorName = (isset($creatorName)?$creatorName:"익명");
        $id = $request->input('id');
        $grp = $request->input('grp');
        $sort = $request->input('sort');
        $depth =  $request->input('depth');


        if($mode==0) {
            Task::where([
                ['grp',$grp],
                ['sort','>',$sort],
            ])->increment('sort', 1);
            
            $commentPage = new Task;
            $commentPage->memo = $memo;
            $commentPage->creator_name  = $creatorName;
            $commentPage->grp = $grp; 
            $commentPage->sort = $sort+1; 
            $commentPage->depth = $depth+1;
            $commentPage->save();
        }
        else {
            $commentPage = new Task;
            $commentPage->memo = $memo;
            $commentPage->creator_name  = $creatorName;
            $commentPage->sort = 0;
            $commentPage->depth = 0;
            $commentPage->save();
            $commentPage->grp = $commentPage->id;
            $commentPage->save();
        }


        return redirect("/tasks?page=$pageNum");
    }

    public function ajaxServer(Request $request){
        $pageNum = $request->input('page');		// page파라미터 받아오기
        $writeList  = 10;	// 한 페이지에 몇개의 글이 나오게할건지
        $startNum = ($pageNum-1)*10;	// 각 페이지의 첫번째 글 번호
        $totalCount = Comment_page::count();	// 총 글 개수
        $totalPage   = ceil($totalCount/$writeList);	// 총 페이지 개수
            
        if($pageNum > $totalPage)	// 만약 입력한 페이지가 전체페이지 개수보다 크면 뷰에 1을 보냄
        {
            $result=1;
            return response()->$result;
        }
        else
        {
            $return_arr = array();	// 배열변수 선언
            $result = Comment_page::orderby('grp', 'DESC')
            ->orderby('sort','ASC')
            ->offset($startNum)
            ->limit($writeList)
            ->get();
    
            foreach($result as $row) {
                $row_array['id'] = $row['id'];
                $row_array['memo'] = $row['memo'];
                $row_array['name'] = $row['creator_name'];
                $row_array['time'] = $row['created_at'];
                $row_array['depth'] = $row['depth'];
                array_Push($return_arr, $row_array);
            }
        };
        return response($return_arr);	// 배열을 뷰로 전송한다.
    }
}
