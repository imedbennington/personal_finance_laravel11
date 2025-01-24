<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$accounts = Account::all();
        $accounts = Account::where('user_id', Auth::id())->get();
        return view('Users Frontend Theme.accounts.get_accounts', compact('accounts'));
        //, compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Users Frontend Theme.accounts.create_account');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id'=>'required|numeric',
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:50', // bank, cash, credit card
            'balance' => 'required|numeric',
        ]);

        Account::create($validated);

        return redirect()->route('get_create_account')->with('success', 'Account created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Users Frontend Theme.accounts.get_accounts');
        //, compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $account = Account::findOrFail($id);
        return view('Users Frontend Theme.accounts.update_account', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the request data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:50',
        'balance' => 'required|numeric',
    ]);

    // Retrieve the account model using the provided ID
    $account = Account::findOrFail($id);

    // Update the account with the validated data
    $account->update($validated);

    // Redirect with success message
    //return redirect()->back()->with('success', 'Account updated successfully.');
    return redirect()->route('update-account', ['id' => $id])->with('success', 'Account updated successfully.');
    //return redirect()->route('get-accounts'['id' => $id])->with('success', 'Account updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        $account->delete();
        //return redirect()->route('accounts.index')->with('success', 'Account deleted successfully.');
        return redirect()->back()->with('success', 'Account updated successfully.');
    }



    public function get_info()
    {
        $usr = Auth::user();
        //dd($usr);
        return view('Users Frontend Theme.accounts.user-profile', compact('usr'));
    }
}
