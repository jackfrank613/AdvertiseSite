@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
            <production-component :postid="{{$post_id}}" :touser></production-component>
            <chat-component :touser="2"></chat-component>      
    </div>

</div>
@endsection