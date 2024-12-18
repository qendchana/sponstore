<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function admin(){

        $sponsor = Sponsor::orderBy('updated_at', 'desc')->paginate(12);
        return view('admin', [
            'sponsor' => $sponsor
        ]);
    }

    public function addSponsor(Request $request){

        $validatedData = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:sponsors,email',
            'password' => 'required|min:8',
            'phoneNum' => 'required|min:8',
            'description' => 'required|string',
            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $imagePath = $request->file('image')->store('/sponsors', 'public');
        Sponsor::create([
            'name' => $request->name,
            'description' => $request->description,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phoneNum' => $request->phoneNum,
            'image'=> $imagePath,
            'email_verified_at' => now()
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Image uploaded successfully...');
    }

    public function editSponsor($id){
        $sponsor = Sponsor::find($id);
        // dd($sponsor);
        return view('editSponsor', compact('sponsor'));
    }

    public function updateSponsor(Request $request, $id){
        $sponsor = Sponsor::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phoneNum' => 'required|min:8'
        ]);

        $sponsor->name = $request->name;
        $sponsor->email = $request->email;
        $sponsor->description = $request->description;
        $sponsor->phoneNum = $request->phoneNum;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sponsors', 'public');
            $sponsor->image = $imagePath;
        }
        $sponsor->save();

        return redirect('/admin')->with('success', 'Sponsor updated successfully!');
    }

    public function deleteSponsor($id){

        $sponsor = Sponsor::findOrFail($id);
        if($sponsor->image){
            \Storage::disk('public')->delete($sponsor->image);
        }

        $sponsor->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Sponsor updated successfully!');
    }
}
