@extends('layouts.master')

@section('content')
    @if(isset($title))
        <h1>Show book: {{ $title }}</h1>
    @else
        <h1>No book chosen.</h1>
    @endif
@stop
