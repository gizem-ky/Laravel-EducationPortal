@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')
    @parent

    <p>sub page data</p>
@endsection

@section('content')
    <p>this is my body content.</p>
@endsection
