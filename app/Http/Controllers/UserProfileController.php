<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserProfileController extends Controller
{
    public function index()
    {

        try {
            // Log the beginning of the process
            Log::debug('Starting the index method in UserProfileController.');

            // Get the current month and year
            $currentMonth = Carbon::now()->month;
            $currentYear = Carbon::now()->year;

            // Log values for debugging
            Log::debug('Current month: ' . $currentMonth);
            Log::debug('Current year: ' . $currentYear);

            // Calculate total income and expenses for the current month
            $monthlyIncome = Transaction::where('type', 'income')
                ->whereMonth('date', $currentMonth)
                ->whereYear('date', $currentYear)
                ->sum('amount');
            Log::debug('Monthly income: ' . $monthlyIncome);

            $monthlyExpense = Transaction::where('type', 'expense')
                ->whereMonth('date', $currentMonth)
                ->whereYear('date', $currentYear)
                ->sum('amount');
            Log::debug('Monthly expense: ' . $monthlyExpense);

            // Calculate total income and expenses for the current year
            $yearlyIncome = Transaction::where('type', 'income')
                ->whereYear('date', $currentYear)
                ->sum('amount');
            Log::debug('Yearly income: ' . $yearlyIncome);

            $yearlyExpense = Transaction::where('type', 'expense')
                ->whereYear('date', $currentYear)
                ->sum('amount');
            Log::debug('Yearly expense: ' . $yearlyExpense);

            // Example goals for monthly and yearly income/expenses
            $monthlyIncomeGoal = 10000;
            $monthlyExpenseGoal = 5000;

            // Prevent division by zero and calculate percentages
            $monthlyIncomePercentage = $monthlyIncomeGoal > 0 ? ($monthlyIncome / $monthlyIncomeGoal) * 100 : 0;
            Log::debug('Monthly income percentage: ' . $monthlyIncomePercentage);

            $monthlyExpensePercentage = $monthlyExpenseGoal > 0 ? ($monthlyExpense / $monthlyExpenseGoal) * 100 : 0;
            Log::debug('Monthly expense percentage: ' . $monthlyExpensePercentage);

            // For yearly income and expense, calculate based on monthly goals * 12 (for yearly targets)
            $yearlyIncomeGoal = $monthlyIncomeGoal * 12;
            $yearlyExpenseGoal = $monthlyExpenseGoal * 12;

            $yearlyIncomePercentage = $yearlyIncomeGoal > 0 ? ($yearlyIncome / $yearlyIncomeGoal) * 100 : 0;
            Log::debug('Yearly income percentage: ' . $yearlyIncomePercentage);

            $yearlyExpensePercentage = $yearlyExpenseGoal > 0 ? ($yearlyExpense / $yearlyExpenseGoal) * 100 : 0;
            Log::debug('Yearly expense percentage: ' . $yearlyExpensePercentage);


            $usr = Auth::user();
        //dd($usr);
            // Pass data to the view
            return view('Users Frontend Theme.stats.view-stats', compact(
                'monthlyIncomePercentage', 'monthlyExpensePercentage',
                'yearlyIncomePercentage', 'yearlyExpensePercentage', 'usr'
            ));

        } catch (\Exception $e) {
            // Log the error
            Log::error('Error in UserProfileController@index: ' . $e->getMessage());

            // Optionally, log the stack trace for deeper inspection
            Log::error('Stack trace: ' . $e->getTraceAsString());

            // Redirect with an error message
            return redirect()->route('error.page')->with('error', 'There was an issue calculating your stats. Please try again later.');
        }
}

/*public function return_view (){
    $user = auth()->user();
    return view ('Users Frontend Theme.stats.view-stats', compact ('user'));
}*/
}
