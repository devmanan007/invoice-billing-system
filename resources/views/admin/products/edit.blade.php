@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Add Product</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ old('name', $client->name) }}" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>SKU</label>
                    <input type="text" name="sku" value="{{ old('sku', $client->sku) }}" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Price</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price', $client->price) }}" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>GST %</label>
                    <input type="number" step="0.01" name="gst_percentage" value="{{ old('gst_percentage', $client->gst_percentage) }}" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ old('description', $client->description) }}</textarea>
                </div>
            </div>

            <button class="btn btn-primary">Save</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

@endsection
