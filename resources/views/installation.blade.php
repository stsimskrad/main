@extends('layouts.plain')

@section('content')
    <installation id="{{Auth::user()->id}}"></installation>
@endsection
