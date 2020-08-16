@extends('layout.master')
@section('content')
<div class="container">
    <h1><i class="fa fa-list"></i> Todo List ::</h1>
        <p>กรองสถานะ : <a href="#">ทั้งหมด</a> | <a href="#">Completed</a> | <a href="#">Incomplete</a></p>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <i class="fa fa-list"></i> รายการที่ต้องทำ
            <span class="pull-right"><a href="/post/create" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> เพิ่มรายการ</a></span>
        </h4>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อรายการ</th>
                <th>หมวดหมู่</th>
                <th>สถานะ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->detail}}</td>
                <td>{{$item->category->name}}</td>
                <td>@if($item->complete == 0) ยังไม่ได้ทำ @else ทำเสร็จแล้ว @endif</td>
                <td>
                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> edit</a>
                    <a href="/post/delete/{{$item->id}}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
{{$posts->links()}}
        <hr>
        <p>&copy; 2017 Bundit Nuntates</p>
    </div>
@endsection
