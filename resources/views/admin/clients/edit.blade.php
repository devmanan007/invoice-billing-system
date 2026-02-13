@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Client</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('clients.update', $client) }}">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name', $client->name) }}"
                           required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email', $client->email) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Phone</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           value="{{ old('phone', $client->phone) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Company</label>
                    <input type="text"
                           name="company_name"
                           class="form-control"
                           value="{{ old('company_name', $client->company_name) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>GST Number</label>
                    <input type="text"
                           name="gst_number"
                           class="form-control"
                           value="{{ old('gst_number', $client->gst_number) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Address</label>
                    <textarea name="address"
                              class="form-control"
                              rows="3">{{ old('address', $client->address) }}</textarea>
                </div>
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@endsection
