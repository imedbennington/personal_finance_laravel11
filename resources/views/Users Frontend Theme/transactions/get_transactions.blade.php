@extends('layouts.app')

@section('content')
    <div class="row full-height">
        <div class="col-lg-8">
            <div class="card">
                <h1>Transactions</h1>
                <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Add transaction</a>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->description }}</td>
                                <td>{{ $transaction->amount }}</td>
                                <td>{{ ucfirst($transaction->type) }}</td>
                                <td>{{ $transaction->date }}</td>
                                <td>
                                    <a href="{{ route('transactions.edit', $transaction->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
