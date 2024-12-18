<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    public function profile($userId){

        $user = User::orderBy('created_at', 'desc')->findOrFail($userId);

        $events = $user?->events;

        return view('profile', [
            'user' => $user,
            'events' => $events
        ]);
    }

    public function addevent(Request $request){

        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'date' => 'required|date',
            'location' => 'required|string|max:800'
        ]);

        // ini ngambil the current logged in user
        $eventDate = Carbon::createFromFormat('m/d/Y', $validated['date'])->format('Y-m-d');
        $user = auth()->user();
        // dd($user);

        if ($user) {
            $user->events()->create([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'date' => $eventDate,
                'location' => $validated['location']
            ]);
        };

        return redirect()->route('profile', $user);
    }
}
