@extends('admin.layout')

@section('content')
    <form action="{{ route('products.edit', $product->id) }}" method="PUT">
        <input type="text" name="title" value="{{ $product->title }}">
    </form>
@endsection
