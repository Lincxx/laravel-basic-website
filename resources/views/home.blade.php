@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, similique quam. Aliquam in vero minus earum ducimus. Repudiandae aut beatae minus, ex magnam magni neque fugit, quas omnis quisquam quos.</p>
@endsection

@section('sidebar')
{{--  To show the parent from the layout.app  --}}
    @parent
    This is appended to sidebar
@endsection