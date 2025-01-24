<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Retrieve categories associated with the authenticated user
    $categories = Category::where('user_id', Auth::id())->get();

    // Retrieve budgets for the authenticated user and eager load the category relationship
    $budgets = Budget::where('user_id', Auth::id())
                     ->with('category') // Eager load the associated category
                     ->get();

    // Return the view with categories and budgets
    return view('Users Frontend Theme.budgets.get_budgets', compact('categories', 'budgets'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('user_id', Auth::id())->get();
        $budgets = Budget::where('user_id', Auth::id())
                     ->with('category') // Eager load the associated category
                     ->get();
        return view('Users Frontend Theme.budgets.add_budget', compact('categories', 'budgets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the request data
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'category_id' => 'required|exists:categories,id',
        'amount' => 'required|numeric|min:0',
        'start_date' => 'required|date|before_or_equal:end_date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    // Find the category by its ID (category_id is passed from the select dropdown)
$category = Category::find($request->category_id);

if (!$category) {
    return back()->withErrors(['category_name' => 'Category not found.']);
}

    // Create the budget
    $budget = Budget::create([
        'user_id' => $request->user_id,
        'category_id' => $request->category_id,
        'amount' => $request->amount,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
    ]);

    // Redirect back with success message
    return redirect()->route('budgets.index')
        ->with('success', 'Budget created successfully.');
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

        $budget = Budget::findOrFail($id); // Retrieve the budget by its ID
        $categories = Category::all();
        return view ('Users Frontend Theme.budgets.update_budget',compact('categories','budget'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'amount' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $budget = Budget::findOrFail($id);
        $budget->update($request->all());

        return redirect()->route('budgets.index')->with('success', 'Budget updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Budget $budget)
    {
        // Authorization
        if ($budget->user_id !== Auth::id()) {
            return redirect()->route('budgets.index')->with('error', 'You are not authorized to delete this budget.');
        }

        // Delete the budget
        $budget->delete();

        // Redirect after deletion
        return redirect()->route('budgets.index')->with('success', 'Budget deleted successfully.');
    }

}
