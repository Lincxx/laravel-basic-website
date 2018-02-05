@extends('layouts.app')

@section('content')
    <h1>Home</h1>
@endsection

@section('sidebar')
{{--  To show the parent from the layout.app  --}}
    @parent
    This is appended to sidebar
@endsection