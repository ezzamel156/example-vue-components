@extends('layout')

@section('content')
    <accordian :items=" {{ json_encode($items) }} ">
    </accordian>
@endsection

