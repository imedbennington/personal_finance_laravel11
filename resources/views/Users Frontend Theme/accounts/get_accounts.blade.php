@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection

@section('content')
    <div class="row full-height">
        <div class="col-lg-8 mx-auto">
            <div class="card">
            <h6 class="mb-0 text-uppercase">DataTable Example</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Balance</th>
                                    <th>Type</th>
                                    <th>Actions</th> <!-- Add column for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($accounts as $account)
                                    <tr>
                                        <td>{{ $account->id }}</td>
                                        <td>{{ $account->name }}</td>
                                        <td>{{ $account->balance }}</td>
                                        <td>{{ $account->type }}</td>
                                        <td>
                                            <!-- Edit button -->
                                            <a href="{{ route('update-account', ['id' => $account->id]) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <!-- Delete button -->
                                            <form action="{{ route('delete_account', $account->id) }}" method="POST" style="display:inline-block;">
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
</body>

@endsection

@section('js')
@endsection

