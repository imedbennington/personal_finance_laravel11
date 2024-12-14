@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection

@section('content')
    <div class="row full-height">
        <div class="col-lg-8">
            <div class="card">
                <h1>Transactions</h1>
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add category</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ ucfirst($category->type) }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
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
    </div>
    </div>
@endsection

@section('js')
@endsection
