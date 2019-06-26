@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        員工資訊列表
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                        @foreach($users as $user)
                            <li class="list-group-item">
                                員工姓名：<a href="{{ route('user.show', $user->id)}}">{{ $user->name }}</a><br>
                                電子信箱：{{ $user->email }} <br>
                                所屬部門：{{ $user->departs->name }} <br>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
