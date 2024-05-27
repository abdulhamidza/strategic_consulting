<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultant;
use App\Models\Consultation;
use App\Models\User;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    //
    public function index()
    {
        $Consultations = Consultation::all();
        return view('admin.consultations.index', [
            'Consultations' => $Consultations
        ]);
    }

    public function achieved()
    {
        $Consultations = Consultation::all();
        return view('admin.consultations.achieved', [
            'Consultations' => $Consultations
        ]);
    }
    public function unachieved()
    {
        $Consultations = Consultation::all();
        return view('admin.consultations.unachieved', [
            'Consultations' => $Consultations
        ]);
    }

    public function create()
    {
        $Users = User::All();
        $Consultants = Consultant::all();
        return view('admin.consultations.create', [
            'Users' => $Users,
            'Consultants' => $Consultants
        ]);
    }

    public function store(Request $request)
    {
        $data = new Consultation();
        $data->title = $request->title;
        $data->user_id = $request->user_id;
        $data->consultant_id = $request->consultant_id;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->duration = $request->duration;
        $data->review = $request->review;
        $data->customer_entity = $request->customer_entity;
        $data->save();
        return redirect()->route('admin.consultations');
    }

    public function achieve_it($id)
    {
        $Consultation = Consultation::find($id);
        $Consultation->status = "achieved";
        $Consultation->save();
        return redirect()->route('admin.consultations');
    }

    public function show($id)
    {
        $Consultation = Consultation::find($id);
        return view('admin.consultations.show', [
            'Consultation' => $Consultation
        ]);
    }

    public function edit($id)
    {
        $Consultation= Consultation::find($id);
        return view('admin.consultations.edit', [
            'Consultation' => $Consultation
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Consultation::find($id);
        $data->title = $request->title;
        $data->user_id = $request->user_id;
        $data->consultant_id = $request->consultant_id;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->duration = $request->duration;
        $data->review = $request->review;
        $data->customer_entity = $request->customer_entity;
        $data->fee = $request->fee;
        $data->save();
        return redirect()->route('admin.consultations');
    }

    public function destroy($id)
    {
        $data =Consultation::find($id);
        $data->delete();
        return redirect()->route('admin.consultations');
    }
}
