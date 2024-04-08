<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>編輯留言</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h4>编辑留言 <a href="{{ route("index") }}">返回留言</a></h4>
    @if(Session::has('message'))
    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
    <hr>
    <form action="{{ route("update", $record->id) }}" method="post">
        @csrf
        @method("put")
        <div class="form-group">
            <label for="name">您的姓名</label>
            <input type="text" name="name" class="form-control form-inline" id="name" placeholder="請輸入您的姓名" value="{{ $record->name }}">
        </div>
        <div class="form-group">
            <label for="phone">您的手機</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="請輸入您的手機號碼" value="{{ $record->phone }}">
        </div>
        <div class="form-group">
            <label for="title">留言標題</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="請輸入您的留言標題" value="{{ $record->title }}">
        </div>
        <div class="form-group">
            <label for="content">留言内容</label>
            <textarea class="form-control" name="content" rows="5" placeholder="在這裡輸入您的留言内容">{{ $record->content }}</textarea>
        </div>
        <hr>
        <button type="submit" class="btn btn-default">提交</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>
