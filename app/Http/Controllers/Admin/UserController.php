<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::All();
        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // validate user_email
        $validatedData = $request->validate([
            'email' => 'required|string',
        ]);
        // Check if the entered user_email already exists among other emails
        $user = User::where('email', $validatedData['email'])->first();
        // return error message if the user_email already exists
        if ($user) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['custom_error' =>
                    'The entered email "'.$request->email.'" already exists, please use another email']);
        }
        $enteredPassword = $request->password;

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->password = Hash::make($enteredPassword);
        $data->role = $request->role;
        $data->gender = $request->input('gender', null);
        $data->birthdate = $request->birthdate;
        $data->save();
        return redirect()->route('admin.users');
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('admin.users.show', [
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);

        // validate user_email
        $validatedData = $request->validate([
            'email' => 'required|string',
        ]);
        // Check if the entered user_email already exists among other emails (excluding the current email)
        $user = User::where('email', $validatedData['email'])
            ->where('id', '!=', $data->id)
            ->first();
        // return error message if the user_email already exists
        if ($user) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['custom_error' =>
                    'The entered email "'.$request->email.'" already exists, please use another email']);
        }

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        if ($request->password) {
            $data->password = $request->password;
        }
        else {
            $user = User::find($id);
        }
        $data->password = $user->password;
        $data->role = $request->role;
        $data->gender = $request->input('gender', null);
        $data->birthdate = $request->birthdate;
        $data->save();
        return redirect()->route('admin.users');
    }

    public function destroy($id)
    {
        $data =User::find($id);
        $data->delete();
        return redirect()->route('admin.users');
    }
}
