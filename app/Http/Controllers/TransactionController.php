<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Category;
use App\Models\Transaction;
use Carbon\Carbon;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('Users Frontend Theme.transactions.get_transactions', compact('transactions', ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $accounts = Account::all(); // Fetch all accounts
    $categories = Category::all(); // Fetch all categories

    return view('Users Frontend Theme.transactions.add_transaction', compact('accounts', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Validate the request
    $request->validate([
        'account_id' => 'required|exists:accounts,id',
        'user_id' => 'required|exists:users,id',
        'category_id' => 'required|string|exists:categories,id',
        'type' => 'required|in:income,expense',
        'amount' => 'required|numeric|min:0',
        'date' => 'required|date',
        'description' => 'nullable|string|max:500',
    ]);

// Find the category by its ID (category_id is passed from the select dropdown)
$category = Category::find($request->category_id);

    if (!$category) {
        return back()->withErrors(['category_name' => 'Category not found.']);
    }

    // Create a new transaction
    $transaction = Transaction::create([
        'account_id' => $request->account_id,
        'user_id' => $request->user_id,
        'category_id' => $category->id,
        'type' => $request->type,
        'amount' => $request->amount,
        'date' => $request->date,
        'description' => $request->description,
    ]);

    // Redirect back with success message
    return redirect()->route('transactions.index')
        ->with('success', 'Transaction created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        $accounts = Account::all(); // Assuming you need to show accounts
        $categories = Category::all(); // Assuming you need to show categories
        //return view('transactions.edit', compact('transaction', 'accounts', 'categories'));

        return view('Users Frontend Theme.transactions.update_transactions', compact('transaction', 'accounts', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        // Validate the input
        $request->validate([
            'account_id' => 'required|exists:accounts,id',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'type' => 'required|in:income,expense',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'nullable|string|max:500',
        ]);

        // Update the transaction
        $transaction->update([
            'account_id' => $request->account_id,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'amount' => $request->amount,
            'date' => $request->date,
            'description' => $request->description,
        ]);

        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction deleted successfully.');
    }
}
