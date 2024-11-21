@extends('base')

@section('title','');

@section('content')

    <form action="{{url('furniture/' . $furniture->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="model">product name</label>
            <input value="{{old('model', $furniture->model)}}" required type="text" class="form-control" id="model" name="model" placeholder="futniture model">
        </div>
        <div class="form-group">
            <label for="price">product price</label>
            <input value="{{old('price', number_format($furniture->price,2))}}" required type="number" step="0.001" class="form-control" id="price" name="price" placeholder="product price">
        </div>
        <button type="submit" class="btn btn-primary">edit</button>
    </form>

@endsection