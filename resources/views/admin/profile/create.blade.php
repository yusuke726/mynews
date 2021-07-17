<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>
    </head>
    <body>
    @extends('layouts.admin')
    
    @section('title', 'プロフィール')
    
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                @guest
                        <a class="nav-link" href="{{ route('login') }}"></a>
        
                @else
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
             
                        <form id="logout-form" action="{{ route('logout') }}"method="POST" style="display: none;">
                         @csrf
                         </form>
                         </div>
                </li>
                @endguest
                    <h1>My プロフィール</h1>
                    <form action="{{ action('Admin\ProfileController@create') }}" methot="post" enctype="multipart/form-data">
                        
                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="form-group row">
                            <label class="col-md-2">氏名</label>
                            <div class="col-md-10">
                            <input type="text" class="form-cotrol" name="name" value="{{old('name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">性別</label>
                            <div class="col-md-2">
                            <input type="text" name="gender" value="{{old('gender') }}">
                        </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">趣味</label>
                            <div class="col-md-10">
                             <textarea class="form-control" name="hobby" row="20">{{old('hobby') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                             <textarea class="form-control" name="introdaction" row="20">{{old('introdaction') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </div>
            </div>
        </div>
    @endsection
    </body>
</html>