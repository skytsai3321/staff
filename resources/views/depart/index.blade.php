@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        部門資訊
                        <a href="{{ route('depart.create') }}" class="btn btn-secondary justify-content-end">新增部門</a>
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                        @foreach($departs as $depart)
                                <li class="list-group-item">
                                部門名稱：{{ $depart->name }}
                                <a href="{{ route('depart.edit', $depart->id) }}" class="btn btn-primary justify-content-end">修改</a>
                                    <a href="{{ route('depart.destroy', $depart->id) }}" class="btn btn-danger">刪除</a>
                                </li>
                        @endforeach
                        </ul>
                    </div>
                    {{ $departs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
