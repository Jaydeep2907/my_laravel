@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 8 CRUD Example </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('companies.create') }}" title="Create a companie"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<link rel="stylesheet" href="{{ url('/') }}/assets/css/datatable/jquery.dataTables.min.css">
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
        @foreach ($companies as $companie)
        <tr>
            <td>{{ $companie->id }}</td>
            <td>{{ $companie->name }}</td>
            <td>{{ $companie->description }}</td>
            <td>{{ $companie->price }}</td>
            <td>{{ $companie->created_at }}</td>
            <td>
                <form action="{{ route('companies.destroy',$companie->id) }}" method="POST">
                    <a href="{{ route('companies.edit',$companie->id) }}"><i class="fas fa-edit fa-lg"></i></a>
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


