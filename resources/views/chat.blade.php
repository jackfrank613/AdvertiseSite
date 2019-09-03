@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <production-component></production-component>
            <chat-component :touser="2"></chat-component>      
    </div>

</div>
@endsection