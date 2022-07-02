@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

<form action="{{ route('products.update',$product->id) }}" method="POST" id="product_form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <?php // echo '<pre>';print_r($product->description);exit;?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                @if($errors->has('name'))
                <span class="error">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" name="description" placeholder="Description" value="{{ $product->description }}">{{ $product->description }}</textarea>
                @if($errors->has('description'))
                <span class="error">{{ $errors->first('description') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price</strong>
                <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
                @if($errors->has('price'))
                <span class="error">{{ $errors->first('price') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection