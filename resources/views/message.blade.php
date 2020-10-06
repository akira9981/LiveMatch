@extends('layouts.app')

@section('content')
<h1>message</h1>
<a href={{url("/")}}>募集</a>
<h2>{{$}}件の募集中</h2>
@foreach($meetings as $meeting)
{{$title}}
@endforeach

<h2>{{$}}件の参加申請</h2>
@foreach($meetings as $meeting)
{{$user->name}}
@endforeach

<h2>チャット画面</h2>
{{$user_name}}{{$message}}

<a href={{url("/")}}>参加</a>
{{$}}件の参加中
{{$title}}

@endsection