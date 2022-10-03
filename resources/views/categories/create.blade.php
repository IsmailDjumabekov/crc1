@extends('layouts.master')
@section('content')
<div class="container">
    <a class="btn btn-info float-right mb-4" href="{{ url('/') }}">Go Back</a>
    <h1>you can create Category</h1>
    <form method="post" action="{{ url('/add-category') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Category name">
        </div>
        <button class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
