@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection

@section('content')
    <div class="row full-height">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <h6 class="mb-0 text-uppercase">Update transaction</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="user_id" value="{{ auth()->user()->id }}">

                                {{-- Account Dropdown --}}
                                <div class="mb-3">
                                    <label for="account_id" class="form-label">Account</label>
                                    <select id="account_id" name="account_id" class="form-select" required>
                                        <option selected disabled value="">Choose an account...</option>
                                        @foreach ($accounts as $account)
                                            <option value="{{ $account->id }}"
                                                {{ old('account_id') == $account->id ? 'selected' : '' }}>
                                                {{ $account->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Category Dropdown --}}
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select id="category_id" name="category_id" class="form-select" required>
                                        <option selected disabled value="">Choose a category...</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Type Dropdown --}}
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select id="type" name="type" class="form-select" required>
                                        <option selected disabled value="">Choose a type...</option>
                                        <option value="income" {{ old('type') == 'income' ? 'selected' : '' }}>Income
                                        </option>
                                        <option value="expense" {{ old('type') == 'expense' ? 'selected' : '' }}>Expense
                                        </option>
                                    </select>
                                </div>

                                {{-- Amount Input --}}
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="number" id="amount" name="amount" class="form-control" step="0.01"
                                        value="{{ old('amount') }}" required>
                                </div>

                                {{-- Date Input --}}
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" id="date" name="date" class="form-control"
                                        value="{{ old('date') }}" required>
                                </div>

                                {{-- Description Input --}}
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
                                </div>


                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Update Category</button>
                                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
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
