@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 8 CRUD Example </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table id="example" class="table is-striped" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit fa-lg"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


