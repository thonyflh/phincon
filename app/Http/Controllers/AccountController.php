<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AccountController extends Controller
{
    //
    public function index(){
        $account = User::all();
        return view('account.account', compact('account'));
    }

    public function addAgent(Request $request){
        $validation = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>['required',
            Password::min(8)->mixedCase()->numbers()->symbols()],
        ]);

        $account = User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
        ]);

        return back()->with('success', 'Account added successfully!');
    }

    public function delete($id){
        $account_data = User::find($id);

        $account_data->delete();

        return response()->json('Data Deleted Successfully');
    }

    public function updateAccount($id){
        $account_data = User::findOrFail($id);

        return view('account.edit', compact('account_data'));
    }

    public function updatelogic(Request $request, $id) {
        $request->validate([
            'name'=>'nullable',
            'email'=>'nullable|email',
        ]);

        $account_data = User::find($id);
        $account_data->name = $request->name;
        $account_data->email = $request->email;

        $account_data->save();

        return redirect('/account')->with('success','Data Updated Successfully');
    }

    public function editpass($id){
        $account_data = User::findOrFail($id);
        return view('account.editpass',compact('account_data'));
    }

    public function updatepass(Request $request){
        $update= User::find($request->id);
         $validation = $request->validate([
             'password' => ['required',
              Password::min(8)
                  ->mixedCase()
                  ->numbers()
                  ->symbols()],
         ]);
         $update->password   = Hash::make(request()->password);
         $update->save();
         return redirect('/account')->with('success','Successfully Password Updated');
     }
}
