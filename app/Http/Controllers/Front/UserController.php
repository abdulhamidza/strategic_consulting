<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Consultant;
use App\Models\Consultation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function load_consultation()
    {
        $consultations = Auth::user()->consultations()->get();
        return view('dashboard',[
            'consultations' => $consultations
        ]);
    }
    public function consultation_history    ()
    {
        $consultations = Auth::user()->consultations()->get();
        return view('history',[
            'consultations' => $consultations
        ]);
    }
    public function new_consultation()
    {
        $consultants = Consultant::All();
        return view('new-consultation',[
            'consultants' => $consultants
        ]);
    }

    public function consultationstore(Request $request)
    {
        $data = new Consultation();
        $data->title = $request->title;
        $data->user_id = Auth::user()->getId();
        $data->consultant_id = $request->consultant_id;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->duration = $request->duration;
        $data->customer_entity = $request->customer_entity;
        $data->fee = $request->fee;
        $data->save();
        return redirect()->route('dashboard');
    }

    public function messages()
    {
        $messages = Message::All();
        return view('messages',[
            'messages' => $messages
        ]);
    }
    public function new_message()
    {
        return view('new-message');
    }
    public function messagestore(Request $request)
    {
        $data = new Message();
        $data->user_id = Auth::user()->getId();
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->reply = $request->reply;
        $data->save();
        return redirect()->route('messages');
    }
    public function consultationcancel($id)
    {
        $data = Consultation::find($id);
//        $data = Consultation::where('id', $id)->where('user_id', Auth::user()->getId());
        $data->status = "canceled";
        $data->save();
        return redirect()->route('dashboard');
    }
}
