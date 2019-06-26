@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">部門名稱：{{ $depart->name }}</div>
                    <div align="center">
                        <a href="{{ route('depart.edit', $depart->id) }}" class="btn btn-primary">編輯</a>

                        <form action="{{ route('depart.destroy', $depart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">刪除</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
