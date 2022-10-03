@extends('layouts.master')
@section('content')
<h1>you can edit Product</h1>
    <a class="btn btn-info float-right mb-4" href="{{ url('/') }}">Go Back</a>
    <form method="get" action="{{ url('/edit-product/'.$product->id) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" value="{{ old('title') ?? $product->title }}" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input type="number" value="{{ old('price') ?? $product->price }}" name="price" class="form-control" placeholder="Price">
        </div>
        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <button class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
