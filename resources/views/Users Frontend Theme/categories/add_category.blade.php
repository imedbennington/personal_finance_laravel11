@extends('layouts.app')

@section('title', 'Add category')

@section('css')

@endsection

@section('content')
    <div class="row full-height">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header px-4 py-3">
                    <h5 class="mb-0">Add category </h5>
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
                <div class="card-body p-4">
                    <form method="post" action="{{ route('categories.store') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label"> Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName" name="name"
                                    placeholder="Enter Account Name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputType" class="col-sm-3 col-form-label">Select Type</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="inputType" name="type" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="income" {{ old('type') == 'income' ? 'selected' : '' }}>Income</option>
                                    <option value="expense" {{ old('type') == 'expense' ? 'selected' : '' }}>Expense
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4" name="submit">Submit</button>
                                    <button type="reset" class="btn btn-light px-4">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('js')
    @endsection
