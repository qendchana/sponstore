<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Event;

class InboxController extends Controller
{
    public function inbox(Request $request){
        $query = Transaction::with('sponsor', 'event');

        $search = $request->search ?? '';

        if($request->has('search') && $request->search != ''){
            $search = $request->search;
            $query->whereHas('user', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            })->orWhereHas('event', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        $sponsorId = auth()->guard('sponsor')->id();
        $query->whereHas('event', function ($q) use ($sponsorId) {
            $q->where('sponsor_id', $sponsorId);
        });

        $transactions = $query->orderBy('updated_at', 'desc')->paginate(10);

        return view('inbox', compact('search', 'transactions'));
    }

    public function inboxuser(Request $request){

        // dd($query = Transaction::with(['sponsor', 'event']));
        $query = Transaction::with(['sponsor', 'event']);

        $search = $request->search ?? '';
        $userId = auth()->id();
        $query->where('user_id', $userId);

        if($request->has('search') && $request->search != ''){
            $search = $request->search;
            $query->whereHas('sponsor', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            })->orWhereHas('event', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        if ($request->has('event_id')) {
            $query->where('event_id', $request->event_id);
        }

        $query->whereHas('event', function ($q) use ($userId) {
            $q->where('user_id', $userId);
        });

        $transactions = $query->orderBy('updated_at', 'desc')->get();
        $events = Event::where('user_id', $userId)->get();

        return view('inboxuser', compact('transactions', 'events'));
    }

    public function sent(Request $request){

        // dd($query = Transaction::with(['sponsor', 'event']));
        $query = Transaction::with(['sponsor', 'event']);

        $userId = auth()->id();
        $query->where('user_id', $userId);

        if ($request->has('event_id')) {
            $query->where('event_id', $request->event_id);
        }

        if($request->has('search') && $request->search != ''){
            $search = $request->search;
            $query->whereHas('sponsor', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            })->orWhereHas('event', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        $query->whereHas('event', function ($q) use ($userId) {
            $q->where('user_id', $userId);
        });

        $transactions = $query->orderBy('updated_at', 'desc')->get();
        $events = Event::where('user_id', $userId)->get();

        return view('sent', compact('transactions', 'events'));
    }

}
