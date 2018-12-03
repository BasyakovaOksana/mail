@extends('admin.layout')

@section('content')
    <table class="table table-striped">
        <tr>
            <td>Title</td>
            <td>Content</td>
            <td>Price</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product['title'] }}</td>
            <td>{{ $product['content'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>
                <form action="{{ route('products.destroy', $product['id']) }}">
                    <button type="submit">Удалить</button>
                </form>
            </td>
            <td><a href="{{ route('products.edit', $product['id'] ) }}" class="btn btn-success">Update</a></td>
        </tr>
    @endforeach
    </table>
@endsection
