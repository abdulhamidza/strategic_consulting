<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consultant;

class ConsultantController extends Controller
{
    //
    public function index()
    {
        $Consultants = Consultant::all();
        return view('admin.consultants.index',[
            'Consultants'=>$Consultants
        ]);
    }

    public function create()
    {
        return view('admin.consultants.create');
    }

    public function store(Request $request)
    {
        // validate user_email
        $validatedData = $request->validate([
            'email' => 'required|string',
        ]);
        // Check if the entered user_email already exists among other emails
        $consultant = Consultant::where('email', $validatedData['email'])->first();
        // return error message if the user_email already exists
        if ($consultant) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['custom_error' =>
                    'The entered email "'.$request->email.'" already exists, please use another email']);
        }

        $data = new Consultant();
        $data->name = $request->name;
        $data->bio = $request->bio;
        $data->experience_years = $request->experience_years;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('admin.consultants');
    }

    public function show($id)
    {
        $Consultant = Consultant::find($id);
        return view('admin.consultants.show', [
            'Consultant' => $Consultant
        ]);
    }

    public function edit($id)
    {
        $consultant = Consultant::find($id);
        return view('admin.consultants.edit', [
            'consultant' => $consultant
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Consultant::find($id);

        // validate user_email
        $validatedData = $request->validate([
            'email' => 'required|string',
        ]);
        // Check if the entered user_email already exists among other emails (excluding the current email)
        $consultant = Consultant::where('email', $validatedData['email'])
            ->where('id', '!=', $data->id)
            ->first();
        // return error message if the user_email already exists
        if ($consultant) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['custom_error' =>
                    'The entered email "'.$request->email.'" already exists, please use another email']);
        }

        $data->name = $request->name;
        $data->email = $request->email;
        $data->bio = $request->bio;
        $data->experience_years = $request->experience_years;
        $data->save();
        return redirect()->route('admin.consultants');
    }

    public function destroy($id)
    {
        $data =Consultant::find($id);
        $data->delete();
        return redirect()->route('admin.consultants');
    }
}
