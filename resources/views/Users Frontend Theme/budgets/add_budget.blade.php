@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection

@section('content')

<div class="row full-height">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">Add budgets</h5>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('budgets.store') }}">
                @csrf

                <!-- User ID (Hidden or Dropdown) -->
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <!-- Category Dropdown -->

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <option value="" selected disabled>Choose a category...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Amount -->
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" id="amount" name="amount" class="form-control" step="0.01" required>
                </div>

                <!-- Start Date -->
                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="form-control" required>
                </div>

                <!-- End Date -->
                <div class="mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Create Budget</button>
            </form>


@endsection

@section('js')
@endsection
