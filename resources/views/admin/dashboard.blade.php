@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row g-3">

    @can('clients.view')
    <div class="col-md-3">
        <div class="card text-bg-primary">
            <div class="card-body">
                <h6>Total Clients</h6>
                <h3>0</h3>
            </div>
        </div>
    </div>
    @endcan

    @can('invoices.view')
    <div class="col-md-3">
        <div class="card text-bg-success">
            <div class="card-body">
                <h6>Total Invoices</h6>
                <h3>0</h3>
            </div>
        </div>
    </div>
    @endcan

    @can('reports.view')
    <div class="col-md-3">
        <div class="card text-bg-warning">
            <div class="card-body">
                <h6>Total Revenue</h6>
                <h3>₹0</h3>
            </div>
        </div>
    </div>
    @endcan

</div>
@endsection
