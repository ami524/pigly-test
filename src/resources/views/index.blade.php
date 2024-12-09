@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


@error('name')
{{ $message }}
@enderror

@error('email')
{{ $message }}
@enderror

@endsection
