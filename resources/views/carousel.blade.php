@extends('layout')

@section('content')
    <carousel :auto-play="true" :wrap-around="true">
        <img src="https://placeimg.com/640/480/any?1">
        <img src="https://placeimg.com/640/480/any?2">
        <img src="https://placeimg.com/640/480/any?3">
        <img src="https://placeimg.com/640/480/any?4">
    </carousel>
@endsection

