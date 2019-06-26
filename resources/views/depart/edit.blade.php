@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form action="{{ route('depart.update', $depart->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="content" class="col-sm col-form-label">部門名稱：</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $depart->name }}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary" value="送出">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
