@extends('layouts.admin')

@section('title', '随言碎语列表')

@section('nav', '随言碎语列表')

@section('description', '博客随言碎语')

@section('content')
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="{{ url('admin/chat/index') }}">随言碎语列表</a>
        </li>
        <li>
            <a href="{{ url('admin/chat/create') }}">添加随言碎语</a>
        </li>
    </ul>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th width="10%">id</th>
            <th width="65%">内容</th>
            <th width="15%">添加日期</th>
            <th width="10%">操作</th>
        </tr>
        @foreach($data as $k => $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->content }}</td>
                <td>{{ $v->created_at }}</td>
                <td>
                    <a href="{{ url('admin/chat/edit', [$v->id]) }}">编辑</a>
                    |
                    <a href="{{ url('admin/chat/destroy', [$v->id]) }}">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $data->links() }}
    </div>
@endsection
