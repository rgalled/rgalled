@extends('base')

@section('title', '')

@section('content')
<div class="form-group">
    product id #:
    {{$furniture->id}}
</div>
<div class="form-group">
    product name:
    {{$furniture->model}}
</div>
<div class="form-group">
    product price:
    {{number_format($furniture->price, 2)}}
</div>
<div class="form-group">
    <a href="{{url()->previous()}}">back</a>
</div>
@endsection