@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">員工姓名：{{ $user->name }}</div>
                    <div class="card-body">電子信箱：{{ $user->email }}</div>
                    <div class="card-body">所屬部門：{{ $user->departs->name }}</div>
                    <div class="card-body">出生日期：{{ $user->birthday }}</div>
                    <div class="card-body">聯繫電話：{{ $user->phone }}</div>
                    <div class="card-body">聯繫地址：{{ $user->address }}</div>
   
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">編輯</a>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">刪除</button>
                </form> 
                </div>
            </div>
        </div>
    </div>
@endsection
