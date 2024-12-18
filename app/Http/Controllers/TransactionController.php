<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{

    public function index(){
        $transactions = Transaction::where('sponsor_id', auth()->id())->get();
        return view('transaction.index', compact('transactions'));
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'file_path' => 'required|file|mimes:pdf|max:2048', // Ensure file is a PDF and within size limit
            'sponsor_id' => 'required|integer|exists:sponsors,id', // Ensure sponsor_id exists in sponsors table
            'user_id' => 'required|integer|exists:users,id', // Ensure user_id exists in users table
            'event_id' => 'required|integer|exists:events,id', // Ensure event_id exists in events table
        ]);

        $fileName = 'proposal_' . uniqid() . '.' . $request->file('file_path')->extension();
        $proposalPath = $request->file('file_path')->storeAs('files', $fileName, 'public');

        // $proposalPath = $request->file('file_path')->store('files', 'public');

        Transaction::create([
            'sponsor_id' => $request->sponsor_id,
            'user_id' => $request->user_id,
            'event_id' => $request->event_id,
            'status' => 'pending', // Default status
            'file_path' => $proposalPath, // Save the file path
        ]);

        return redirect()->route('sent')->with('success', 'Proposal uploaded successfully!');
    }

    public function accept($id){
        $transaction = Transaction::findOrFail($id);
        $transaction->update(['status' => 'accepted', 'updated_at' => now()]);
        return redirect()->back()->with('success', 'Proposal accepted.');
    }

    public function reject($id){
        $transaction = Transaction::findOrFail($id);
        $transaction->update(['status' => 'rejected', 'updated_at' => now()]);
        return redirect()->back()->with('error', 'Proposal rejected.');
    }

    public function negotiate(Request $request, $id){
        // dd($request->negotiation);
        $transaction = Transaction::findOrFail($id);
        $transaction->negotiation = $request->negotiation;
        $transaction->update(['status' => 'negotiated', 'updated_at' => now()]);
        $transaction->save();
        return redirect()->back();
    }

    public function organizationProposals(){
        $transactions = Transaction::where('user_id', auth()->id())->get();
        return view('inbox', compact('transactions'));
    }
}
