@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection

@section('content')
<div class="row full-height">
    <div class="col-lg-8 mx-auto">
        <div class="card">
        <h6 class="mb-0 text-uppercase">Update category</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Name Field -->
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}" required>
        @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <!-- Type Field -->
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select name="type" id="type" class="form-control @error('type') is-invalid @enderror" required>
            <option value="income" {{ old('type', $category->type) == 'bank' ? 'selected' : '' }}>Income</option>
            <option value="expense'" {{ old('type', $category->type) == 'cash' ? 'selected' : '' }}>Expense</option>
        </select>
        @error('type')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Update Category</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@if(session('success'))
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
