@extends('layouts.admin')
@section('title', 'プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="con-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                   
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                   
                        <div class='form-group row'>
                            <lavel class="col-md-2" for="name">名前</lavel>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="gender">性別</label>
                                 <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" value="">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="hobby">趣味</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="hobby" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="introduction">自己紹介欄</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="introduction" rows="5"></textarea>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection