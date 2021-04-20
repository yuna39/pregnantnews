<!--layouts/admin.blade.phpを読み込む-->
@extends('layouts.admin')

<!--admin.blade.phpの@yield('title')に'日記の新規作成'を埋め込む-->
@section('title','日記の新規作成')

@section('content')
    <div class="container">
        <div class=="row">
            <div class="col-md-8 mx-auto">
                <h2>日記の新規作成</h2>
                <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">日付</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">朝の出来事</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="8">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">昼の出来事</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="8">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">夜の出来事</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="8">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">今日の写真</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection

