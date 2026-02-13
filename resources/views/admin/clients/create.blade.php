@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Add Client</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Company</label>
                    <input type="text" name="company_name" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>GST Number</label>
                    <input type="text" name="gst_number" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Address</label>
                    <textarea name="address" class="form-control"></textarea>
                </div>
            </div>

            <button class="btn btn-primary">Save</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

@endsection
