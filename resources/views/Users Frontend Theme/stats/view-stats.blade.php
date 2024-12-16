@extends('layouts.app')

@section('css')
@section('content')


<div class="row full-height">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5 class="d-flex align-items-center mb-3">Status</h5>
                <p>Monthly Income</p>
                <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar"
                        style="width: {{ $monthlyIncomePercentage }}%"
                        aria-valuenow="{{ $monthlyIncomePercentage }}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p>Monthly Expense</p>
                <div class="progress-bar bg-primary" role="progressbar"
                    style="width: {{ $monthlyIncomePercentage }}%"
                    aria-valuenow="{{ $monthlyIncomePercentage }}" aria-valuemin="0"
                    aria-valuemax="100">
                </div>

                <p>Yearly Income</p>
                <div class="progress mb-3" style="height: 5px">
                    <div class="progress-bar bg-success" role="progressbar"
                        style="width: {{ $yearlyIncomePercentage }}%"
                        aria-valuenow="{{ $yearlyIncomePercentage }}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p>Yearly Expense</p>
                <div class="progress" style="height: 5px">
                    <div class="progress-bar bg-warning" role="progressbar"
                        style="width: {{ $yearlyExpensePercentage }}%"
                        aria-valuenow="{{ $yearlyExpensePercentage }}"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('js')
@endsection
