@extends('admin.layout')

@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        <input type="text" name="title">
        {{ csrf_field() }}
        <input type="text" name="content">
        <input type="submit" name="submit">
    </form>
@endsection
