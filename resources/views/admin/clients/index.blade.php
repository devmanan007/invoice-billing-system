@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h4>Clients</h4>
    <a href="{{ route('clients.create') }}" class="btn btn-success">Add Client</a>
</div>

<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th width="150">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('clients.destroy', $client) }}"
                              method="POST"
                              style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this client?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">No clients found</td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection
