@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
            <production-component :postid="{{$post_id}}" :touser="{{$to_user}}" :userid="{{$user_id}}"></production-component>
            <chat-component :postid="{{$post_id}}" :touser="{{$to_user}}" :userid="{{$user_id}}"></chat-component>      
    </div>

</div>
@endsection