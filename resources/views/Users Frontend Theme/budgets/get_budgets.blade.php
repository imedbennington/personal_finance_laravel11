@extends('layouts.app')

@section('title', 'View budgets')

@section('css')

@endsection

@section('content')

    <div class="row full-height">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <h6 class="mb-0 text-uppercase">Your Budgets</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Actions</th> <!-- Add column for actions -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($budgets as $budget)
                                        <tr>
                                            <td>{{ $budget->id }}</td>
                                            <td>{{ $budget->category->name ?? 'No category' }}</td>
                                            <td>{{ $budget->amount }}</td>
                                            <td>{{ $budget->start_date }}</td>
                                            <td>{{ $budget->end_date }}</td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('budgets.edit', ['id' => $budget->id]) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>

                                                <!-- Delete button -->
                                                <form action="{{ route('delete_account', $budget->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this account?')">
                                                        Delete
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
