@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="content" class="col-sm col-form-label">聯繫電話：</label>
                                <div class="col-sm-4">
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                                </div>
                                <label for="content" class="col-sm col-form-label">聯繫地址：</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
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
