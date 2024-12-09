@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection

@section('content')

<div class="row full-height">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <h6 class="mb-0 text-uppercase">Budgets</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('budgets.update', $budget->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Category Field -->
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select id="category_id" name="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
                                    <option value="" selected disabled>Choose a category...</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $budget->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Amount Field -->
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" name="amount" id="amount"
                                    class="form-control @error('amount') is-invalid @enderror"
                                    value="{{ old('amount', $budget->amount) }}" step="0.01" required>
                                @error('amount')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Start Date Field -->
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" id="start_date" name="start_date" class="form-control"
                                    value="{{ old('start_date', $budget->start_date) }}" required>
                                @error('start_date')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- End Date Field -->
                            <div class="mb-3">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" id="end_date" name="end_date" class="form-control"
                                    value="{{ old('end_date', $budget->end_date) }}" required>
                                @error('end_date')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Update Budget</button>
                            <a href="{{ route('get_create_account') }}" class="btn btn-secondary">Cancel</a>
                        </form>

                        @if (session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                                <!-- Show the "Back to Accounts" button -->
                                <a href="{{ route('get-accounts') }}" class="btn btn-info mt-2">Back to Accounts</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
@endsection
